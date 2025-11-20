<?php
/**
 * @var string $is
 * @var string $dir
 * @var bool $disabled
 * @var bool $inverted
 * @var int|float|string $max
 * @var int|float|string $min
 * @var int|float|string $minStepsBetweenThumbs
 * @var string $name
 * @var string $orientation
 * @var bool $required
 * @var int|float|string $step
 * @var string $thumbAlignment
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'span');
$attributeString = mkAttrs(new ImmutableArray([
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'disabled' => new MutableString($disabled ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'inverted' => new MutableString($inverted ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'max' => new MutableString($max ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '100'),
    'min' => new MutableString($min ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '0'),
    'minStepsBetweenThumbs' => new MutableString($minStepsBetweenThumbs ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '0'),
    'name' => new MutableString($name ?? 'false')->match('/^(string)$/', default: 's'),
    'orientation' => new MutableString($orientation ?? 'false')->match('/^(vertical|horizontal)$/', default: 'horizontal'),
    'required' => new MutableString($required ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'step' => new MutableString($step ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'thumbAlignment' => new MutableString($thumbAlignment ?? 'false')->match('/^(contain|overflow)$/', default: 'contain'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
