<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class ChatPaletteBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'relative flex-1 flex flex-col min-h-0 min-w-0',
        'prompt' => 'px-0 rounded-t-none border-t border-default',
        'close' => '',
        'content' => 'overflow-y-auto flex-1 flex flex-col py-3',
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
