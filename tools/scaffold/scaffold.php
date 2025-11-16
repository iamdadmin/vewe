<?php
declare(strict_types=1);

// Path Helpers - Input
$inputPrimitivesJson = __DIR__ . '/../extract/meta.json';
$inputComponentsJson = __DIR__ . '/../extract/components.json';

// Path Helpers - Output
$outputPrimitives = __DIR__ . '/../../src/Primitives';
$outputComponents = __DIR__ . '/../../src/Components';

foreach (glob(__DIR__ . '/autoload/*.php') as $required) {
    require_once $required;
}

doBuildPrimitives();