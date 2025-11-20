<?php
/**
 * @var string $is
 * @var string $dir
 * @var bool $modal
 * @var int|float|string $pressOpenDelay
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'modal' => new MutableString($modal ?? 'false')->match('/^(false|true)$/', default: 'true'),
    'pressOpenDelay' => new MutableString($pressOpenDelay ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '700'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
