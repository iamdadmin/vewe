<?php
/**
 * @var string $is
 * @var bool $closeOnSelect
 * @var bool $defaultOpen
 * @var string $defaultPlaceholder
 * @var string $dir
 * @var bool $disabled
 * @var bool $fixedWeeks
 * @var string $granularity
 * @var bool $hideTimeZone
 * @var string $hourCycle
 * @var string $id
 * @var string $isDateDisabled
 * @var string $isDateUnavailable
 * @var string $locale
 * @var string $maxValue
 * @var string $minValue
 * @var bool $modal
 * @var string $name
 * @var int|float|string $numberOfMonths
 * @var bool $open
 * @var bool $pagedNavigation
 * @var string $placeholder
 * @var bool $preventDeselect
 * @var bool $readonly
 * @var bool $required
 * @var string $step
 * @var string $weekdayFormat
 * @var string $weekStartsOn
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'closeOnSelect' => new MutableString($closeOnSelect ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'defaultOpen' => new MutableString($defaultOpen ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'defaultPlaceholder' => new MutableString($defaultPlaceholder ?? 'false')->match('/^(DateValue)$/', default: 'D'),
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'fixedWeeks' => new MutableString($fixedWeeks ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'granularity' => new MutableString($granularity ?? 'false')->match('/^(day|hour|minute|second)$/', default: 'day'),
    'hideTimeZone' => new MutableString($hideTimeZone ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'hourCycle' => new MutableString($hourCycle ?? 'false')->match('/^(12|24)$/', default: '12'),
    'id' => new MutableString($id ?? 'false')->match('/^(string)$/', default: 's'),
    'isDateDisabled' => new MutableString($isDateDisabled ?? 'false')->match('/^(Matcher)$/', default: 'M'),
    'isDateUnavailable' => new MutableString($isDateUnavailable ?? 'false')->match('/^(Matcher)$/', default: 'M'),
    'locale' => new MutableString($locale ?? 'false')->match('/^(string)$/', default: 'en'),
    'maxValue' => new MutableString($maxValue ?? 'false')->match('/^(DateValue)$/', default: 'D'),
    'minValue' => new MutableString($minValue ?? 'false')->match('/^(DateValue)$/', default: 'D'),
    'modal' => new MutableString($modal ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'name' => new MutableString($name ?? 'false')->match('/^(string)$/', default: 's'),
    'numberOfMonths' => new MutableString($numberOfMonths ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'open' => new MutableString($open ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'pagedNavigation' => new MutableString($pagedNavigation ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'placeholder' => new MutableString($placeholder ?? 'false')->match('/^(DateValue)$/', default: 'D'),
    'preventDeselect' => new MutableString($preventDeselect ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'readonly' => new MutableString($readonly ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'required' => new MutableString($required ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'step' => new MutableString($step ?? 'false')->match('/^(DateStep)$/', default: 'D'),
    'weekdayFormat' => new MutableString($weekdayFormat ?? 'false')->match('/^(narrow|short|long)$/', default: 'narrow'),
    'weekStartsOn' => new MutableString($weekStartsOn ?? 'false')->match('/^(1|2|3|4|5|6)$/', default: '0'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
