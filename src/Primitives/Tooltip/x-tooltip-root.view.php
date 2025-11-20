<?php
/**
 * @var string $is
 * @var bool $defaultOpen
 * @var int|float|string $delayDuration
 * @var bool $disableClosingTrigger
 * @var bool $disabled
 * @var bool $disableHoverableContent
 * @var bool $ignoreNonKeyboardFocus
 * @var bool $open
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'defaultOpen' => new MutableString($defaultOpen ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'delayDuration' => new MutableString($delayDuration ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'disableClosingTrigger' => new MutableString($disableClosingTrigger ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'disableHoverableContent' => new MutableString($disableHoverableContent ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'ignoreNonKeyboardFocus' => new MutableString($ignoreNonKeyboardFocus ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'open' => new MutableString($open ?? 'false')->match('/^(false|true)$/', default: 'false'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
