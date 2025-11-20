<?php
/**
 * @var string $is
 * @var bool $alignFlip
 * @var int|float|string $alignOffset
 * @var bool $avoidCollisions
 * @var string $collisionBoundary
 * @var string $collisionPadding
 * @var bool $disableUpdateOnLayoutShift
 * @var bool $hideWhenDetached
 * @var bool $loop
 * @var string $positionStrategy
 * @var bool $prioritizePosition
 * @var string $reference
 * @var bool $sideFlip
 * @var string $sticky
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'alignFlip' => new MutableString($alignFlip ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'alignOffset' => new MutableString($alignOffset ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '0'),
    'avoidCollisions' => new MutableString($avoidCollisions ?? 'false')->match('/^(false|true)$/', default: 'true'),
    'collisionBoundary' => new MutableString($collisionBoundary ?? 'false')->match('/^(Element|(Element|null)[]|null)$/', default: '[]'),
    'collisionPadding' => new MutableString($collisionPadding ?? 'false')->match('/^(number|Partial<Record<top|right|bottom|left, number>>)$/', default: '0'),
    'disableUpdateOnLayoutShift' => new MutableString($disableUpdateOnLayoutShift ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'hideWhenDetached' => new MutableString($hideWhenDetached ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'loop' => new MutableString($loop ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'positionStrategy' => new MutableString($positionStrategy ?? 'false')->match('/^(fixed|absolute)$/', default: 'fixed'),
    'prioritizePosition' => new MutableString($prioritizePosition ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'reference' => new MutableString($reference ?? 'false')->match('/^(ReferenceElement)$/', default: 'R'),
    'sideFlip' => new MutableString($sideFlip ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'sticky' => new MutableString($sticky ?? 'false')->match('/^(partial|always)$/', default: 'partial'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
