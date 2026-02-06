<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class LiBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'base' => 'my-1.5 ps-1.5 leading-7 [&>ul]:my-0',
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
