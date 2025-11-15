<?php

declare(strict_types=1);

$jsonFlags = JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;

$outPath = __DIR__ . "/../meta.json";
$dir = __DIR__ . "/../reka-components";
$mdFiles = glob($dir . '/*.md');

// Read existing meta.json if it exists
$metaPath = __DIR__ . "/../meta.json";
$result = file_exists($metaPath) ? json_decode(file_get_contents($metaPath), true) : [];

foreach ($mdFiles as $file) {
    // Precautionary check, shouldn't be necessary with glob
    if (!is_file($file)) continue;

    // Get extension and file name
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    $basename = pathinfo($file, PATHINFO_FILENAME);

    // for debugging, only process this file
    if ($basename !== 'accordion') continue;
    
    // Load file
    $content = file_get_contents($file);
    
    // Skip this iteration if file read fails
    if ($content === false) continue;

    // Replace certain square brackets with html chars temporarily
    //$content = str_replace(['[]'], ['&#91;&#93;'], $content);
    // Strings to replace with space
    //$content = str_replace(['\n'], ' ', $content);
    // boolean to string
    //$content = str_replace([': true', ': false'], [': \'true\'', ': \'false\''], $content);
    // Not graceful but fix broken strings
    //$content = str_replace(' \',', '\',', $content);
    // Strings to remove entirely
    //$content = str_replace(["\'", '<p>', '</p>', '[', ']', ' &lt;br&gt;', '<br>'], '', $content);
    // Put the square brackets back
    //$content = str_replace('&#91;', '[', $content);
    //$content = str_replace('&#93;', ']', $content);

    // Match: HTML comment + all consecutive table blocks that follow
    // Stops when it hits a /> NOT followed by <*Table
    preg_match_all(
        '/<!--\s+@include:\s+@\/meta\/([A-Za-z0-9]+)\.md\s+-->\s*((?:<[A-Za-z]+Table[^>]*\/>|\s+)*)/s',
        $content,
        $matches,
        PREG_SET_ORDER
    );

    //print_r($matches);

    foreach ($matches as $match) {
        $componentName = $match[1];
        $blockContent = $match[2];

        // Now extract individual table blocks from this section
        preg_match_all(
            "/<([A-Za-z]+)Table\s+:data=\"(.*?)\"\s*\/?>/s",
            $blockContent,
            $tableMatches,
            PREG_SET_ORDER
        );

        //print_r($tableMatches);

        foreach ($tableMatches as $tableMatch) {
            $tag = strtolower($tableMatch[1]);  // props, emits, slots, datatable, etc.
            $raw = $tableMatch[2];

            // Replace bits in $raw
            $raw = str_replace(["'[", "]'"], "'", $raw);
            $raw = str_replace("}]", "}\n]", $raw);

            // Replace unescaped single quotes with double quotes
            $raw = preg_replace("/(?<!\\\\)'/", '"', $raw);

            // Quote unquoted keys (word: becomes "word":)
            $raw = preg_replace('/([{,]\s*)([a-zA-Z_][a-zA-Z0-9_]*)\s*:/', '$1"$2":', $raw);

            // Remove trailing commas before closing brackets/braces
            $raw = preg_replace('/,\s*(?=[}\]])/', '', $raw);
            
            // Decode to PHP array
            $data = json_decode($raw, true);

            if ($data === null) {
                echo "JSON Decode Error: " . json_last_error_msg() . "\n";
                echo "Error Code: " . json_last_error() . "\n";
                echo "Raw input:\n";
                var_dump($raw);
                exit("\n");
            }

            if ($data === null) {
                echo(":: failed component {$tag}\n");
                continue;
            }

            // Explode pipe-separated values into proper arrays
            // I don't think there are any but keeping for consistency/future-proofing
            foreach ($data as $eDKey => $eDVal) {
                if (!is_array($eDVal)) continue;
                
                foreach ($eDVal as $key => $val) {
                    if (!is_string($val)) continue;
                    
                    if (strpos($val, " | ") !== false) {
                        $explode = explode(" | ", $val);
                        $data[$eDKey][$key] = array_map('trim', $explode);
                    }
                }
            }

            $result[$componentName][$tag] = $data;
        }
    }
}

// Write output
file_put_contents($outPath, json_encode($result, $jsonFlags));

$outPath = str_replace("script/../", "", $outPath);
echo "Wrote meta to: {$outPath}\n";