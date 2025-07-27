<?php

/**
 * Image Downloader Script for PetTrack
 * 
 * This script extracts all image URLs from the home page and downloads them
 * to a local directory structure that mirrors the original paths.
 */

// Configuration
$saveDirectory = __DIR__ . '/../images/downloaded/';
$logFile = __DIR__ . '/image_download_log.txt';

// Create the save directory if it doesn't exist
if (!file_exists($saveDirectory)) {
    mkdir($saveDirectory, 0755, true);
}

// Initialize log file
$log = fopen($logFile, 'w');
fwrite($log, "Image Download Log - " . date('Y-m-d H:i:s') . "\n\n");

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
            fwrite($log, "ERROR: Could not download $url\n");
            return false;
        }
        
        file_put_contents($savePath, $imageContent);
        fwrite($log, "SUCCESS: Downloaded $url to $savePath\n");
        return true;
    } catch (Exception $e) {
        fwrite($log, "ERROR: Exception while downloading $url: " . $e->getMessage() . "\n");
        return false;
    }
}

// Get the home page content
$homePagePath = __DIR__ . '/../../resources/views/home.blade.php';
$homePageContent = file_get_contents($homePagePath);

if ($homePageContent === false) {
    fwrite($log, "ERROR: Could not read home page template\n");
    die("Could not read home page template");
}

// Extract image URLs
$imageUrls = extractImageUrls($homePageContent);

// Download each image
$totalImages = count($imageUrls);
$successCount = 0;
$failCount = 0;

fwrite($log, "Found $totalImages unique image URLs\n\n");

echo "<!DOCTYPE html>
<html>
<head>
    <title>Image Download Progress</title>
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
    </style>
</head>
<body>
    <h1>Image Download Progress</h1>
    <div class='progress-container'>
        <div class='progress-bar' id='progressBar' style='width: 0%'>0%</div>
    </div>
    <p id='status'>Downloading <span id='current'>0</span> of <span id='total'>{$totalImages}</span> images...</p>
    
    <h2>Image List</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Image URL</th>
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
    
    $result = downloadImage($url, $saveDirectory, $log);
    
    if ($result) {
        $successCount++;
        echo "<td class='success'>Success</td>";
    } else {
        $failCount++;
        echo "<td class='error'>Failed</td>";
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

// Summary
fwrite($log, "\nSummary:\n");
fwrite($log, "Total images: $totalImages\n");
fwrite($log, "Successfully downloaded: $successCount\n");
fwrite($log, "Failed: $failCount\n");
fclose($log);

echo "</tbody>
    </table>
    
    <h2>Summary</h2>
    <p>Total images: {$totalImages}</p>
    <p>Successfully downloaded: {$successCount}</p>
    <p>Failed: {$failCount}</p>
    
    <p>A detailed log has been saved to: {$logFile}</p>
    
    <h2>Next Steps</h2>
    <p>To implement these images locally in your templates:</p>
    <ol>
        <li>Replace external URLs in your templates with local paths</li>
        <li>For example, replace <code>https://images.pexels.com/photos/1108099/pexels-photo-1108099.jpeg</code> with <code>/images/downloaded/images.pexels.com/photos/1108099/pexels-photo-1108099.jpeg</code></li>
        <li>You can use the following PHP script to automate this replacement:</li>
    </ol>
    
    <pre>
&lt;?php
// Script to replace image URLs in template files
$templateFile = '/path/to/template.blade.php';
$content = file_get_contents($templateFile);

// Define replacements (original URL => local path)
$replacements = [
    'https://images.pexels.com/photos/1108099/pexels-photo-1108099.jpeg' => '/images/downloaded/images.pexels.com/photos/1108099/pexels-photo-1108099.jpeg',
    // Add more replacements as needed
];

// Perform replacements
foreach ($replacements as $original => $replacement) {
    $content = str_replace($original, $replacement, $content);
}

// Save the updated content
file_put_contents($templateFile, $content);
echo 'Template updated successfully!';
?&gt;
    </pre>
    
    <p><a href='/'>Return to Home</a></p>
</body>
</html>";
