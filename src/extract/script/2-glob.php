<?php

declare(strict_types=1);

$extracted_path = __DIR__ . '/../reka-src';
$output_file = __DIR__ . '/../reka-src.json';

function buildNestedArray(array $paths): array {
    $result = [];
    foreach ($paths as $path) {
        $parts = explode('/', $path);
        $current = &$result;
        
        $dir = array_shift($parts);
        if (!isset($current[$dir])) {
            $current[$dir] = ['components' => []];
        }
        
        // Handle test files
        if (strpos($path, '.test.') !== false) {
            if (!isset($current[$dir]['tests'])) $current[$dir]['tests'] = [];
            $current[$dir]['tests'][] = end($parts);
            continue;
        }
        
        // Handle story files
        if (in_array('story', $parts)) {
            if (!isset($current[$dir]['story'])) $current[$dir]['story'] = [];
            $current[$dir]['story'][] = end($parts);
            continue;
        }
        
        // Regular component files
        $current[$dir]['components'][] = end($parts);
    }
    return $result;
}

$files = array_filter(
    iterator_to_array(
        new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($extracted_path)
        )
    ),
    fn($f) => $f->isFile() && 
        ctype_upper(pathinfo($f->getBasename(), PATHINFO_FILENAME)[0]) &&
        strpos($f->getPathname(), '__snapshots__') === false
);

$files = array_map(
    fn($f) => substr($f->getPathname(), strlen($extracted_path) + 1),
    $files
);

$nested = buildNestedArray($files);
array_walk($nested, function(&$component) {
    foreach (['components', 'tests', 'story'] as $key) {
        if (isset($component[$key])) {
            sort($component[$key]);
        }
    }
});
ksort($nested);

file_put_contents($output_file, json_encode($nested, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));