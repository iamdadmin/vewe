<?php
/**
 * @var string $is
 * @var bool $defer
 * @var bool $disabled
 * @var string $to
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'defer' => new MutableString($defer ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'to' => new MutableString($to ?? 'false')->match('/^(string|HTMLElement)$/', default: 'string'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
