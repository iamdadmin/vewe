<?php
/**
 * @var string $is
 * @var int|float|string $collapsedSize
 * @var bool $collapsible
 * @var int|float|string $defaultSize
 * @var string $id
 * @var int|float|string $maxSize
 * @var int|float|string $minSize
 * @var int|float|string $order
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'collapsedSize' => new MutableString($collapsedSize ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'collapsible' => new MutableString($collapsible ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'defaultSize' => new MutableString($defaultSize ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'id' => new MutableString($id ?? 'false')->match('/^(string)$/', default: 's'),
    'maxSize' => new MutableString($maxSize ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'minSize' => new MutableString($minSize ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'order' => new MutableString($order ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
