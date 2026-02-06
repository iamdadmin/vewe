<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class FormFieldBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => '',
        'wrapper' => '',
        'labelWrapper' => 'flex content-center items-center justify-between gap-1',
        'label' => 'block font-medium text-default',
        'container' => 'relative',
        'description' => 'text-muted',
        'error' => 'mt-2 text-error',
        'hint' => 'text-muted',
        'help' => 'mt-2 text-muted',
    ];

    protected const array VARIANTS = [
        'size' => [
            'xs' => [
                'root' => 'text-xs',
            ],
            'sm' => [
                'root' => 'text-xs',
            ],
            'md' => [
                'root' => 'text-sm',
            ],
            'lg' => [
                'root' => 'text-sm',
            ],
            'xl' => [
                'root' => 'text-base',
            ],
        ],
        'required' => [
            'true' => [
                'label' => 'after:content-[\'*\'] after:ms-0.5 after:text-error',
            ],
        ],
        'orientation' => [
            'vertical' => [
                'container' => 'mt-1',
            ],
            'horizontal' => [
                'root' => 'flex justify-between place-items-baseline gap-2',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [
        'size' => 'md',
        'orientation' => 'vertical',
    ];
}
