<?php
/**
 * @var string $is
 * @var bool $completed
 * @var bool $disabled
 * @var int|float|string $step
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'completed' => new MutableString($completed ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'step' => new MutableString($step ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
