<?php
/**
 * @var string $is
 * @var string $currentTabStopId
 * @var string $defaultCurrentTabStopId
 * @var string $dir
 * @var bool $loop
 * @var string $orientation
 * @var bool $preventScrollOnEntryFocus
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'currentTabStopId' => new MutableString($currentTabStopId ?? 'false')->match('/^(string|null)$/', default: 'string'),
    'defaultCurrentTabStopId' => new MutableString($defaultCurrentTabStopId ?? 'false')->match('/^(string)$/', default: 's'),
    'dir' => new MutableString($dir ?? 'false')->match('/^(ltr|rtl)$/', default: 'ltr'),
    'loop' => new MutableString($loop ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'orientation' => new MutableString($orientation ?? 'false')->match('/^(vertical|horizontal)$/', default: 'vertical'),
    'preventScrollOnEntryFocus' => new MutableString($preventScrollOnEntryFocus ?? 'false')->match('/^(false|true)$/', default: 'false'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
