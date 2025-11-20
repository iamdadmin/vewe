<?php
/**
 * @var string $is
 * @var bool $active
 * @var bool $allowShiftKey
 * @var bool $focusable
 * @var string $tabStopId
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'span');
$attributeString = mkAttrs(new ImmutableArray([
    'active' => new MutableString($active ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'allowShiftKey' => new MutableString($allowShiftKey ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'focusable' => new MutableString($focusable ?? 'false')->match('/^(false|true)$/', default: 'true'),
    'tabStopId' => new MutableString($tabStopId ?? 'false')->match('/^(string)$/', default: 's'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
