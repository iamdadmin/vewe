<?php
/**
 * SEE: docs/1-essentials/02-views.md for usage instructions
 * @var string|null $name
 * @var string|null $class
 * @var string|null $style
 * @var string|null $width
 * @var string|null $height
 * @var bool|null $noSize
 */

use Tempest\Core\Environment;
use Tempest\Icon\Icon;
use Tempest\Support\Str\ImmutableString;

use function Tempest\Container\get;
use function Tempest\Support\str;

$name ??= null;
$environment = get(Environment::class);

$svg = str(is_string($name) ? get(Icon::class)->render($name) : null)
    ->when(
        fn (ImmutableString $s): bool => $s->toString() === '' && $environment->isLocal(),
        fn (ImmutableString $s): ImmutableString => str("<!-- unknown-icon: {$name} -->"),
    )
    ->when(
        $style ?? null,
        fn (ImmutableString $s): ImmutableString => $s->replace(
            search: '<svg',
            replace: "<svg style=\"{$style}\"",
        ),
    )
    ->when(
        $class ?? null,
        fn (ImmutableString $s): ImmutableString => $s->replace(
            search: '<svg',
            replace: "<svg class=\"{$class}\"",
        ),
    )
    ->when(
        isset($noSize) && ($noSize === '' || $noSize === true),
        fn (ImmutableString $s): ImmutableString => $s
            ->replace(
                search: ' width="1em"',
                replace: '',
            )
            ->replace(
                search: ' height="1em"',
                replace: '',
            ),
    )
    ->when(
        isset($width, $height) && ! ($noSize ?? false),
        fn (ImmutableString $s): ImmutableString => $s
            ->replace(
                search: ' width="1em"',
                replace: " width=\"{$width}\"",
            )
            ->replace(
                search: ' height="1em"',
                replace: " height=\"{$height}\"",
            ),
    )
    ->toString();
?>

{!! $svg !!}
