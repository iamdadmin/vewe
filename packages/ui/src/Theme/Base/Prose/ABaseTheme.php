<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class ABaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'base' => [
            'text-primary border-b border-transparent hover:border-primary font-medium focus-visible:outline-primary focus-visible:has-[>code]:outline-0 [&>code]:border-dashed hover:[&>code]:border-primary hover:[&>code]:text-primary focus-visible:[&>code]:border-primary focus-visible:[&>code]:text-primary',
            '(options.theme.transitions) && transition-colors [&>code]:transition-colors',
        ],
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
