<?php
/**
 * Run Image Downloader
 * 
 * This is a simple script to run the image downloader with a user-friendly interface
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>PetTrack Image Downloader</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            line-height: 1.6;
        }
        .container {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }
        h1, h2 {
            color: #004558;
        }
        .btn {
            display: inline-block;
            background-color: #004558;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin-right: 10px;
            border: none;
            cursor: pointer;
        }
        .btn-primary {
            background-color: #c7352c;
        }
        .btn:hover {
            opacity: 0.9;
        }
        .alert {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .alert-info {
            background-color: #d1ecf1;
            border: 1px solid #bee5eb;
            color: #0c5460;
        }
        .alert-warning {
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
            color: #856404;
        }
        code {
            background-color: #f5f5f5;
            padding: 2px 5px;
            border-radius: 3px;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <h1>PetTrack Image Downloader</h1>
    
    <div class="container">
        <h2>Available Tools</h2>
        
        <div class="alert alert-info">
            <p><strong>Note:</strong> These tools will help you download all images from the home page and implement them locally.</p>
        </div>
        
        <div class="alert alert-warning">
            <p><strong>Warning:</strong> The image replacement tool will modify your template files. A backup will be created, but please proceed with caution.</p>
        </div>
        
        <h3>1. Download Images Only</h3>
        <p>This tool will download all images from the home page but won't modify any template files.</p>
        <a href="/scripts/download_images.php" class="btn">Download Images Only</a>
        
        <h3>2. Download and Replace Images</h3>
        <p>This tool will download all images and automatically update the home.blade.php template to use local paths.</p>
        <a href="/scripts/download_and_replace_images.php" class="btn btn-primary">Download and Replace Images</a>
    </div>
    
    <div class="container">
        <h2>Implementation Guide</h2>
        <p>After downloading the images, you can implement them in your templates using these approaches:</p>
        
        <h3>For Background Images:</h3>
        <pre><code>background-image: url('{{ asset('/images/downloaded/domain.com/image.jpg') }}');</code></pre>
        
        <h3>For Image Tags:</h3>
        <pre><code>&lt;img src="{{ asset('/images/downloaded/domain.com/image.jpg') }}" alt="Description"&gt;</code></pre>
        
        <h3>For PHP Arrays:</h3>
        <pre><code>$pets = [
    ['name' => 'Dogs', 'img' => '/images/downloaded/domain.com/dogs.jpg'],
    // other items...
];</code></pre>
        
        <p>Using <code>asset()</code> helper is recommended as it will properly handle your application's base URL.</p>
    </div>
    
    <p><a href="/" class="btn">Return to Home</a></p>
</body>
</html>
