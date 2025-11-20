<?php
/**
 * @var string $is
 * @var string $activationMode
 * @var string $dir
 * @var string $orientation
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'activationMode' => new MutableString($activationMode ?? 'false')->match('/^(automatic|manual)$/', default: 'automatic'),
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'orientation' => new MutableString($orientation ?? 'false')->match('/^(vertical|horizontal)$/', default: 'horizontal'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
