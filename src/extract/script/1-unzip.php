<?php

declare(strict_types=1);

$reka_zip = __DIR__ . '../reka-ui-2.6.0.zip';
$extract_to = __DIR__ . '../reka-src';
$target_path = 'packages/core/src/';

function cleanDirectory($dir) {
    if (!is_dir($dir)) {
        return;
    }
    
    $files = array_diff(scandir($dir), ['.', '..']);
    
    foreach ($files as $file) {
        $path = $dir . DIRECTORY_SEPARATOR . $file;
        is_dir($path) ? cleanDirectory($path) : unlink($path);
    }
    
    if ($dir !== $extract_to) {
        rmdir($dir);
    }
}

// Clean up existing files
cleanDirectory($extract_to);

$zip = new ZipArchive();
if ($zip->open($reka_zip) === TRUE) {
    for ($i = 0; $i < $zip->numFiles; $i++) {
        $filename = $zip->getNameIndex($i);
        // Look for the target path anywhere in the filename
        if (($pos = strpos($filename, $target_path)) !== false) {
            $relative_path = substr($filename, $pos + strlen($target_path));
            $target_path_full = $extract_to . '/'. $relative_path;
            
            if (substr($filename, -1) === '/') {
                @mkdir($target_path_full, 0777, true);
            } else {
                @mkdir(dirname($target_path_full), 0777, true);
                copy("zip://$reka_zip#$filename", $target_path_full);
            }
        }
    }
    $zip->close();
    echo "Extraction completed successfully.\n";
} else {
    echo "Failed to open the zip file.\n";
}