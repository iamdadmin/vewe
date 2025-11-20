<?php
/**
 * @var string $is
 * @var bool $defaultOpen
 * @var bool $modal
 * @var bool $open
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'defaultOpen' => new MutableString($defaultOpen ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'modal' => new MutableString($modal ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'open' => new MutableString($open ?? 'false')->match('/^(false|true)$/', default: 'false'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
