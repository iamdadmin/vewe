<?php
/**
 * @var string $is
 * @var bool $disableSwipe
 * @var int|float|string $duration
 * @var string $label
 * @var string $swipeDirection
 * @var int|float|string $swipeThreshold
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'disableSwipe' => new MutableString($disableSwipe ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'duration' => new MutableString($duration ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '5000'),
    'label' => new MutableString($label ?? 'false')->match('/^(string)$/', default: 'Notification'),
    'swipeDirection' => new MutableString($swipeDirection ?? 'false')->match('/^(right|left|up|down)$/', default: 'right'),
    'swipeThreshold' => new MutableString($swipeThreshold ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '50'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
