<?php

declare(strict_types=1);

$jsonFlags = JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;

$outPath = __DIR__ . "/../components.json";
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

    // Extract filename without extension from HTML comments
    // Matches: <!-- @include: @/meta/AccordionRoot.md -->
    preg_match_all('/<!--\s+@include:\s+@\/meta\/([A-Za-z0-9]+)\.md\s+-->/', $content, $commentMatches, PREG_PATTERN_ORDER);

    print_r($commentMatches);

    // Programmatically find all JSON stringified data tables
    // Matches: <PropsTable :data="..." />, <EmitsTable :data="..." />, <SlotsTable :data="..." />, <DataTable :data="..." />
    preg_match_all("/<([A-Za-z]+)Table\s+:data=\"(.*?)\"\s*\/?>/s", $content, $tableMatches, PREG_SET_ORDER);

    print_r($tableMatches);

    if (empty($tableMatches) && empty($commentMatches[1])) continue;

    $components = [];

    foreach ($commentMatches[1] as $componentId => $componentName) {
        $components[$componentName] = $tableMatches[$componentId] ?? null;
    }

    exit(print_r($components, true));

    foreach ($tableMatches as $m) {
        $tag = strtolower($m[1]);  // props, emits, slots, datatable, etc.
        $raw = "[" . $m[2] . "]";

        // Replace unescaped single quotes with double quotes
        $data = preg_replace("/(?<!\\\\)'/", '"', $raw);

        // Decode to PHP array
        $data = json_decode($data, true);

        if ($data === null) continue;

        // Explode pipe-separated values into proper arrays
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

        // Store under component name and table type
        $result[$componentName][$tag] = $data;
    }
}


exit("Debug after accordion\n");

// Write output
file_put_contents($outPath, json_encode($result, $jsonFlags));

echo "Wrote meta to: $outPath\n";