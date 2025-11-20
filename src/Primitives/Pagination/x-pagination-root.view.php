<?php
/**
 * @var string $is
 * @var int|float|string $defaultPage
 * @var bool $disabled
 * @var int|float|string $itemsPerPage
 * @var int|float|string $page
 * @var bool $showEdges
 * @var int|float|string $siblingCount
 * @var int|float|string $total
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'nav');
$attributeString = mkAttrs(new ImmutableArray([
    'defaultPage' => new MutableString($defaultPage ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'itemsPerPage' => new MutableString($itemsPerPage ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'page' => new MutableString($page ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'showEdges' => new MutableString($showEdges ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'siblingCount' => new MutableString($siblingCount ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '2'),
    'total' => new MutableString($total ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '0'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
