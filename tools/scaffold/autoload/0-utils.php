<?php
declare(strict_types=1);

function lw(string $text): void
{
    echo $text . PHP_EOL;
}

function ld(string $text): void
{
    lw($text);
    exit(1);
}

function lwpr(mixed $stuff): void
{
    print_r($stuff);
    echo PHP_EOL;
}

function ldpr(mixed $stuff): void
{
    lwpr($stuff);
    exit(1);
}

// Helper to convert any case to an array of words.
function toWords(string $text): array
{
    // Add a space before uppercase letters (for PascalCase), but not at the start of the string.
    $text = preg_replace('/(?<!^)[A-Z]/', ' $0', $text);
    // Replace non-alphanumeric characters with spaces.
    $text = preg_replace('/[^a-zA-Z0-9]+/', ' ', $text);
    // Convert to lower case and split by spaces.
    return explode(' ', strtolower(trim($text)));
}

// Convert text to snake_case.
function toSnake(string $text): string
{
    return implode('_', toWords($text));
}

// Convert text to PascalCase.
function toPascal(string $text): string
{
    $words = toWords($text);
    $words = array_map(fn ($word) => ucfirst($word), $words);
    return implode('', $words);
}

// Convert text to kebab-case.
function toKebab(string $text): string
{
    return implode('-', toWords($text));
}

// Convert text to camelCase.
function toCamel(string $text): string
{
    return lcfirst(toPascal($text));
}

/** Accept a stringified template and iterate mustache replacements from data
 * @var array<string, string> $data
 * @return string
 */
function mustache(string $template, array $data): string
{
    $return = $template;
    /** @var string $key
     * @var string $value */
    foreach ($data as $key => $value) {
        $return = str_replace('{# ' . $key . ' #}', $value, $return);
    }

    // Now preg_replace any remaining {{ ... }} strings in case not all mustache were set
    $return = preg_replace('/{#\s*.*?#}/', '', $return);

    /** @var string $return */
    return $return;
}
