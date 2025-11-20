<?php
/**
 * @var string $is
 * @var string $calendarLabel
 * @var string $defaultPlaceholder
 * @var string $dir
 * @var bool $disabled
 * @var bool $disableDaysOutsideCurrentView
 * @var bool $fixedWeeks
 * @var bool $initialFocus
 * @var string $isDateDisabled
 * @var string $isDateUnavailable
 * @var string $locale
 * @var string $maxValue
 * @var string $minValue
 * @var bool $multiple
 * @var string $nextPage
 * @var int|float|string $numberOfMonths
 * @var bool $pagedNavigation
 * @var string $placeholder
 * @var bool $preventDeselect
 * @var string $prevPage
 * @var bool $readonly
 * @var string $weekdayFormat
 * @var string $weekStartsOn
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'calendarLabel' => new MutableString($calendarLabel ?? 'false')->match('/^(string)$/', default: 's'),
    'defaultPlaceholder' => new MutableString($defaultPlaceholder ?? 'false')->match('/^(DateValue)$/', default: 'D'),
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'disableDaysOutsideCurrentView' => new MutableString($disableDaysOutsideCurrentView ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'fixedWeeks' => new MutableString($fixedWeeks ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'initialFocus' => new MutableString($initialFocus ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'isDateDisabled' => new MutableString($isDateDisabled ?? 'false')->match('/^(Matcher)$/', default: 'M'),
    'isDateUnavailable' => new MutableString($isDateUnavailable ?? 'false')->match('/^(Matcher)$/', default: 'M'),
    'locale' => new MutableString($locale ?? 'false')->match('/^(string)$/', default: 's'),
    'maxValue' => new MutableString($maxValue ?? 'false')->match('/^(DateValue)$/', default: 'D'),
    'minValue' => new MutableString($minValue ?? 'false')->match('/^(DateValue)$/', default: 'D'),
    'multiple' => new MutableString($multiple ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'nextPage' => new MutableString($nextPage ?? 'false')->match('/^(((placeholder: DateValue) => DateValue))$/', default: '('),
    'numberOfMonths' => new MutableString($numberOfMonths ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'pagedNavigation' => new MutableString($pagedNavigation ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'placeholder' => new MutableString($placeholder ?? 'false')->match('/^(DateValue)$/', default: 'D'),
    'preventDeselect' => new MutableString($preventDeselect ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'prevPage' => new MutableString($prevPage ?? 'false')->match('/^(((placeholder: DateValue) => DateValue))$/', default: '('),
    'readonly' => new MutableString($readonly ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'weekdayFormat' => new MutableString($weekdayFormat ?? 'false')->match('/^(narrow|short|long)$/', default: 'narrow'),
    'weekStartsOn' => new MutableString($weekStartsOn ?? 'false')->match('/^(1|2|3|4|5|6)$/', default: '0'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
