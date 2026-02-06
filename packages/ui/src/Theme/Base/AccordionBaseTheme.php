<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class AccordionBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'w-full',
        'item' => 'border-b border-default last:border-b-0',
        'header' => 'flex',
        'trigger' => 'group flex-1 flex items-center gap-1.5 font-medium text-sm py-3.5 focus-visible:outline-primary min-w-0',
        'content' => 'data-[state=open]:animate-[accordion-down_200ms_ease-out] data-[state=closed]:animate-[accordion-up_200ms_ease-out] overflow-hidden focus:outline-none',
        'body' => 'text-sm pb-3.5',
        'leadingIcon' => 'shrink-0 size-5',
        'trailingIcon' => 'shrink-0 size-5 ms-auto group-data-[state=open]:rotate-180 transition-transform duration-200',
        'label' => 'text-start break-words',
    ];

    protected const array VARIANTS = [
        'disabled' => [
            'true' => [
                'trigger' => 'cursor-not-allowed opacity-75',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
