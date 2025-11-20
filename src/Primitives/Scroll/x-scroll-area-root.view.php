<?php
/**
 * @var string $is
 * @var string $dir
 * @var int|float|string $scrollHideDelay
 * @var string $type
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'scrollHideDelay' => new MutableString($scrollHideDelay ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '600'),
    'type' => new MutableString($type ?? 'false')->match('/^(always|scroll|hover|auto)$/', default: 'hover'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
