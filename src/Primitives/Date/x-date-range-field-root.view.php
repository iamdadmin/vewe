<?php
/**
 * @var string $is
 * @var string $defaultPlaceholder
 * @var string $dir
 * @var bool $disabled
 * @var string $granularity
 * @var bool $hideTimeZone
 * @var string $hourCycle
 * @var string $id
 * @var string $isDateUnavailable
 * @var string $locale
 * @var string $maxValue
 * @var string $minValue
 * @var string $name
 * @var string $placeholder
 * @var bool $readonly
 * @var bool $required
 * @var string $step
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'defaultPlaceholder' => new MutableString($defaultPlaceholder ?? 'false')->match('/^(DateValue)$/', default: 'D'),
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'granularity' => new MutableString($granularity ?? 'false')->match('/^(day|hour|minute|second)$/', default: 'day'),
    'hideTimeZone' => new MutableString($hideTimeZone ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'hourCycle' => new MutableString($hourCycle ?? 'false')->match('/^(12|24)$/', default: '12'),
    'id' => new MutableString($id ?? 'false')->match('/^(string)$/', default: 's'),
    'isDateUnavailable' => new MutableString($isDateUnavailable ?? 'false')->match('/^(Matcher)$/', default: 'M'),
    'locale' => new MutableString($locale ?? 'false')->match('/^(string)$/', default: 's'),
    'maxValue' => new MutableString($maxValue ?? 'false')->match('/^(DateValue)$/', default: 'D'),
    'minValue' => new MutableString($minValue ?? 'false')->match('/^(DateValue)$/', default: 'D'),
    'name' => new MutableString($name ?? 'false')->match('/^(string)$/', default: 's'),
    'placeholder' => new MutableString($placeholder ?? 'false')->match('/^(DateValue)$/', default: 'D'),
    'readonly' => new MutableString($readonly ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'required' => new MutableString($required ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'step' => new MutableString($step ?? 'false')->match('/^(DateStep)$/', default: 'D'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
