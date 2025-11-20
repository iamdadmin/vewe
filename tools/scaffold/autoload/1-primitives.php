<?php
declare(strict_types=1);

function doBuildPrimitives(string $inputComponentsJson, string $inputPrimitivesJson, string $outputPrimitives, string $outputComponents): void
{
    lw('Starting to build Primitives');

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
                'as', // Hardcoded in the template as $is
                'asChild',
                'defaultValue',
                'forceMount',
                'modelValue',
                'unmountOnHide',
                'value',
            ];
            // Skip notImplemented
            if (in_array($prop['name'], $notImplemented, true)) {
                continue;
            }
            // Only string or boolean for now
            $type = $prop['type'] === 'boolean' ? 'bool' : 'string';

            if ($prop['type'] !== 'boolean') {
                $varDefaults[$prop['name']]['type'] = 'string';
                $varDefaults[$prop['name']]['acceptable'] = $prop['type'];
                $varDefaults[$prop['name']]['default'] = isset($prop['default']) ? $prop['default'] : $prop['type'][0];
            } else {
                $varDefaults[$prop['name']]['type'] = 'boolean';
                $varDefaults[$prop['name']]['acceptable'] = ['false', 'true'];
                $varDefaults[$prop['name']]['default'] = isset($prop['default']) ? $prop['default'] : 'false';
            }

            $varDeclaration[$prop['name']] = $type;

            //$varDefaults[$prop['name']] = isset($prop['default']) ? $prop['default'] : $prop['type'][0];
        }

        $replace['var_declaration'] = '';
        $replace['var_defaults'] = '';

        foreach ($varDeclaration as $key => $value) {
            $replace['var_declaration'] .= " * @var {$value} \${$key}\n";
        }

        $lastKey = array_key_last($varDefaults);
        foreach ($varDefaults as $key => $values) {
            $allowed = implode(', ', array_map(fn ($v) => "'{$v}'", $values['acceptable']));
            $replace['var_defaults'] .= "    '$key' => (new MutableString(\$$key ?? ''))\n";
            $replace['var_defaults'] .= "        ->unlessOneOf([$allowed], fn(MutableString \$s) => \$s->set('{$values['default']}'))\n";
            $replace['var_defaults'] .= '        ->toString()';

            if ($key !== $lastKey) {
                $replace['var_defaults'] .= ",\n";
            }
        }

        // Build the primitive
        $output = '';

        $primitiveTmpl = file_get_contents(dirname(__DIR__) . '/templates/primitive.stub');

        $output = mustache($primitiveTmpl, $replace);

        @mkdir(primitivesRelPath($primitive), 0777, true);

        // Write output to file, using primitivesRelPath to figure out folder
        file_put_contents(
            primitivesOutputFile($primitive),
            $output,
        );

        lw(' : Wrote ' . primitivesOutputFile($primitive));
    }
}

function primitivesOutputFile(string $primitive): string
{
    $filename = 'x-' . toKebab($primitive) . '.php';
    $filepath = primitivesRelPath($primitive);

    return $filepath . $filename;
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
        return str_replace('tools/scaffold', "src/Primitives/{$firstWord}/", dirname(__DIR__));
    }
}
