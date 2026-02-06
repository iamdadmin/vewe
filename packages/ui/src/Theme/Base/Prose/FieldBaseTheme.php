<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class FieldBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'my-5',
        'container' => 'flex items-center gap-3 font-mono text-sm',
        'name' => 'font-semibold text-primary',
        'wrapper' => 'flex-1 flex items-center gap-1.5 text-xs',
        'required' => 'rounded-sm bg-error/10 text-error px-1.5 py-0.5',
        'type' => 'rounded-sm bg-elevated text-toned px-1.5 py-0.5',
        'description' => 'mt-3 text-muted text-sm [&_code]:text-xs/4',
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
