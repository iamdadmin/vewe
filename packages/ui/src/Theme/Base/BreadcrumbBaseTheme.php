<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class BreadcrumbBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'relative min-w-0',
                'list' => 'flex items-center gap-1.5',
                'item' => 'flex min-w-0',
                'link' => 'group relative flex items-center gap-1.5 text-sm min-w-0 focus-visible:outline-primary',
                'linkLeadingIcon' => 'shrink-0 size-5',
                'linkLeadingAvatar' => 'shrink-0',
                'linkLeadingAvatarSize' => '2xs',
                'linkLabel' => 'truncate',
                'separator' => 'flex',
                'separatorIcon' => 'shrink-0 size-5 text-muted',
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'active' => [
                    'true' => [
                        'link' => 'text-primary font-semibold',
                    ],
                    'false' => [
                        'link' => 'text-muted font-medium',
                    ],
                ],
                'disabled' => [
                    'true' => [
                        'link' => 'cursor-not-allowed opacity-75',
                    ],
                ],
                'to' => [
                    'true' => '',
                ],
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [
                [
                    'disabled' => false,
                    'active' => false,
                    'to' => true,
                    'class' => [
                        'link' => [
                            'hover:text-default',
                            '(options.theme.transitions) && transition-colors',
                        ],
                    ],
                ],
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            ['PHdefaultVariants'],
        );
    }
}
