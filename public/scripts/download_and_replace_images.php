<?php

/**
 * Image Downloader and Replacement Script for PetTrack
 * 
 * This script:
 * 1. Extracts all image URLs from the home page
 * 2. Downloads them to a local directory structure
 * 3. Creates a backup of the original home.blade.php file
 * 4. Updates the home.blade.php file to use local image paths
 */

// Configuration
$saveDirectory = __DIR__ . '/../images/downloaded/';
$logFile = __DIR__ . '/image_download_log.txt';
$homePagePath = __DIR__ . '/../../resources/views/home.blade.php';
$backupPath = __DIR__ . '/../../resources/views/home.blade.php.bak';

// Create the save directory if it doesn't exist
if (!file_exists($saveDirectory)) {
    mkdir($saveDirectory, 0755, true);
}

// Initialize log file
$log = fopen($logFile, 'w');
fwrite($log, "Image Download and Replacement Log - " . date('Y-m-d H:i:s') . "\n\n");

// Function to extract image URLs from HTML content
function extractImageUrls($html) {
    $imageUrls = [];
    
    // Extract background images from inline styles
    preg_match_all('/background-image:\s*url\([\'"]([^\'"]+)[\'"]\)/', $html, $bgMatches);
    if (!empty($bgMatches[1])) {
        $imageUrls = array_merge($imageUrls, $bgMatches[1]);
    }
    
    // Extract image URLs from img tags
    preg_match_all('/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]*>/', $html, $imgMatches);
    if (!empty($imgMatches[1])) {
        $imageUrls = array_merge($imageUrls, $imgMatches[1]);
    }
    
    // Extract image URLs from PHP arrays (specific to this template)
    preg_match_all('/\[\'img\'\] => \'([^\']+)\'/', $html, $phpArrayMatches);
    if (!empty($phpArrayMatches[1])) {
        $imageUrls = array_merge($imageUrls, $phpArrayMatches[1]);
    }
    
    return array_unique($imageUrls);
}

// Function to download an image and return the local path
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
    $relativePath = '/images/downloaded/' . $domain . '/' . $filename;
    
    $counter = 1;
    while (file_exists($savePath)) {
        $info = pathinfo($filename);
        $newFilename = $info['filename'] . '_' . $counter . '.' . (isset($info['extension']) ? $info['extension'] : '');
        $savePath = $domainDir . $newFilename;
        $relativePath = '/images/downloaded/' . $domain . '/' . $newFilename;
        $counter++;
    }
    
    // Download the image
    try {
        $imageContent = @file_get_contents($url);
        if ($imageContent === false) {
            fwrite($log, "ERROR: Could not download $url\n");
            return false;
        }
        
        file_put_contents($savePath, $imageContent);
        fwrite($log, "SUCCESS: Downloaded $url to $savePath\n");
        return $relativePath;
    } catch (Exception $e) {
        fwrite($log, "ERROR: Exception while downloading $url: " . $e->getMessage() . "\n");
        return false;
    }
}

// Get the home page content
$homePageContent = file_get_contents($homePagePath);

if ($homePageContent === false) {
    fwrite($log, "ERROR: Could not read home page template\n");
    die("Could not read home page template");
}

// Create a backup of the original file
file_put_contents($backupPath, $homePageContent);
fwrite($log, "Created backup of home.blade.php at $backupPath\n");

// Extract image URLs
$imageUrls = extractImageUrls($homePageContent);

// Download each image and build replacement map
$totalImages = count($imageUrls);
$successCount = 0;
$failCount = 0;
$replacements = [];

fwrite($log, "Found $totalImages unique image URLs\n\n");

