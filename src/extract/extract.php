<?php

declare(strict_types=1);

// 1. Run script/1-unzip.php to extract the necessary files from the Reka UI zip archive.

$scripts = [
    //'1-unzip.php',
    //'2-glob.php',
    '3-scrape.php',
];

foreach ($scripts as $scriptName) {
    $script = __DIR__."/script/{$scriptName}";

    if (!is_file($script) || !is_readable($script)) {
        fwrite(STDERR, "Error: script not found or not readable: {$script}\n");
        exit(1);
    }

    $cmd = escapeshellarg(PHP_BINARY) . ' ' . escapeshellarg($script);
    passthru($cmd, $exitCode);

    if ($exitCode !== 0) {
        exit($exitCode);
    }
}

exit(0);