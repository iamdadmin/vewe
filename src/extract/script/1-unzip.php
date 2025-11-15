<?php

declare(strict_types=1);

function cleanDirectory($dir): void {
    if (!is_dir($dir)) {
        return;
    }
    
    $files = array_diff(scandir($dir), ['.', '..']);
    
    foreach ($files as $file) {
        $path = $dir . DIRECTORY_SEPARATOR . $file;
        is_dir($path) ? cleanDirectory($path) : unlink($path);
    }
}

function zipStatusMessage(int $status): string {
    $map = [
        ZipArchive::ER_OK => 'No error',
        ZipArchive::ER_MULTIDISK => 'Multi-disk zip archives not supported',
        ZipArchive::ER_RENAME => 'Renaming temporary file failed',
        ZipArchive::ER_CLOSE => 'Closing zip archive failed',
        ZipArchive::ER_SEEK => 'Seek error',
        ZipArchive::ER_READ => 'Read error',
        ZipArchive::ER_WRITE => 'Write error',
        ZipArchive::ER_CRC => 'CRC error',
        ZipArchive::ER_ZIPCLOSED => 'Containing zip archive was closed',
        ZipArchive::ER_NOENT => 'No such file',
        ZipArchive::ER_EXISTS => 'File already exists',
        ZipArchive::ER_OPEN => 'Can\'t open file',
        ZipArchive::ER_TMPOPEN => 'Temporary file error',
        ZipArchive::ER_ZLIB => 'Zlib error',
        ZipArchive::ER_MEMORY => 'Memory allocation failure',
        ZipArchive::ER_CHANGED => 'Entry has been changed',
        ZipArchive::ER_COMPNOTSUPP => 'Compression method not supported',
        ZipArchive::ER_EOF => 'Premature EOF',
        ZipArchive::ER_INVAL => 'Invalid argument',
        ZipArchive::ER_NOZIP => 'Not a zip archive',
        ZipArchive::ER_INTERNAL => 'Internal error',
        ZipArchive::ER_INCONS => 'Zip archive inconsistent',
        ZipArchive::ER_REMOVE => 'Can\'t remove file',
        ZipArchive::ER_DELETED => 'Entry has been deleted',
    ];
    return $map[$status] ?? 'Unknown error code ' . $status;
}

function doExtract(string $zipArchive, string $target_path, string $extract_to): void {
    // Clean up existing files
    cleanDirectory($extract_to);

    $zip = new ZipArchive();
    $res = $zip->open($zipArchive);
    if ($res === TRUE) {
        for ($i = 0; $i < $zip->numFiles; $i++) {
            $filename = $zip->getNameIndex($i);
            // Look for the target path anywhere in the filename
            if (($pos = strpos($filename, $target_path)) !== false) {
                $relative_path = substr($filename, $pos + strlen($target_path));
                $target_path_full = $extract_to . $relative_path;
                
                if (substr($filename, -1) === '/') {
                    @mkdir($target_path_full, 0777, true);
                } else {
                    @mkdir(dirname($target_path_full), 0777, true);
                    copy("zip://$zipArchive#$filename", $target_path_full);
                }
            }
        }
        $zip->close();
        $outPath = str_replace("script/../", "", $target_path_full);
        echo "Extracted: {$target_path} to {$outPath}\n";
    } else {
        echo "Failed to open the zip file. Status: {$res} - " . zipStatusMessage($res) . PHP_EOL;
        echo "Zip path: {$zipArchive}" . PHP_EOL;
        echo "realpath: " . (realpath($zipArchive) ?: 'N/A') . PHP_EOL;
        echo "file_exists: " . (file_exists($zipArchive) ? 'yes' : 'no') . PHP_EOL;
        echo "is_readable: " . (is_readable($zipArchive) ? 'yes' : 'no') . PHP_EOL;
        echo "filesize: " . (file_exists($zipArchive) ? filesize($zipArchive) : 'N/A') . PHP_EOL;
    }
}

$zipArchive = __DIR__ . "/../reka-ui-2.6.0.zip";

$extraction = [
    "docs/content/meta" => __DIR__ . "/../reka-meta",
    "docs/content/docs/components" => __DIR__ . "/../reka-components",
];

foreach ($extraction as $target_path => $extract_to) {
    doExtract($zipArchive, $target_path, $extract_to);
}
