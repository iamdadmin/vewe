<?php
/**
 * @var string $is
 * @var bool $bubbleSelect
 * @var string $defaultExpanded
 * @var string $dir
 * @var bool $disabled
 * @var string $expanded
 * @var string $getChildren
 * @var string $getKey
 * @var string $items
 * @var bool $multiple
 * @var bool $propagateSelect
 * @var string $selectionBehavior
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'ul');
$attributeString = mkAttrs(new ImmutableArray([
    'bubbleSelect' => new MutableString($bubbleSelect ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'defaultExpanded' => new MutableString($defaultExpanded ?? 'false')->match('/^(string[])$/', default: 's'),
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'expanded' => new MutableString($expanded ?? 'false')->match('/^(string[])$/', default: 's'),
    'getChildren' => new MutableString($getChildren ?? 'false')->match('/^(((val: Record<string, any>) => Record<string, any>[]))$/', default: 'val.children'),
    'getKey' => new MutableString($getKey ?? 'false')->match('/^((val: Record<string, any>): string)$/', default: '('),
    'items' => new MutableString($items ?? 'false')->match('/^(Record<string, any>[])$/', default: 'R'),
    'multiple' => new MutableString($multiple ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'propagateSelect' => new MutableString($propagateSelect ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'selectionBehavior' => new MutableString($selectionBehavior ?? 'false')->match('/^(replace|toggle)$/', default: 'toggle'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
