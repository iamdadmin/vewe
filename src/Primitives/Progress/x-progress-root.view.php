<?php
/**
 * @var string $is
 * @var string $getValueLabel
 * @var string $getValueText
 * @var int|float|string $max
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'getValueLabel' => new MutableString($getValueLabel ?? 'false')->match(
        '/^(((value: number|null, max: number) => string))$/',
        default: 'isNumber(value) ? `${Math.round((value / max) * DEFAULT_MAX)}%` : undefined',
    ),
    'getValueText' => new MutableString($getValueText ?? 'false')->match('/^(((value: number|null, max: number) => string))$/', default: '((value: number'),
    'max' => new MutableString($max ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: 'DEFAULT_MAX'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
