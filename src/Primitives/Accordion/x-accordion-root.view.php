<?php
/**
 * @var string $is
 * @var bool $collapsible
 * @var string $dir
 * @var bool $disabled
 * @var string $orientation
 * @var string $type
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'collapsible' => new MutableString($collapsible ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'orientation' => new MutableString($orientation ?? 'false')->match('/^(vertical|horizontal)$/', default: 'vertical'),
    'type' => new MutableString($type ?? 'false')->match('/^(single|multiple)$/', default: 'single'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
