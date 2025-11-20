<?php
/**
 * @var string $is
 * @var string $autoSaveId
 * @var string $direction
 * @var string $id
 * @var string $keyboardResizeBy
 * @var string $storage
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'autoSaveId' => new MutableString($autoSaveId ?? 'false')->match('/^(string|null)$/', default: 'null'),
    'direction' => new MutableString($direction ?? 'false')->match('/^(vertical|horizontal)$/', default: 'vertical'),
    'id' => new MutableString($id ?? 'false')->match('/^(string|null)$/', default: 'string'),
    'keyboardResizeBy' => new MutableString($keyboardResizeBy ?? 'false')->match('/^(number|null)$/', default: '10'),
    'storage' => new MutableString($storage ?? 'false')->match('/^(PanelGroupStorage)$/', default: 'defaultStorage'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
