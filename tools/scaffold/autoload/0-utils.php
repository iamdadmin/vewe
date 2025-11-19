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

// Snake case text
function toSnake(string $text): string
{
    $text = preg_replace('/[^\w]+/', '_', $text);
    $text = strtolower($text);
    return trim($text, '_');
}

// Pascal case text
function toPascal(string $text): string
{
    $words = preg_split('/[^\w]+/', $text);
    $words = array_map(fn ($w) => ucfirst(strtolower($w)), $words);
    return implode('', $words);
}

// Kebab case text
function toKebab(string $text): string
{
    $text = preg_replace('/[^\w]+/', '-', $text);
    $text = strtolower($text);
    return trim($text, '-');
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
        $return = str_replace('{{ ' . $key . ' }}', $value, $return);
    }

    // Now preg_replace any remaining {{ ... }} strings in case not all mustache were set
    $return = preg_replace('/{{\s*.*?}}/', '', $return);

    /** @var string $return */
    return $return;
}
