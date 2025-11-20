<?php
/**
 * @var string $is
 * @var string $hotkey
 * @var string $label
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'ol');
$attributeString = mkAttrs(new ImmutableArray([
    'hotkey' => new MutableString($hotkey ?? 'false')->match('/^(string[])$/', default: 'F8'),
    'label' => new MutableString($label ?? 'false')->match('/^(string|((hotkey: string) => string))$/', default: 'Notifications ({hotkey})'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
