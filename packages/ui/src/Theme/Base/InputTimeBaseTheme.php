<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;
use Vewe\Ui\Theme\Base\FieldGroupBaseTheme;

final class InputTimeBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
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
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'fieldGroup' => (new FieldGroupBaseTheme())->variants['fieldGroup'],
                'size' => [
                    'xs' => [
                        'base' => [
                            'mergeWithParent',
                            'gap-0.25',
                        ],
                        'segment' => 'not-data-[segment=literal]:w-6',
                    ],
                    'sm' => [
                        'base' => [
                            'mergeWithParent',
                            'gap-0.5',
                        ],
                        'segment' => 'not-data-[segment=literal]:w-6',
                    ],
                    'md' => [
                        'base' => [
                            'mergeWithParent',
                            'gap-0.5',
                        ],
                        'segment' => 'not-data-[segment=literal]:w-7',
                    ],
                    'lg' => [
                        'base' => [
                            'mergeWithParent',
                            'gap-0.75',
                        ],
                        'segment' => 'not-data-[segment=literal]:w-7',
                    ],
                    'xl' => [
                        'base' => [
                            'mergeWithParent',
                            'gap-0.75',
                        ],
                        'segment' => 'not-data-[segment=literal]:w-8',
                    ],
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
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

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [],
        );
    }
}
