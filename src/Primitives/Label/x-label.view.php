<?php
/**
 * @var string $is
 * @var string $for
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'label');
$attributeString = mkAttrs(new ImmutableArray([
    'for' => new MutableString($for ?? 'false')->match('/^(string)$/', default: 's'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
