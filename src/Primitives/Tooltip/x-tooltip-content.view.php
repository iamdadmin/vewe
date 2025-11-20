<?php
/**
 * @var string $is
 * @var string $align
 * @var int|float|string $alignOffset
 * @var string $ariaLabel
 * @var int|float|string $arrowPadding
 * @var bool $avoidCollisions
 * @var string $collisionBoundary
 * @var string $collisionPadding
 * @var bool $hideWhenDetached
 * @var string $positionStrategy
 * @var string $side
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
    'alignOffset' => new MutableString($alignOffset ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'ariaLabel' => new MutableString($ariaLabel ?? 'false')->match('/^(string)$/', default: 's'),
    'arrowPadding' => new MutableString($arrowPadding ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'avoidCollisions' => new MutableString($avoidCollisions ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'collisionBoundary' => new MutableString($collisionBoundary ?? 'false')->match('/^(Element|(Element|null)[]|null)$/', default: 'Element'),
    'collisionPadding' => new MutableString($collisionPadding ?? 'false')->match('/^(number|Partial<Record<top|right|bottom|left, number>>)$/', default: 'number'),
    'hideWhenDetached' => new MutableString($hideWhenDetached ?? 'false')->match('/^(false|true)$/', default: 'false'),
    'positionStrategy' => new MutableString($positionStrategy ?? 'false')->match('/^(fixed|absolute)$/', default: 'fixed'),
    'side' => new MutableString($side ?? 'false')->match('/^(top|right|bottom|left)$/', default: 'top'),
    'sideOffset' => new MutableString($sideOffset ?? 'false')->match('/^(-?\d+(\/\d+)?(\.\d+)?)$/', default: '1'),
    'sticky' => new MutableString($sticky ?? 'false')->match('/^(partial|always)$/', default: 'partial'),
    'updatePositionStrategy' => new MutableString($updatePositionStrategy ?? 'false')->match('/^(always|optimized)$/', default: 'always'),
]));

?>
<x-component :is="$is" :attributes="$attributeString">
    <slot/>
</x-component>
