<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;
use Vewe\Ui\Theme\Base\FieldGroupRootBaseTheme;

final class InputBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'relative inline-flex items-center',
                'base' => [
                    'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75',
                    '(options.theme.transitions) && transition-colors',
                ],
                'leading' => 'absolute inset-y-0 start-0 flex items-center',
                'leadingIcon' => 'shrink-0 text-dimmed',
                'leadingAvatar' => 'shrink-0',
                'leadingAvatarSize' => '',
                'trailing' => 'absolute inset-y-0 end-0 flex items-center',
                'trailingIcon' => 'shrink-0 text-dimmed',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'fieldGroup' => (new FieldGroupRootBaseTheme())->variants['fieldGroup'],
                'size' => [
                    'xs' => [
                        'base' => 'px-2 py-1 text-xs gap-1',
                        'leading' => 'ps-2',
                        'trailing' => 'pe-2',
                        'leadingIcon' => 'size-4',
                        'leadingAvatarSize' => '3xs',
                        'trailingIcon' => 'size-4',
                    ],
                    'sm' => [
                        'base' => 'px-2.5 py-1.5 text-xs gap-1.5',
                        'leading' => 'ps-2.5',
                        'trailing' => 'pe-2.5',
                        'leadingIcon' => 'size-4',
                        'leadingAvatarSize' => '3xs',
                        'trailingIcon' => 'size-4',
                    ],
                    'md' => [
                        'base' => 'px-2.5 py-1.5 text-sm gap-1.5',
                        'leading' => 'ps-2.5',
                        'trailing' => 'pe-2.5',
                        'leadingIcon' => 'size-5',
                        'leadingAvatarSize' => '2xs',
                        'trailingIcon' => 'size-5',
                    ],
                    'lg' => [
                        'base' => 'px-3 py-2 text-sm gap-2',
                        'leading' => 'ps-3',
                        'trailing' => 'pe-3',
                        'leadingIcon' => 'size-5',
                        'leadingAvatarSize' => '2xs',
                        'trailingIcon' => 'size-5',
                    ],
                    'xl' => [
                        'base' => 'px-3 py-2 text-base gap-2',
                        'leading' => 'ps-3',
                        'trailing' => 'pe-3',
                        'leadingIcon' => 'size-6',
                        'leadingAvatarSize' => 'xs',
                        'trailingIcon' => 'size-6',
                    ],
                ],
                'variant' => [
                    'outline' => 'text-highlighted bg-default ring ring-inset ring-accented',
                    'soft' => 'text-highlighted bg-elevated/50 hover:bg-elevated focus:bg-elevated disabled:bg-elevated/50',
                    'subtle' => 'text-highlighted bg-elevated ring ring-inset ring-accented',
                    'ghost' => 'text-highlighted bg-transparent hover:bg-elevated focus:bg-elevated disabled:bg-transparent dark:disabled:bg-transparent',
                    'none' => 'text-highlighted bg-transparent',
                ],
                'color' => [
                    'phcolorph' => [
                        'base' => '',
                    ],
                    'neutral' => [
                        'base' => '',
                    ],
                ],
                'leading' => [
                    'true' => '',
                ],
                'trailing' => [
                    'true' => '',
                ],
                'loading' => [
                    'true' => '',
                ],
                'highlight' => [
                    'true' => '',
                ],
                'type' => [
                    'file' => 'file:me-1.5 file:font-medium file:text-muted file:outline-none',
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [
                [
                    'color' => 'phcolorph',
                    'variant' => [
                        'outline',
                        'subtle',
                    ],
                    'class' => [
                        'base' => 'focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-phcolorph',
                    ],
                ],
                [
                    'color' => 'phcolorph',
                    'highlight' => true,
                    'class' => [
                        'base' => 'ring ring-inset ring-phcolorph',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => [
                        'outline',
                        'subtle',
                    ],
                    'class' => [
                        'base' => 'focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'highlight' => true,
                    'class' => [
                        'base' => 'ring ring-inset ring-inverted',
                    ],
                ],
                [
                    'leading' => true,
                    'size' => 'xs',
                    'class' => [
                        'base' => 'ps-7',
                    ],
                ],
                [
                    'leading' => true,
                    'size' => 'sm',
                    'class' => [
                        'base' => 'ps-8',
                    ],
                ],
                [
                    'leading' => true,
                    'size' => 'md',
                    'class' => [
                        'base' => 'ps-9',
                    ],
                ],
                [
                    'leading' => true,
                    'size' => 'lg',
                    'class' => [
                        'base' => 'ps-10',
                    ],
                ],
                [
                    'leading' => true,
                    'size' => 'xl',
                    'class' => [
                        'base' => 'ps-11',
                    ],
                ],
                [
                    'trailing' => true,
                    'size' => 'xs',
                    'class' => [
                        'base' => 'pe-7',
                    ],
                ],
                [
                    'trailing' => true,
                    'size' => 'sm',
                    'class' => [
                        'base' => 'pe-8',
                    ],
                ],
                [
                    'trailing' => true,
                    'size' => 'md',
                    'class' => [
                        'base' => 'pe-9',
                    ],
                ],
                [
                    'trailing' => true,
                    'size' => 'lg',
                    'class' => [
                        'base' => 'pe-10',
                    ],
                ],
                [
                    'trailing' => true,
                    'size' => 'xl',
                    'class' => [
                        'base' => 'pe-11',
                    ],
                ],
                [
                    'loading' => true,
                    'leading' => true,
                    'class' => [
                        'leadingIcon' => 'animate-spin',
                    ],
                ],
                [
                    'loading' => true,
                    'leading' => false,
                    'trailing' => true,
                    'class' => [
                        'trailingIcon' => 'animate-spin',
                    ],
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [
                'size' => 'md',
                'color' => 'phcolorph',
                'variant' => 'outline',
            ],
        );
    }
}
