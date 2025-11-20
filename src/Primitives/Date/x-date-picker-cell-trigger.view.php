<?php
/**
 * @var string $is
 * @var string $day
 * @var string $month
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'day' => new MutableString($day ?? 'false')->match('/^(DateValue)$/', default: 'D'),
    'month' => new MutableString($month ?? 'false')->match('/^(DateValue)$/', default: 'D'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
