<?php
/**
 * @var string $is
 * @var int|float|string $delayDuration
 * @var bool $disableClosingTrigger
 * @var bool $disabled
 * @var bool $disableHoverableContent
 * @var bool $ignoreNonKeyboardFocus
 * @var int|float|string $skipDelayDuration
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'delayDuration' => new MutableString($delayDuration ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '700'),
    'disableClosingTrigger' => new MutableString($disableClosingTrigger ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'disableHoverableContent' => new MutableString($disableHoverableContent ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'ignoreNonKeyboardFocus' => new MutableString($ignoreNonKeyboardFocus ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'skipDelayDuration' => new MutableString($skipDelayDuration ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '300'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
