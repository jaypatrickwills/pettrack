#!/usr/bin/env python3
"""
PetTrack Image Downloader

This script extracts all image URLs from the home page and downloads them
to a local directory structure for local implementation.
"""

import os
import re
import sys
import time
import urllib.parse
import urllib.request
import shutil
from datetime import datetime
from pathlib import Path

# Configuration
SCRIPT_DIR = Path(__file__).parent
HOME_PAGE_PATH = SCRIPT_DIR / "resources" / "views" / "home.blade.php"
SAVE_DIRECTORY = SCRIPT_DIR / "public" / "images" / "downloaded"
LOG_FILE = SCRIPT_DIR / "image_download_log.txt"

# ANSI color codes for terminal output
class Colors:
    HEADER = '\033[95m'
    BLUE = '\033[94m'
    CYAN = '\033[96m'
    GREEN = '\033[92m'
    WARNING = '\033[93m'
    FAIL = '\033[91m'
    ENDC = '\033[0m'
    BOLD = '\033[1m'
    UNDERLINE = '\033[4m'

def print_header(text):
    """Print a formatted header."""
    print(f"\n{Colors.HEADER}{Colors.BOLD}=== {text} ==={Colors.ENDC}\n")

def print_success(text):
    """Print a success message."""
    print(f"{Colors.GREEN}✓ {text}{Colors.ENDC}")

def print_error(text):
    """Print an error message."""
    print(f"{Colors.FAIL}✗ {text}{Colors.ENDC}")

def print_info(text):
    """Print an info message."""
    print(f"{Colors.CYAN}ℹ {text}{Colors.ENDC}")

