<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class InputDateBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => '',
                'base' => [
                    'group relative inline-flex items-center rounded-md select-none',
                    '(options.theme.transitions) && transition-colors',
                ],
                'segment' => [
                    'rounded text-center outline-hidden data-placeholder:text-dimmed data-[segment=literal]:text-muted data-invalid:text-error data-disabled:cursor-not-allowed data-disabled:opacity-75',
                    '(options.theme.transitions) && transition-colors',
                ],
                'separatorIcon' => 'shrink-0 size-4 text-muted',
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'fieldGroupVariant' => [
                    'import' => '(fieldGroupVariant)',
                ],
                'size' => [
                    'xs' => [
                        'base' => [
                            'mergeWithParent',
                            'gap-0.25',
                        ],
                        'segment' => 'data-[segment=day]:w-6 data-[segment=month]:w-6 data-[segment=year]:w-9',
                    ],
                    'sm' => [
                        'base' => [
                            'mergeWithParent',
                            'gap-0.5',
                        ],
                        'segment' => 'data-[segment=day]:w-6 data-[segment=month]:w-6 data-[segment=year]:w-9',
                    ],
                    'md' => [
                        'base' => [
                            'mergeWithParent',
                            'gap-0.5',
                        ],
                        'segment' => 'data-[segment=day]:w-7 data-[segment=month]:w-7 data-[segment=year]:w-11',
                    ],
                    'lg' => [
                        'base' => [
                            'mergeWithParent',
                            'gap-0.75',
                        ],
                        'segment' => 'data-[segment=day]:w-7 data-[segment=month]:w-7 data-[segment=year]:w-11',
                    ],
                    'xl' => [
                        'base' => [
                            'mergeWithParent',
                            'gap-0.75',
                        ],
                        'segment' => 'data-[segment=day]:w-8 data-[segment=month]:w-8 data-[segment=year]:w-13',
                    ],
                ],
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [
                [
                    'variant' => 'outline',
                    'class' => [
                        'segment' => 'focus:bg-elevated',
                    ],
                ],
                [
                    'variant' => 'soft',
                    'class' => [
                        'segment' => 'focus:bg-accented/50 group-hover:focus:bg-accented',
                    ],
                ],
                [
                    'variant' => 'subtle',
                    'class' => [
                        'segment' => 'focus:bg-accented',
                    ],
                ],
                [
                    'variant' => 'ghost',
                    'class' => [
                        'segment' => 'focus:bg-elevated group-hover:focus:bg-accented',
                    ],
                ],
                [
                    'variant' => 'none',
                    'class' => [
                        'segment' => 'focus:bg-elevated',
                    ],
                ],
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            ['PHdefaultVariants'],
        );
    }
}
