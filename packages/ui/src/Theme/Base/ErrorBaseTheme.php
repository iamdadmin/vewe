<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class ErrorBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'min-h-[calc(100vh-var(--ui-header-height))] flex flex-col items-center justify-center text-center',
        'statusCode' => 'text-base font-semibold text-primary',
        'statusMessage' => 'mt-2 text-4xl sm:text-5xl font-bold text-highlighted text-balance',
        'message' => 'mt-4 text-lg text-muted text-balance',
        'links' => 'mt-8 flex items-center justify-center gap-6',
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