def print_progress(current, total, prefix='', suffix='', length=50):
    """Print a progress bar."""
    percent = float(current) * 100 / total
    filled_length = int(length * current // total)
    bar = '█' * filled_length + '░' * (length - filled_length)
    sys.stdout.write(f'\r{prefix} |{bar}| {percent:.1f}% {suffix}')
    sys.stdout.flush()
    if current == total:
        print()

def extract_image_urls(html_content):
    """Extract all image URLs from HTML content."""
    image_urls = []
    
    # Extract background images from inline styles
    bg_pattern = r'background-image:\s*url\([\'"]([^\'"]+)[\'"]\)'
    bg_matches = re.findall(bg_pattern, html_content)
    if bg_matches:
        image_urls.extend(bg_matches)
    
    # Extract image URLs from img tags
    img_pattern = r'<img[^>]+src=[\'"]([^\'"]+)[\'"]'
    img_matches = re.findall(img_pattern, html_content)
    if img_matches:
        image_urls.extend(img_matches)
    
    # Extract image URLs from PHP arrays (specific to this template)
    php_array_pattern = r'\[\'img\'\] => \'([^\']+)\''
    php_array_matches = re.findall(php_array_pattern, html_content)
    if php_array_matches:
        image_urls.extend(php_array_matches)
    
    # Filter out non-HTTP URLs and remove duplicates
    http_urls = [url for url in image_urls if url.startswith('http')]
    return list(set(http_urls))

def download_image(url, save_directory, log_file):
    """Download an image and return the local path."""
    try:
        # Parse URL to get the path
        parsed_url = urllib.parse.urlparse(url)
        path = parsed_url.path
        
        # Remove query parameters if present
        path = path.split('?')[0]
        
        # Get the filename from the path
        filename = os.path.basename(path)
        
        # Create a directory structure based on the domain
        domain = parsed_url.netloc
        domain_dir = save_directory / domain
        domain_dir.mkdir(parents=True, exist_ok=True)
        
        # Generate a unique filename if needed
        save_path = domain_dir / filename
        relative_path = f"/images/downloaded/{domain}/{filename}"
        
        counter = 1
        while save_path.exists():
            name, ext = os.path.splitext(filename)
            new_filename = f"{name}_{counter}{ext}"
            save_path = domain_dir / new_filename
            relative_path = f"/images/downloaded/{domain}/{new_filename}"
            counter += 1
        
        # Download the image
        with urllib.request.urlopen(url, timeout=10) as response, open(save_path, 'wb') as out_file:
            shutil.copyfileobj(response, out_file)
        
        log_file.write(f"SUCCESS: Downloaded {url} to {save_path}\n")
        return relative_path
    
    except Exception as e:
        log_file.write(f"ERROR: Could not download {url}: {str(e)}\n")
        return None

def main():
    """Main function to download images."""
    print_header("PetTrack Image Downloader")
    
    # Create save directory if it doesn't exist
    SAVE_DIRECTORY.mkdir(parents=True, exist_ok=True)
    
    # Initialize log file
    with open(LOG_FILE, 'w') as log:
        log.write(f"Image Download Log - {datetime.now().strftime('%Y-%m-%d %H:%M:%S')}\n\n")
        
        try:
            # Read the home page content
            print_info(f"Reading home page from {HOME_PAGE_PATH}")
            with open(HOME_PAGE_PATH, 'r', encoding='utf-8') as file:
                home_page_content = file.read()
            
            # Extract image URLs
            print_info("Extracting image URLs...")
            image_urls = extract_image_urls(home_page_content)
            total_images = len(image_urls)
            
            if total_images == 0:
                print_error("No image URLs found in the home page.")
                log.write("No image URLs found in the home page.\n")
                return
            
            print_success(f"Found {total_images} unique image URLs")
            log.write(f"Found {total_images} unique image URLs\n\n")
            
            # Download each image
            print_header("Downloading Images")
            success_count = 0
            fail_count = 0
            replacements = {}
            
            for i, url in enumerate(image_urls):
                print_progress(i, total_images, prefix='Progress:', suffix=f'({i}/{total_images})')
                print(f"\nDownloading: {url}")
                
                local_path = download_image(url, SAVE_DIRECTORY, log)
                
                if local_path:
                    success_count += 1
                    replacements[url] = local_path
                    print_success(f"Saved to {local_path}")
                else:
                    fail_count += 1
                    print_error(f"Failed to download {url}")
                
                # Small delay to avoid overwhelming servers
                time.sleep(0.1)
            
            print_progress(total_images, total_images, prefix='Progress:', suffix=f'({total_images}/{total_images})')
            
            # Summary
            print_header("Summary")
            print(f"Total images: {total_images}")
            print(f"Successfully downloaded: {success_count}")
            print(f"Failed: {fail_count}")
            
            log.write("\nSummary:\n")
            log.write(f"Total images: {total_images}\n")
            log.write(f"Successfully downloaded: {success_count}\n")
            log.write(f"Failed: {fail_count}\n")
            
            # Generate replacement guide
            if success_count > 0:
                print_header("Replacement Guide")
                print("To implement these images locally in your templates, replace the URLs as follows:")
                print("\nExample replacements:")
                
                # Show a few examples
                for i, (url, local_path) in enumerate(list(replacements.items())[:3]):
                    print(f"\n{i+1}. Original: {url}")
                    print(f"   Replace with: {{ asset('{local_path}') }}")
                
                # Create a replacement guide file
                guide_path = SCRIPT_DIR / "image_replacement_guide.txt"
                with open(guide_path, 'w') as guide:
                    guide.write("Image Replacement Guide\n")
                    guide.write("=====================\n\n")
                    guide.write("Replace the following URLs in your templates:\n\n")
                    
                    for url, local_path in replacements.items():
                        guide.write(f"Original: {url}\n")
                        guide.write(f"Replace with: {{ asset('{local_path}') }}\n\n")
                
                print(f"\nA complete replacement guide has been saved to {guide_path}")
            
            print(f"\nA detailed log has been saved to {LOG_FILE}")
            
        except Exception as e:
            print_error(f"An error occurred: {str(e)}")
            log.write(f"ERROR: {str(e)}\n")

if __name__ == "__main__":
    main()
