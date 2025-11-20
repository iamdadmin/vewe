<?php
/**
 * @var string $is
 * @var bool $autoFocus
 * @var bool $disabled
 * @var string $displayValue
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'input');
$attributeString = mkAttrs(new ImmutableArray([
    'autoFocus' => new MutableString($autoFocus ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'displayValue' => new MutableString($displayValue ?? 'false')->match('/^(((val: any) => string))$/', default: '('),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
