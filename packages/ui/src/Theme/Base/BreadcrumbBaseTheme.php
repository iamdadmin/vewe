<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class BreadcrumbBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
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
    ];

    protected const array VARIANTS = [
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
    ];

    protected const array COMPOUND_VARIANTS = [
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
    ];

    protected const array DEFAULT_VARIANTS = [];
}
