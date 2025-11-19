<?php

declare(strict_types=1);

/**
 * Scan all files in this folder, extract :data payloads from *Table tags
 * and write a JSON file at the folder's parent as meta.json
 */

$outPath = __DIR__ . '/../meta.json';
$dir = __DIR__ . '/../reka-meta';
$mdFiles = glob($dir . '/*.md');

$result = [];

foreach ($mdFiles as $file) {
    // Precautionary check, shouldn't be necessary with glob
    if (! is_file($file))
        continue;

    // for debugging, only process this file
    // if (strpos($file, 'DateFieldRoot') === false) continue;

    // Get extension and file name
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    $basename = pathinfo($file, PATHINFO_FILENAME);

    // Load file
    $content = file_get_contents($file);

    // Skip this iteration if file read fails
    if ($content === false)
        continue;

    // Replace certain square brackets with html chars temporarily
    $content = str_replace(['[]'], ['&#91;&#93;'], $content);
    // Strings to replace with space
    $content = str_replace(['\n'], ' ', $content);
    // boolean to string
    $content = str_replace([': true', ': false'], [': \'true\'', ': \'false\''], $content);
    // Not graceful but fix broken strings
    $content = str_replace(' \',', '\',', $content);
    // Strings to remove entirely
    $content = str_replace(["\'", '<p>', '</p>', '[', ']', ' &lt;br&gt;', '<br>'], '', $content);
    // Put the square brackets back
    $content = str_replace('&#91;', '[', $content);
    $content = str_replace('&#93;', ']', $content);

    // Programmatically find all JSON stringified data
    preg_match_all("/<([A-Za-z]+)Table\s+:data=\"(.*?)\"\s*\/?>/s", $content, $matches, PREG_SET_ORDER);

    if (empty($matches))
        continue;

    foreach ($matches as $m) {
        // $m[1] is tag prefix like Props, Emits, Slots
        // $m[2] is the raw attribute content
        $tag = strtolower($m[1]); // e.g. props, emits, slots
        $raw = '[' . $m[2] . ']';

        // Replace unescaped single quotes used as delimiters with double quotes
        $data = preg_replace("/(?<!\\\\)'/", '"', $raw);

        // Try to decode to PHP array
        $data = json_decode($data, true);

        // Explode pipe-separated fake arrays into proper arrays, dynamically
        foreach ($data as $eDKey => $eDVal) {
            foreach ($eDVal as $key => $val) {
                // Only process string values
                if (! is_string($val))
                    continue;

                // Split stringified arrays denoted by pipe
                if (strpos($val, ' | ') !== false) {
                    $explode = explode(' | ', $val);
                    $data[$eDKey][$key] = array_map('trim', $explode);
                }
            }
        }

        // store under the filename key and the tag (props/emits/slots)
        if (! isset($result[$basename]))
            $result[$basename] = new stdClass(); // keep object style
        $result[$basename]->{$tag} = $data;
    }
}

// Write output to the parent directory as meta.json
$jsonFlags = JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
file_put_contents($outPath, json_encode($result, $jsonFlags));

echo "Wrote meta to: $outPath\n";
