<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class CollapsibleBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'my-5',
        'trigger' => [
            'group relative rounded-xs inline-flex items-center gap-1.5 text-muted hover:text-default text-sm focus-visible:ring-2 focus-visible:ring-primary focus:outline-none',
            '(options.theme.transitions) && transition-colors',
        ],
        'triggerIcon' => 'size-4 shrink-0 group-data-[state=open]:rotate-180 transition-transform duration-200',
        'triggerLabel' => 'truncate',
        'content' => '*:first:mt-2.5 *:last:mb-0 *:my-1.5',
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
