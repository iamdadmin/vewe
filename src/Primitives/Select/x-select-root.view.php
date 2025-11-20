<?php
/**
 * @var string $is
 * @var string $autocomplete
 * @var string $by
 * @var bool $defaultOpen
 * @var string $dir
 * @var bool $disabled
 * @var bool $multiple
 * @var string $name
 * @var bool $open
 * @var bool $required
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'autocomplete' => new MutableString($autocomplete ?? 'false')->match('/^(string)$/', default: 's'),
    'by' => new MutableString($by ?? 'false')->match('/^(string|((a: AcceptableValue, b: AcceptableValue) => boolean))$/', default: 'string'),
    'defaultOpen' => new MutableString($defaultOpen ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'multiple' => new MutableString($multiple ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'name' => new MutableString($name ?? 'false')->match('/^(string)$/', default: 's'),
    'open' => new MutableString($open ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'required' => new MutableString($required ?? 'false')->match('/^(false|true)$/', default: 'false'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
