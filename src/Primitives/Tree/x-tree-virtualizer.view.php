<?php
/**
 * @var string $is
 * @var int|float|string $estimateSize
 * @var int|float|string $overscan
 * @var string $textContent
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'ul');
$attributeString = mkAttrs(new ImmutableArray([
    'estimateSize' => new MutableString($estimateSize ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'overscan' => new MutableString($overscan ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'textContent' => new MutableString($textContent ?? 'false')->match('/^(((item: Record<string, any>) => string))$/', default: '('),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
