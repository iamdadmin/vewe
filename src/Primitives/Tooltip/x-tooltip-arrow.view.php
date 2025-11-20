<?php
/**
 * @var string $is
 * @var int|float|string $height
 * @var int|float|string $width
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'svg');
$attributeString = mkAttrs(new ImmutableArray([
    'height' => new MutableString($height ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '5'),
    'width' => new MutableString($width ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '10'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
