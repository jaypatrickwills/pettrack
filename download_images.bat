@echo off
echo PetTrack Image Downloader
echo ========================
echo.
echo This script will download all images from the home page and save them locally.
echo.
echo Creating necessary directories...
if not exist "public\images\downloaded" mkdir "public\images\downloaded"
echo.

echo Running PHP script to extract and download images...
php -r "
// Configuration
$saveDirectory = __DIR__ . '/public/images/downloaded/';
$logFile = __DIR__ . '/image_download_log.txt';

// Create the save directory if it doesn't exist
if (!file_exists($saveDirectory)) {
    mkdir($saveDirectory, 0755, true);
}

// Initialize log file
$log = fopen($logFile, 'w');
fwrite($log, \"Image Download Log - \" . date('Y-m-d H:i:s') . \"\n\n\");

// Function to extract image URLs from HTML content
function extractImageUrls($html) {
    $imageUrls = [];
    
    // Extract background images from inline styles
    preg_match_all('/background-image:\s*url\([\'\"](https?:\/\/[^\'\"]+)[\'\"]\)/', $html, $bgMatches);
    if (!empty($bgMatches[1])) {
        $imageUrls = array_merge($imageUrls, $bgMatches[1]);
    }
    
    // Extract image URLs from img tags
    preg_match_all('/<img[^>]+src=[\'\"](https?:\/\/[^\'\"]+)[\'\"]/i', $html, $imgMatches);
    if (!empty($imgMatches[1])) {
        $imageUrls = array_merge($imageUrls, $imgMatches[1]);
    }
    
    // Extract image URLs from PHP arrays (specific to this template)
    preg_match_all('/\[\'img\'\] => \'(https?:\/\/[^\']+)\'/', $html, $phpArrayMatches);
    if (!empty($phpArrayMatches[1])) {
        $imageUrls = array_merge($imageUrls, $phpArrayMatches[1]);
    }
    
    return array_unique($imageUrls);
}

// Function to download an image
function downloadImage($url, $saveDirectory, $log) {
    // Parse URL to get the path
    $parsedUrl = parse_url($url);
    $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
    
    // Remove query parameters if present
    $path = preg_replace('/\?.*/', '', $path);
    
    // Get the filename from the path
    $filename = basename($path);
    
    // Create a directory structure based on the domain
    $domain = isset($parsedUrl['host']) ? $parsedUrl['host'] : 'unknown';
    $domainDir = $saveDirectory . $domain . '/';
    
    if (!file_exists($domainDir)) {
        mkdir($domainDir, 0755, true);
    }
    
    // Generate a unique filename if needed
    $savePath = $domainDir . $filename;
    $counter = 1;
    while (file_exists($savePath)) {
        $info = pathinfo($filename);
        $savePath = $domainDir . $info['filename'] . '_' . $counter . '.' . (isset($info['extension']) ? $info['extension'] : '');
        $counter++;
    }
    
    // Download the image
    try {
        $imageContent = @file_get_contents($url);
        if ($imageContent === false) {
            fwrite($log, \"ERROR: Could not download $url\n\");
            echo \"ERROR: Could not download $url\n\";
            return false;
        }
        
        file_put_contents($savePath, $imageContent);
        fwrite($log, \"SUCCESS: Downloaded $url to $savePath\n\");
        echo \"SUCCESS: Downloaded $url to $savePath\n\";
        return true;
    } catch (Exception $e) {
        fwrite($log, \"ERROR: Exception while downloading $url: \" . $e->getMessage() . \"\n\");
        echo \"ERROR: Exception while downloading $url: \" . $e->getMessage() . \"\n\";
        return false;
    }
}

// Get the home page content
$homePagePath = __DIR__ . '/resources/views/home.blade.php';
$homePageContent = file_get_contents($homePagePath);

if ($homePageContent === false) {
    fwrite($log, \"ERROR: Could not read home page template\n\");
    echo \"ERROR: Could not read home page template\n\";
    exit(1);
}

// Extract image URLs
$imageUrls = extractImageUrls($homePageContent);

// Download each image
$totalImages = count($imageUrls);
$successCount = 0;
$failCount = 0;

fwrite($log, \"Found $totalImages unique image URLs\n\n\");
echo \"Found $totalImages unique image URLs\n\n\";

// Process each image
foreach ($imageUrls as $url) {
    echo \"Downloading: $url\n\";
    $result = downloadImage($url, $saveDirectory, $log);
    
    if ($result) {
        $successCount++;
    } else {
        $failCount++;
    }
}

// Summary
fwrite($log, \"\nSummary:\n\");
fwrite($log, \"Total images: $totalImages\n\");
fwrite($log, \"Successfully downloaded: $successCount\n\");
fwrite($log, \"Failed: $failCount\n\");
fclose($log);

echo \"\nSummary:\n\";
echo \"Total images: $totalImages\n\";
echo \"Successfully downloaded: $successCount\n\";
echo \"Failed: $failCount\n\";
echo \"\nA detailed log has been saved to: $logFile\n\";
"

echo.
echo Download process complete! Check the image_download_log.txt file for details.
echo.
echo The images have been saved to: public\images\downloaded\
echo.
echo Next steps:
echo 1. Update your templates to use local image paths
echo 2. For example, replace:
echo    https://images.pexels.com/photos/1108099/pexels-photo-1108099.jpeg
echo    with:
echo    /images/downloaded/images.pexels.com/photos/1108099/pexels-photo-1108099.jpeg
echo.
echo Press any key to exit...
pause > nul
