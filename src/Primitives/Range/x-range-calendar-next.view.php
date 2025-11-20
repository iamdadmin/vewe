<?php
/**
 * @var string $is
 * @var string $nextPage
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'button');
$attributeString = mkAttrs(new ImmutableArray([
    'nextPage' => new MutableString($nextPage ?? 'false')->match('/^(((placeholder: DateValue) => DateValue))$/', default: '('),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
