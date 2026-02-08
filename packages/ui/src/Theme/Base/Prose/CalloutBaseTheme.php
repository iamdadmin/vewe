<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class CalloutBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'base' => [
                    'group relative block px-4 py-3 rounded-md text-sm/6 my-5 last:mb-0 [&_code]:text-xs/5 [&_code]:bg-default [&_pre]:bg-default [&>div]:my-2.5 [&_ul]:my-2.5 [&_ol]:my-2.5 [&>*]:last:!mb-0 [&_ul]:ps-4.5 [&_ol]:ps-4.5 [&_li]:my-0',
                    '(options.theme.transitions) && transition-colors',
                ],
                'icon' => [
                    'size-4 shrink-0 align-sub me-1.5 inline-block',
                    '(options.theme.transitions) && transition-colors',
                ],
                'externalIcon' => [
                    'size-4 align-top absolute right-2 top-2 pointer-events-none',
                    '(options.theme.transitions) && transition-colors',
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'color' => [
                    'phcolorph' => [
                        'base' => 'border border-phcolorph/25 bg-phcolorph/10 text-phcolorph-600 dark:text-phcolorph-300 [&_a]:text-phcolorph [&_a]:hover:border-phcolorph [&_a]:focus-visible:outline-phcolorph [&_code]:text-phcolorph-600 dark:[&_code]:text-phcolorph-300 [&_code]:border-phcolorph/25 [&_a]:hover:[&>code]:border-phcolorph [&_a]:hover:[&>code]:text-phcolorph [&_a]:focus-visible:[&>code]:border-phcolorph [&_a]:focus-visible:[&>code]:text-phcolorph [&>ul]:marker:text-phcolorph/50',
                        'icon' => 'text-phcolorph',
                        'externalIcon' => 'text-phcolorph-600 dark:text-phcolorph-300',
                    ],
                    'neutral' => [
                        'base' => 'border border-muted bg-muted text-default',
                        'icon' => 'text-highlighted',
                        'externalIcon' => 'text-dimmed',
                    ],
                ],
                'to' => [
                    'true' => 'border-dashed',
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [
                [
                    'color' => 'phcolorph',
                    'to' => true,
                    'class' => [
                        'base' => 'hover:border-phcolorph has-focus-visible:border-phcolorph',
                        'externalIcon' => 'group-hover:text-phcolorph',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'to' => true,
                    'class' => [
                        'base' => 'hover:border-inverted has-focus-visible:border-inverted',
                        'externalIcon' => 'group-hover:text-highlighted',
                    ],
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [
                'color' => 'neutral',
            ],
        );
    }
}
