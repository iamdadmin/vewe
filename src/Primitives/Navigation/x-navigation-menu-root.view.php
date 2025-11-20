<?php
/**
 * @var string $is
 * @var int|float|string $delayDuration
 * @var string $dir
 * @var bool $disableClickTrigger
 * @var bool $disableHoverTrigger
 * @var bool $disablePointerLeaveClose
 * @var string $orientation
 * @var int|float|string $skipDelayDuration
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'nav');
$attributeString = mkAttrs(new ImmutableArray([
    'delayDuration' => new MutableString($delayDuration ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '200'),
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'disableClickTrigger' => new MutableString($disableClickTrigger ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'disableHoverTrigger' => new MutableString($disableHoverTrigger ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'disablePointerLeaveClose' => new MutableString($disablePointerLeaveClose ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'orientation' => new MutableString($orientation ?? 'false')->match('/^(vertical|horizontal)$/', default: 'horizontal'),
    'skipDelayDuration' => new MutableString($skipDelayDuration ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '300'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
