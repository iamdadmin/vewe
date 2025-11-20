<?php
/**
 * @var string $is
 * @var string $dir
 * @var bool $disabled
 * @var string $id
 * @var bool $mask
 * @var string $name
 * @var bool $otp
 * @var string $placeholder
 * @var bool $required
 * @var string $type
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'id' => new MutableString($id ?? 'false')->match('/^(string)$/', default: 's'),
    'mask' => new MutableString($mask ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'name' => new MutableString($name ?? 'false')->match('/^(string)$/', default: 's'),
    'otp' => new MutableString($otp ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'placeholder' => new MutableString($placeholder ?? 'false')->match('/^(string)$/', default: ''),
    'required' => new MutableString($required ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'type' => new MutableString($type ?? 'false')->match('/^(number|text)$/', default: 'text as any'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
