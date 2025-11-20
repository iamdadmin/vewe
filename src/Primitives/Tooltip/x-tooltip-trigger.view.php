<?php
/**
 * @var string $is
 * @var string $reference
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'button');
$attributeString = mkAttrs(new ImmutableArray([
    'reference' => new MutableString($reference ?? 'false')->match('/^(ReferenceElement)$/', default: 'R'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
