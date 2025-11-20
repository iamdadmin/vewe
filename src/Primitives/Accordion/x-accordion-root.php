<?php
/**
 * @var string $is
 * @var \Tempest\Support\Arr\ImmutableArray $attributes
 * @var bool $collapsible
 * @var string $dir
 * @var bool $disabled
 * @var string $orientation
 * @var string $type
 *
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$attributeString = mkAttrs(new ImmutableArray([
    'collapsible' => new MutableString($collapsible ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'dir' => new MutableString($dir ?? 'ltr')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'orientation' => new MutableString($orientation ?? 'vertical')->match('/^(vertical|horizontal)$/', default: 'vertical'),
    'type' => new MutableString($type ?? 'single')->match('/^(single|multiple)$/', default: 'single'),
]));
?>

<{{ $is }} {{ $attributeString }}>
 <slot></slot>
</{{ $is }}>
