<?php
/**
 * @var string $is
 * @var string $placeholder
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'span');
$attributeString = mkAttrs(new ImmutableArray([
    'placeholder' => new MutableString($placeholder ?? 'false')->match('/^(string)$/', default: ''),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
