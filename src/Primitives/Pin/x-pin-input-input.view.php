<?php
/**
 * @var string $is
 * @var bool $disabled
 * @var int|float|string $index
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'input');
$attributeString = mkAttrs(new ImmutableArray([
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'index' => new MutableString($index ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
