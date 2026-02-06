<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class InputTagsBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => [
            'mergeWithParent',
            'flex-wrap',
        ],
        'base' => [
            'rounded-md',
            '(options.theme.transitions) && transition-colors',
        ],
        'item' => 'px-1.5 py-0.5 rounded-sm font-medium inline-flex items-center gap-0.5 ring ring-inset ring-accented bg-elevated text-default data-disabled:cursor-not-allowed data-disabled:opacity-75 wrap-anywhere data-[state=\'active\']:bg-accented',
        'itemText' => '',
        'itemDelete' => [
            'inline-flex items-center rounded-xs text-dimmed hover:text-default hover:bg-accented/75 disabled:pointer-events-none',
            '(options.theme.transitions) && transition-colors',
        ],
        'itemDeleteIcon' => 'shrink-0',
        'input' => 'flex-1 border-0 bg-transparent placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75',
    ];

    protected const array VARIANTS = [
        'size' => [
            'xs' => [
                'item' => 'text-[10px]/3',
                'itemDeleteIcon' => 'size-3',
            ],
            'sm' => [
                'item' => 'text-[10px]/3',
                'itemDeleteIcon' => 'size-3',
            ],
            'md' => [
                'item' => 'text-xs',
                'itemDeleteIcon' => 'size-3.5',
            ],
            'lg' => [
                'item' => 'text-xs',
                'itemDeleteIcon' => 'size-3.5',
            ],
            'xl' => [
                'item' => 'text-sm',
                'itemDeleteIcon' => 'size-4',
            ],
        ],
        'variant' => [
            '(prev: Record<string, string>) => Object.fromEntries(' => '',
            'Object.entries(prev).map(([key, value]) => [key, replaceFocus(value)])' => '',
        ],
    ];

    protected const array COMPOUND_VARIANTS = [
        '(prev: Record<string, any>[]) => prev.map(item => ({' => '...item',
        'class' => 'typeof item.class === \'string\' ? replaceFocus(item.class) : item.class',
    ];

    protected const array DEFAULT_VARIANTS = [];
}
