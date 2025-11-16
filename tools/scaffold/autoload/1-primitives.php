<?php
declare(strict_types=1);

function doBuildPrimitives(string $inputComponentsJson, string $inputPrimitivesJson, string $outputPrimitives, string $outputComponents): void {
    // Figure this out

    $inputPrimitives = json_decode(file_get_contents($inputPrimitivesJson), true);

    foreach ($inputPrimitives as $primitive => $data) {
        // Just work with one for now
        if ($primitive !== 'AccordionRoot') {
            continue;
        }

        lwpr($primitive);
        lwpr($data);
    }
}

// Return the Relative Path for a given primitive
function primitivesRelPath(string $primitive): array {
    // if in $forRootFolder, return ./ else return ./{the first word of the PascalCase Primitive}
    $forRootFolder = ['x-primitive'];
    // Match and return
    if (in_array($primitive, $forRootFolder, true)) {
        return ['./', ''];
    } else {
        $pascal = toPascal(str_replace('x-', '', $primitive));
        // Return just the first capitalised word from $pascal
        preg_match('/^[A-Z][a-z0-9]*/', $pascal, $matches);
        $firstWord = $matches[0] ?? $pascal;
        return "./{$firstWord}/";
    }
}