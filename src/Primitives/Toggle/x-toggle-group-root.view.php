<?php
/**
 * @var string $is
 * @var string $dir
 * @var bool $disabled
 * @var bool $loop
 * @var string $name
 * @var string $orientation
 * @var bool $required
 * @var bool $rovingFocus
 * @var string $type
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'loop' => new MutableString($loop ?? 'false')->match('/^(false|true)$/', default: 'true'),
    'name' => new MutableString($name ?? 'false')->match('/^(string)$/', default: 's'),
    'orientation' => new MutableString($orientation ?? 'false')->match('/^(vertical|horizontal)$/', default: 'vertical'),
    'required' => new MutableString($required ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'rovingFocus' => new MutableString($rovingFocus ?? 'false')->match('/^(false|true)$/', default: 'true'),
    'type' => new MutableString($type ?? 'false')->match('/^(single|multiple)$/', default: 'single'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
