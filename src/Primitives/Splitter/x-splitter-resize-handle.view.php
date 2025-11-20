<?php
/**
 * @var string $is
 * @var bool $disabled
 * @var string $hitAreaMargins
 * @var string $id
 * @var string $nonce
 * @var int|float|string $tabindex
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'hitAreaMargins' => new MutableString($hitAreaMargins ?? 'false')->match('/^(PointerHitAreaMargins)$/', default: 'P'),
    'id' => new MutableString($id ?? 'false')->match('/^(string)$/', default: 's'),
    'nonce' => new MutableString($nonce ?? 'false')->match('/^(string)$/', default: 's'),
    'tabindex' => new MutableString($tabindex ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '0'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
