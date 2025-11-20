<?php
declare(strict_types=1);

function dumpDefaultPropTypes(string $inputComponentsJson, string $inputPrimitivesJson, string $outputPrimitives, string $outputComponents): void
{
    // lw out all the prop types
    $defaults = [];

    foreach (fetchPrimitives($inputPrimitivesJson) as $primitive => $data) {
        if (! isset($data['props'])) {
            continue;
        }
        foreach ($data['props'] as $prop) {
            if ($prop['name'] == 'as' && isset($prop['default'])) {
                $defaults[] = $prop['default'];
            } else {
                continue;
            }
        }
    }

    asort($defaults);

    // Copy $defaults into new array with new keys deleting duplicate values.
    $uniqueDefaults = array_values(array_unique($defaults));

    lw(implode('|', $uniqueDefaults));
}

function fetchPrimitives(string $inputPrimitivesJson): array
{
    $primitivesContent = file_get_contents($inputPrimitivesJson);

    if ($primitivesContent === false) {
        ld("Failed to read primitives JSON file: {$inputPrimitivesJson}");
    }

    $inputPrimitives = json_decode($primitivesContent, true);
    if ($inputPrimitives === false && json_last_error() !== JSON_ERROR_NONE) {
        ld("Failed to decode primitives JSON file: {$inputPrimitivesJson}. Error: " . json_last_error_msg());
    }

    return $inputPrimitives;
}

function doBuildPrimitives(string $inputComponentsJson, string $inputPrimitivesJson, string $outputPrimitives, string $outputComponents): void
{
    lw('Starting to build Primitives');

    foreach (fetchPrimitives($inputPrimitivesJson) as $primitive => $data) {
        // Just work with one for now
        if ($primitive !== 'AvatarImage') {
            //continue;
        }

        lw(" : Started $primitive");

        // var_declaration
        $varDeclaration = [];

        // var_defaults
        $varDefaults = [];

        foreach ($data['props'] as $prop) {
            // Props we don't currently implement
            $notImplemented = [
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

            //$replace['is'] = "\$is = new MutableString(\$is ?? 'false')->match('/^(div|p|a|span|h1|h2|h3|h4|h5|h6|img)$/', default: 'div');";
            if ($prop['name'] === 'as') {
                $replace['is'] = "\$is = new MutableString(\$is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: '{$prop['default']}');";
                continue;
            }

            if ($prop['type'] === 'boolean') {
                $varDefaults[$prop['name']]['type'] = 'boolean';
                $varDefaults[$prop['name']]['acceptable'] = ['false', 'true'];
                $varDefaults[$prop['name']]['default'] = isset($prop['default']) ? $prop['default'] : 'false';

                $varDeclaration[$prop['name']] = 'bool';
            } elseif ($prop['type'] === 'number') {
                $varDefaults[$prop['name']]['type'] = 'number';
                $varDefaults[$prop['name']]['acceptable'] = ['-?\d+(\/\d+)?(\.\d+)?'];
                $varDefaults[$prop['name']]['default'] = isset($prop['default']) ? $prop['default'] : 1;

                $varDeclaration[$prop['name']] = 'int|float|string';
            } else {
                $varDefaults[$prop['name']]['type'] = 'string';
                $varDefaults[$prop['name']]['acceptable'] = $prop['type'];
                $varDefaults[$prop['name']]['default'] = isset($prop['default']) ? $prop['default'] : $prop['type'][0];

                $varDeclaration[$prop['name']] = 'string';
            }
        }

        if (count($varDeclaration) > 0 && count($varDefaults) > 0) {
            // Add defaults
            $replace['var_declaration'] = '';
            $replace['var_defaults'] = "mkAttrs(new ImmutableArray([\n";

            foreach ($varDeclaration as $key => $value) {
                $replace['var_declaration'] .= " * @var {$value} \${$key}\n";
            }

            $lastKey = array_key_last($varDefaults);
            foreach ($varDefaults as $key => $values) {
                if (is_array($values['acceptable'])) {
                    $allowed = implode('|', array_filter($values['acceptable']));
                } else {
                    $allowed = $values['acceptable'];
                }

                $replace['var_defaults'] .= "    '$key' => new MutableString(\$$key ?? 'false')->match('/^($allowed)$/', default: '{$values['default']}')";

                //$allowed = implode(', ', array_map(fn ($v) => "'{$v}'", $values['acceptable']));
                //$replace['var_defaults'] .= "    '$key' => (new MutableString(\$$key ?? ''))\n";
                //$replace['var_defaults'] .= "        ->unlessOneOf([$allowed], fn(MutableString \$s) => \$s->set('{$values['default']}'))\n";
                //$replace['var_defaults'] .= '        ->toString()';

                if ($key !== $lastKey) {
                    $replace['var_defaults'] .= ",\n";
                }
            }
            $replace['var_defaults'] .= "\n    ])\n);\n";
        } else {
            $replace['var_declaration'] = '';
            $replace['var_defaults'] = "'';\n";
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
    $filename = 'x-' . toKebab($primitive) . '.view.php';
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
