<?php
/**
 * @var string $is
 * @var string $by
 * @var string $dir
 * @var bool $disabled
 * @var bool $highlightOnHover
 * @var bool $multiple
 * @var string $name
 * @var string $orientation
 * @var bool $required
 * @var string $selectionBehavior
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'by' => new MutableString($by ?? 'false')->match('/^(string|((a: AcceptableValue, b: AcceptableValue) => boolean))$/', default: 'string'),
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'highlightOnHover' => new MutableString($highlightOnHover ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'multiple' => new MutableString($multiple ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'name' => new MutableString($name ?? 'false')->match('/^(string)$/', default: 's'),
    'orientation' => new MutableString($orientation ?? 'false')->match('/^(vertical|horizontal)$/', default: 'vertical'),
    'required' => new MutableString($required ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'selectionBehavior' => new MutableString($selectionBehavior ?? 'false')->match('/^(replace|toggle)$/', default: 'toggle'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
