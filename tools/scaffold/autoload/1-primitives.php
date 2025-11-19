<?php
declare(strict_types=1);

function doBuildPrimitives(string $inputComponentsJson, string $inputPrimitivesJson, string $outputPrimitives, string $outputComponents): void
{
    $primitivesContent = file_get_contents($inputPrimitivesJson);

    if ($primitivesContent === false) {
        ld("Failed to read primitives JSON file: {$inputPrimitivesJson}");
    }

    $inputPrimitives = json_decode($primitivesContent, true);
    if ($inputPrimitives === false && json_last_error() !== JSON_ERROR_NONE) {
        ld("Failed to decode primitives JSON file: {$inputPrimitivesJson}. Error: " . json_last_error_msg());
    }

    foreach ($inputPrimitives as $primitive => $data) {
        // Just work with one for now
        if ($primitive !== 'AccordionRoot') {
            continue;
        }

        // var_declaration
        $varDeclaration = [];

        // var_defaults
        $varDefaults = [];

        foreach ($data['props'] as $prop) {
            // Props we don't currently implement
            $notImplemented = [
                'asChild',
                'defaultValue',
                'modelValue',
                'unmountOnHide',
            ];
            // Skip notImplemented
            if (in_array($prop['name'], $notImplemented, true)) {
                continue;
            }

            // Mapping "as" to "is"
            $key = $prop['name'] === 'as' ? 'is' : $prop['name'];

            // Only string or boolean for now
            $type = $prop['type'] === 'boolean' ? 'bool' : 'string';

            $varDeclaration[$key] = $type;

            $varDefaults[$key] = isset($prop['default']) ? $prop['default'] : $prop['type'][0];

            //lw($prop['name']);
        }

        lwpr($varDeclaration);
        lwpr($varDefaults);

        // Build the primitive
        $output = '';

        //lwpr($primitive);
        //lwpr($data);
    }
}

// Return the Relative Path for a given primitive
function primitivesRelPath(string $primitive): string
{
    // if in $forRootFolder, return ./ else return ./{the first word of the PascalCase Primitive}
    $forRootFolder = ['x-primitive'];
    // Match and return
    if (in_array($primitive, $forRootFolder, true)) {
        return './';
    } else {
        $pascal = toPascal(str_replace('x-', '', $primitive));
        // Return just the first capitalised word from $pascal
        preg_match('/^[A-Z][a-z0-9]*/', $pascal, $matches);
        $firstWord = $matches[0] ?? $pascal;
        return "./{$firstWord}/";
    }
}
