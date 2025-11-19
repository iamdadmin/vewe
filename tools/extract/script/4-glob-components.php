<?php

declare(strict_types=1);

$jsonFlags = JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;

$outPath = __DIR__ . '/../components.json';
$dir = __DIR__ . '/../reka-components';
$mdFiles = glob($dir . '/*.md');

$result = [];

foreach ($mdFiles as $filePath) {
    $basename = pathinfo($filePath, PATHINFO_FILENAME);
    $key = toPascalCase($basename);

    $markdown = file_get_contents($filePath);
    if ($markdown === false) {
        continue;
    }

    $result[$key] = [];

    // 1) Front matter
    $frontMatter = extractFrontMatter($markdown);
    if ($frontMatter !== null) {
        $result[$key] = array_merge($result[$key], $frontMatter);
    }

    // 2) Anatomy <template>...</template> as nested array
    $template = extractAnatomyTemplate($markdown);
    if ($template !== null) {
        $result[$key]['anatomy'] = parseTemplateTree($template);
    }

    // 3) KeyboardTable :data="[ ... ]"
    $keyboard = extractKeyboardTable($markdown);
    if ($keyboard !== null) {
        $result[$key]['keyboard'] = $keyboard;
    }
}

// Write output
file_put_contents($outPath, json_encode($result, $jsonFlags));

$outPath = str_replace('script/../', '', $outPath);
echo "Wrote meta to: {$outPath}\n";

/**
 * Convert a string like "accordion", "accordion-root", "accordion_root"
 * to PascalCase ("Accordion", "AccordionRoot").
 */
function toPascalCase(string $value): string
{
    $parts = preg_split('/[^a-zA-Z0-9]+/', $value);
    $parts = array_filter($parts, 'strlen');

    $parts = array_map(
        static fn (string $part): string => ucfirst(strtolower($part)),
        $parts,
    );

    return implode('', $parts);
}

/**
 * Extract YAML-style front matter at the top of the markdown file.
 *
 * ---
 * key: value
 * other: thing
 * ---
 */
function extractFrontMatter(string $markdown): ?array
{
    if (! preg_match('/^---\R(.*?)\R---/s', $markdown, $match)) {
        return null;
    }

    $block = trim($match[1]);
    $lines = preg_split('/\R/', $block);
    $data = [];

    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || strpos($line, ':') === false) {
            continue;
        }

        [$rawKey, $rawValue] = explode(':', $line, 2);

        $key = trim($rawKey);
        $value = trim($rawValue);

        // Strip simple surrounding quotes if present
        $value = trim($value, " \t\"'");

        $data[$key] = $value;
    }

    return $data;
}

/**
 * Extract the contents of <template>...</template> specifically
 * from the "## Anatomy" section.
 */
function extractAnatomyTemplate(string $markdown): ?string
{
    // Narrow down to Anatomy section
    if (! preg_match('/## Anatomy(.*?)(## |\z)/s', $markdown, $sectionMatch)) {
        return null;
    }

    $section = $sectionMatch[1];

    // Inside that, find the vue code block and then <template>...</template>
    if (! preg_match('/```vue(.*?)```/s', $section, $codeMatch)) {
        return null;
    }

    $code = $codeMatch[1];

    if (! preg_match('/<template>(.*?)<\/template>/s', $code, $templateMatch)) {
        return null;
    }

    return trim($templateMatch[1]);
}

/**
 * Parse a very simple Vue/HTML-like template into a nested array structure.
 *
 * Example for:
 * <AccordionRoot>
 *   <AccordionItem>
 *     <AccordionHeader>
 *       <AccordionTrigger />
 *     </AccordionHeader>
 *     <AccordionContent />
 *   </AccordionItem>
 * </AccordionRoot>
 *
 * Output structure:
 * [
 *   [
 *     'tag' => 'AccordionRoot',
 *     'children' => [
 *       [
 *         'tag' => 'AccordionItem',
 *         'children' => [
 *           [
 *             'tag' => 'AccordionHeader',
 *             'children' => [
 *               ['tag' => 'AccordionTrigger', 'children' => []],
 *             ],
 *           ],
 *           ['tag' => 'AccordionContent', 'children' => []],
 *         ],
 *       ],
 *     ],
 *   ],
 * ]
 */
function parseTemplateTree(string $template): array
{
    $pattern = '/<\s*\/?\s*([A-Za-z0-9]+)([^>]*)>/';
    preg_match_all($pattern, $template, $matches, PREG_OFFSET_CAPTURE | PREG_SET_ORDER);

    $root = [];
    $stack = [];

    foreach ($matches as $match) {
        $rawTag = $match[0][0];
        $tagName = $match[1][0];

        $isClosing = str_starts_with(trim($rawTag), '</');
        $isSelfClosing = str_ends_with(trim($rawTag), '/>');

        if ($isClosing) {
            // Pop stack and attach to parent
            $node = array_pop($stack);
            if ($stack) {
                $parentIndex = array_key_last($stack);
                $stack[$parentIndex]['children'][] = $node;
            } else {
                $root[] = $node;
            }

            continue;
        }

        $node = [
            'tag' => $tagName,
            'children' => [],
        ];

        if ($isSelfClosing) {
            if ($stack) {
                $parentIndex = array_key_last($stack);
                $stack[$parentIndex]['children'][] = $node;
            } else {
                $root[] = $node;
            }
        } else {
            $stack[] = $node;
        }
    }

    // In case of unbalanced tags, flush remaining stack
    while ($stack) {
        $node = array_pop($stack);
        if ($stack) {
            $parentIndex = array_key_last($stack);
            $stack[$parentIndex]['children'][] = $node;
        } else {
            $root[] = $node;
        }
    }

    return $root;
}

/**
 * Extract and decode the KeyboardTable :data="[ ... ]" structure.
 *
 * 1) Grab the :data="[...]".
 * 2) Remove trailing commas before } or ].
 * 3) Replace single quotes with double quotes.
 * 4) Quote bare keys so it becomes valid JSON.
 * 5) json_decode into an array.
 */
function extractKeyboardTable(string $markdown): ?array
{
    if (! preg_match("/<KeyboardTable\s+[^>]*:data=\"(\[.*?\])\"[^>]*\/>/s", $markdown, $match)) {
        return null;
    }

    $payload = $match[1];

    // Keep only the outer [ ... ]
    if (preg_match('/\[(.*)\]/s', $payload, $inner)) {
        $payload = '[' . $inner[1] . ']';
    }

    // Remove trailing commas before } or ]
    $payload = preg_replace('/,\s*(?=[}\]])/', '', $payload);

    // Replace single quotes with double quotes
    $payload = str_replace("'", '"', $payload);

    // Quote bare keys: keys: -> "keys":
    // Avoid matching inside strings by requiring start-of-line or whitespace before key.
    $payload = preg_replace(
        '/(^|\s)([A-Za-z0-9_]+)\s*:/m',
        '$1"$2":',
        $payload,
    );

    $decoded = json_decode($payload, true);

    if (! is_array($decoded)) {
        // For debugging, you might temporarily var_dump($payload) and json_last_error_msg()
        return null;
    }

    return $decoded;
}
