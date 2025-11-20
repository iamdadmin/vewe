<?php
/**
 * @var string $is
 * @var bool $addOnBlur
 * @var bool $addOnPaste
 * @var bool $addOnTab
 * @var string $convertValue
 * @var string $delimiter
 * @var string $dir
 * @var bool $disabled
 * @var string $displayValue
 * @var bool $duplicate
 * @var string $id
 * @var int|float|string $max
 * @var string $name
 * @var bool $required
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'addOnBlur' => new MutableString($addOnBlur ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'addOnPaste' => new MutableString($addOnPaste ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'addOnTab' => new MutableString($addOnTab ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'convertValue' => new MutableString($convertValue ?? 'false')->match('/^(((value: string) => AcceptableInputValue))$/', default: '('),
    'delimiter' => new MutableString($delimiter ?? 'false')->match('/^(string|RegExp)$/', default: ','),
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'displayValue' => new MutableString($displayValue ?? 'false')->match('/^(((value: AcceptableInputValue) => string))$/', default: 'value.toString()'),
    'duplicate' => new MutableString($duplicate ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'id' => new MutableString($id ?? 'false')->match('/^(string)$/', default: 's'),
    'max' => new MutableString($max ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '0'),
    'name' => new MutableString($name ?? 'false')->match('/^(string)$/', default: 's'),
    'required' => new MutableString($required ?? 'false')->match('/^(false|true)$/', default: 'false'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
