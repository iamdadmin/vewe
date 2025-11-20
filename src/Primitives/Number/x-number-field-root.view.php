<?php
/**
 * @var string $is
 * @var bool $disabled
 * @var bool $disableWheelChange
 * @var string $formatOptions
 * @var string $id
 * @var bool $invertWheelChange
 * @var string $locale
 * @var int|float|string $max
 * @var int|float|string $min
 * @var string $name
 * @var bool $readonly
 * @var bool $required
 * @var int|float|string $step
 * @var bool $stepSnapping
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'disableWheelChange' => new MutableString($disableWheelChange ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'formatOptions' => new MutableString($formatOptions ?? 'false')->match('/^(NumberFormatOptions)$/', default: 'N'),
    'id' => new MutableString($id ?? 'false')->match('/^(string)$/', default: 's'),
    'invertWheelChange' => new MutableString($invertWheelChange ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'locale' => new MutableString($locale ?? 'false')->match('/^(string)$/', default: 's'),
    'max' => new MutableString($max ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'min' => new MutableString($min ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'name' => new MutableString($name ?? 'false')->match('/^(string)$/', default: 's'),
    'readonly' => new MutableString($readonly ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'required' => new MutableString($required ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'step' => new MutableString($step ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'stepSnapping' => new MutableString($stepSnapping ?? 'false')->match('/^(false|true)$/', default: 'true'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
