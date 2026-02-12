<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\Base\InputBaseTheme;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class InputTimeBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => (new InputBaseTheme())->slots->merge(
            // @mago-expect analysis:less-specific-argument
            new ImmutableArray(
                [
                    'root' => '',
                    'base' => 'group relative inline-flex items-center rounded-md select-none transition-colors',
                    'segment' => [
                        'rounded text-center outline-hidden data-placeholder:text-dimmed data-[segment=literal]:text-muted data-invalid:text-error data-disabled:cursor-not-allowed data-disabled:opacity-75 transition-colors',
                    ],
                ],
            ),
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => (new InputBaseTheme())->variants->merge(
            // @mago-expect analysis:less-specific-argument
            new ImmutableArray(
                [
                    'fieldGroup' => (new FieldGroupBaseTheme())->variants['fieldGroup'],
                    'size' => [
                        'xs' => [
                            'base' => [
                                (new InputBaseTheme())->variants['size']['xs']['base'] ?? '' . 'gap-0.25',
                            ],
                            'segment' => 'not-data-[segment=literal]:w-6',
                        ],
                        'sm' => [
                            'base' => [
                                (new InputBaseTheme())->variants['size']['sm']['base'] ?? '' . 'gap-0.5',
                            ],
                            'segment' => 'not-data-[segment=literal]:w-6',
                        ],
                        'md' => [
                            'base' => [
                                (new InputBaseTheme())->variants['size']['md']['base'] ?? '' . 'gap-0.5',
                            ],
                            'segment' => 'not-data-[segment=literal]:w-7',
                        ],
                        'lg' => [
                            'base' => [
                                (new InputBaseTheme())->variants['size']['lg']['base'] ?? '' . 'gap-0.75',
                            ],
                            'segment' => 'not-data-[segment=literal]:w-7',
                        ],
                        'xl' => [
                            'base' => [
                                (new InputBaseTheme())->variants['size']['xl']['base'] ?? '' . 'gap-0.75',
                            ],
                            'segment' => 'not-data-[segment=literal]:w-8',
                        ],
                    ],
                ],
            ),
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => (new InputBaseTheme())->compoundVariants->merge(
            // @mago-expect analysis:less-specific-argument
            new ImmutableArray(
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
            ),
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => (new InputBaseTheme())->defaultVariants->merge(
            // @mago-expect analysis:less-specific-argument
            new ImmutableArray(
                [],
            ),
        );
    }
}
