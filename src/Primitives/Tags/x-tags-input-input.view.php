<?php
/**
 * @var string $is
 * @var bool $autoFocus
 * @var int|float|string $maxLength
 * @var string $placeholder
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'input');
$attributeString = mkAttrs(new ImmutableArray([
    'autoFocus' => new MutableString($autoFocus ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'maxLength' => new MutableString($maxLength ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'placeholder' => new MutableString($placeholder ?? 'false')->match('/^(string)$/', default: 's'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
