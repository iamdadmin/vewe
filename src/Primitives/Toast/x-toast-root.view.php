<?php
/**
 * @var string $is
 * @var bool $defaultOpen
 * @var int|float|string $duration
 * @var bool $open
 * @var string $type
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'li');
$attributeString = mkAttrs(new ImmutableArray([
    'defaultOpen' => new MutableString($defaultOpen ?? 'false')->match('/^(false|true)$/', default: 'true'),
    'duration' => new MutableString($duration ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'open' => new MutableString($open ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'type' => new MutableString($type ?? 'false')->match('/^(foreground|background)$/', default: 'foreground'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
