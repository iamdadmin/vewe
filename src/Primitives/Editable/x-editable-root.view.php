<?php
/**
 * @var string $is
 * @var string $activationMode
 * @var bool $autoResize
 * @var string $dir
 * @var bool $disabled
 * @var string $id
 * @var int|float|string $maxLength
 * @var string $name
 * @var string $placeholder
 * @var bool $readonly
 * @var bool $required
 * @var bool $selectOnFocus
 * @var bool $startWithEditMode
 * @var string $submitMode
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'activationMode' => new MutableString($activationMode ?? 'false')->match('/^(dblclick|focus|none)$/', default: 'focus'),
    'autoResize' => new MutableString($autoResize ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'id' => new MutableString($id ?? 'false')->match('/^(string)$/', default: 's'),
    'maxLength' => new MutableString($maxLength ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'name' => new MutableString($name ?? 'false')->match('/^(string)$/', default: 's'),
    'placeholder' => new MutableString($placeholder ?? 'false')->match('/^(string|{ edit: string; preview: string; })$/', default: 'Enter text...'),
    'readonly' => new MutableString($readonly ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'required' => new MutableString($required ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'selectOnFocus' => new MutableString($selectOnFocus ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'startWithEditMode' => new MutableString($startWithEditMode ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'submitMode' => new MutableString($submitMode ?? 'false')->match('/^(blur|none|enter|both)$/', default: 'blur'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
