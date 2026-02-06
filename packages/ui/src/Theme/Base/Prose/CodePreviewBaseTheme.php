<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class CodePreviewBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'my-5',
        'preview' => 'flex justify-center border border-muted relative p-4 rounded-md',
        'code' => '[&>div>pre]:rounded-t-none [&>div]:my-0',
    ];

    protected const array VARIANTS = [
        'code' => [
            'true' => [
                'preview' => 'border-b-0 rounded-b-none',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
