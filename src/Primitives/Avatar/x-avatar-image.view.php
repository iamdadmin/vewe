<?php
/**
 * @var string $is
 * @var string $crossOrigin
 * @var string $referrerPolicy
 * @var string $src
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'img');
$attributeString = mkAttrs(new ImmutableArray([
    'crossOrigin' => new MutableString($crossOrigin ?? 'false')->match('/^(anonymous|use-credentials)$/', default: ''),
    'referrerPolicy' => new MutableString($referrerPolicy ?? 'false')->match(
        '/^(no-referrer|no-referrer-when-downgrade|origin|origin-when-cross-origin|same-origin|strict-origin|strict-origin-when-cross-origin|unsafe-url)$/',
        default: '',
    ),
    'src' => new MutableString($src ?? 'false')->match('/^(string)$/', default: 's'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
