<?php
declare(strict_types=1);
$options = getopt('', ['json:','dest:']);
$json = json_decode(file_get_contents($options['json']), true);
require __DIR__ . '/build-components.php';
build_components($json, $options['dest']);