echo "<!DOCTYPE html>
<html>
<head>
    <title>Image Download and Replacement Progress</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .progress-container {
            width: 100%;
            background-color: #f3f3f3;
            border-radius: 5px;
            margin: 20px 0;
        }
        .progress-bar {
            height: 30px;
            background-color: #4CAF50;
            border-radius: 5px;
            text-align: center;
            line-height: 30px;
            color: white;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
        .code {
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <h1>Image Download and Replacement Progress</h1>
    <div class='progress-container'>
        <div class='progress-bar' id='progressBar' style='width: 0%'>0%</div>
    </div>
    <p id='status'>Downloading <span id='current'>0</span> of <span id='total'>{$totalImages}</span> images...</p>
    
    <h2>Image List</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Original URL</th>
                <th>Local Path</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>";

// Process each image and update the UI
foreach ($imageUrls as $index => $url) {
    $current = $index + 1;
    $percent = round(($current / $totalImages) * 100);
    
    echo "<tr>
            <td>{$current}</td>
            <td>{$url}</td>";
    
    $localPath = downloadImage($url, $saveDirectory, $log);
    
    if ($localPath) {
        $successCount++;
        echo "<td>{$localPath}</td><td class='success'>Success</td>";
        $replacements[$url] = $localPath;
    } else {
        $failCount++;
        echo "<td>N/A</td><td class='error'>Failed</td>";
    }
    
    echo "</tr>";
    
    // Flush output to show progress
    echo "<script>
        document.getElementById('progressBar').style.width = '{$percent}%';
        document.getElementById('progressBar').innerText = '{$percent}%';
        document.getElementById('current').innerText = '{$current}';
    </script>";
    
    flush();
    ob_flush();
    
    // Small delay to avoid overwhelming the server
    usleep(100000); // 100ms
}

echo "</tbody>
    </table>";

// Update the home page content with local paths
$updatedContent = $homePageContent;
$replacementCount = 0;

echo "<h2>Replacing URLs in Template</h2>";
echo "<div class='progress-container'>
        <div class='progress-bar' id='replaceBar' style='width: 0%'>0%</div>
      </div>";

$totalReplacements = count($replacements);
$currentReplacement = 0;

foreach ($replacements as $originalUrl => $localPath) {
    $currentReplacement++;
    $percentReplacement = round(($currentReplacement / $totalReplacements) * 100);
    
    // Replace in background-image: url('...')
    $pattern = '/background-image:\s*url\([\'"]' . preg_quote($originalUrl, '/') . '[\'"]\)/';
    $replacement = 'background-image: url(\'' . $localPath . '\')';
    $count = 0;
    $updatedContent = preg_replace($pattern, $replacement, $updatedContent, -1, $count);
    $replacementCount += $count;
    
    // Replace in <img src="...">
    $pattern = '/<img([^>]+)src=[\'"]' . preg_quote($originalUrl, '/') . '[\'"]([^>]*)>/';
    $replacement = '<img$1src="' . $localPath . '"$2>';
    $count = 0;
    $updatedContent = preg_replace($pattern, $replacement, $updatedContent, -1, $count);
    $replacementCount += $count;
    
    // Replace in PHP arrays
    $pattern = '/\[\'img\'\] => \'' . preg_quote($originalUrl, '/') . '\'/';
    $replacement = '[\'img\'] => \'' . $localPath . '\'';
    $count = 0;
    $updatedContent = preg_replace($pattern, $replacement, $updatedContent, -1, $count);
    $replacementCount += $count;
    
    echo "<script>
        document.getElementById('replaceBar').style.width = '{$percentReplacement}%';
        document.getElementById('replaceBar').innerText = '{$percentReplacement}%';
    </script>";
    
    flush();
    ob_flush();
}

// Save the updated content
if ($replacementCount > 0) {
    file_put_contents($homePagePath, $updatedContent);
    fwrite($log, "\nReplaced $replacementCount image URLs in the template\n");
    echo "<p class='success'>Successfully replaced $replacementCount image URLs in the template</p>";
} else {
    fwrite($log, "\nNo image URLs were replaced in the template\n");
    echo "<p class='error'>No image URLs were replaced in the template</p>";
}

// Summary
fwrite($log, "\nSummary:\n");
fwrite($log, "Total images: $totalImages\n");
fwrite($log, "Successfully downloaded: $successCount\n");
fwrite($log, "Failed: $failCount\n");
fwrite($log, "URLs replaced in template: $replacementCount\n");
fclose($log);

echo "<h2>Summary</h2>
    <p>Total images: {$totalImages}</p>
    <p>Successfully downloaded: {$successCount}</p>
    <p>Failed: {$failCount}</p>
    <p>URLs replaced in template: {$replacementCount}</p>
    
    <p>A detailed log has been saved to: {$logFile}</p>
    
    <h2>Next Steps</h2>
    <p>The script has:</p>
    <ol>
        <li>Downloaded all images from the home page</li>
        <li>Created a backup of the original home.blade.php at {$backupPath}</li>
        <li>Updated home.blade.php to use local image paths</li>
    </ol>
    
    <h3>Manual Verification</h3>
    <p>Please verify that the home page still displays correctly with the local images. If there are any issues:</p>
    <ol>
        <li>Restore the backup: <code>cp {$backupPath} {$homePagePath}</code></li>
        <li>Check the log file for details on which images failed to download</li>
    </ol>
    
    <h3>Implementing Local Images in Other Templates</h3>
    <p>To implement local images in other templates, you can use this PHP code as a reference:</p>
    
    <pre class='code'>
&lt;?php
// Script to replace image URLs in template files
\$templateFile = '/path/to/template.blade.php';
\$content = file_get_contents(\$templateFile);

// Define replacements (original URL => local path)
\$replacements = " . htmlspecialchars(var_export($replacements, true)) . ";

// Perform replacements
foreach (\$replacements as \$original => \$replacement) {
    \$content = str_replace(\$original, \$replacement, \$content);
}

// Save the updated content
file_put_contents(\$templateFile, \$content);
echo 'Template updated successfully!';
?&gt;
    </pre>
    
    <p><a href='/'>Return to Home</a> | <a href='/scripts/download_and_replace_images.php'>Run Again</a></p>
</body>
</html>";
