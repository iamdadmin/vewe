<?php
/**
 * @var string $is
 * @var bool $disabled
 * @var string $name
 * @var bool $required
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'button');
$attributeString = mkAttrs(new ImmutableArray([
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'name' => new MutableString($name ?? 'false')->match('/^(string)$/', default: 's'),
    'required' => new MutableString($required ?? 'false')->match('/^(false|true)$/', default: 'false'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
