<?php
/**
 * @var string $is
 * @var string $align
 * @var bool $alignFlip
 * @var int|float|string $alignOffset
 * @var int|float|string $arrowPadding
 * @var bool $avoidCollisions
 * @var string $collisionBoundary
 * @var string $collisionPadding
 * @var bool $disableUpdateOnLayoutShift
 * @var bool $hideWhenDetached
 * @var string $positionStrategy
 * @var bool $prioritizePosition
 * @var string $reference
 * @var string $side
 * @var bool $sideFlip
 * @var int|float|string $sideOffset
 * @var string $sticky
 * @var string $updatePositionStrategy
 */

use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Str\MutableString;

use function Vewe\mkAttrs;

$is = new MutableString($is ?? 'false')->match('/^(a|button|div|h1|h2|h3|h4|img|input|label|li|nav|ol|p|span|svg|table|tbody|td|th|thead|tr|ul)$/', default: 'div');
$attributeString = mkAttrs(new ImmutableArray([
    'align' => new MutableString($align ?? 'false')->match('/^(start|center|end)$/', default: 'start'),
    'alignFlip' => new MutableString($alignFlip ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'alignOffset' => new MutableString($alignOffset ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'arrowPadding' => new MutableString($arrowPadding ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'avoidCollisions' => new MutableString($avoidCollisions ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'collisionBoundary' => new MutableString($collisionBoundary ?? 'false')->match('/^(Element|(Element|null)[]|null)$/', default: 'Element'),
    'collisionPadding' => new MutableString($collisionPadding ?? 'false')->match('/^(number|Partial<Record<top|right|bottom|left, number>>)$/', default: 'number'),
    'disableUpdateOnLayoutShift' => new MutableString($disableUpdateOnLayoutShift ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'hideWhenDetached' => new MutableString($hideWhenDetached ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'positionStrategy' => new MutableString($positionStrategy ?? 'false')->match('/^(fixed|absolute)$/', default: 'fixed'),
    'prioritizePosition' => new MutableString($prioritizePosition ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'reference' => new MutableString($reference ?? 'false')->match('/^(ReferenceElement)$/', default: 'R'),
    'side' => new MutableString($side ?? 'false')->match('/^(top|right|bottom|left)$/', default: 'top'),
    'sideFlip' => new MutableString($sideFlip ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'sideOffset' => new MutableString($sideOffset ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'sticky' => new MutableString($sticky ?? 'false')->match('/^(partial|always)$/', default: 'partial'),
    'updatePositionStrategy' => new MutableString($updatePositionStrategy ?? 'false')->match('/^(always|optimized)$/', default: 'always'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
