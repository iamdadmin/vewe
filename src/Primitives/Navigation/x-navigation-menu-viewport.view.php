<?php
/**
 * @var string $is
 * @var string $align
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'align' => new MutableString($align ?? 'false')->match('/^(start|center|end)$/', default: 'center'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
