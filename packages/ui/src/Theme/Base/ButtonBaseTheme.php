<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;
use Vewe\Ui\Theme\Base\FieldGroupBaseTheme;

final class ButtonBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'base' => [
                    'rounded-md font-medium inline-flex items-center disabled:cursor-not-allowed aria-disabled:cursor-not-allowed disabled:opacity-75 aria-disabled:opacity-75 transition-colors',
                ],
                'label' => 'truncate',
                'leadingIcon' => 'shrink-0',
                'leadingAvatar' => 'shrink-0',
                'leadingAvatarSize' => '',
                'trailingIcon' => 'shrink-0',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'fieldGroup' => (new FieldGroupBaseTheme())->variants['fieldGroup'],
                'color' => [
                    'phcolorph' => [
                        'base' => '',
                    ],
                    'neutral' => [
                        'base' => '',
                    ],
                ],
                'variant' => [
                    'solid' => '',
                    'outline' => '',
                    'soft' => '',
                    'subtle' => '',
                    'ghost' => '',
                    'link' => '',
                ],
                'size' => [
                    'xs' => [
                        'base' => 'px-2 py-1 text-xs gap-1',
                        'leadingIcon' => 'size-4',
                        'leadingAvatarSize' => '3xs',
                        'trailingIcon' => 'size-4',
                    ],
                    'sm' => [
                        'base' => 'px-2.5 py-1.5 text-xs gap-1.5',
                        'leadingIcon' => 'size-4',
                        'leadingAvatarSize' => '3xs',
                        'trailingIcon' => 'size-4',
                    ],
                    'md' => [
                        'base' => 'px-2.5 py-1.5 text-sm gap-1.5',
                        'leadingIcon' => 'size-5',
                        'leadingAvatarSize' => '2xs',
                        'trailingIcon' => 'size-5',
                    ],
                    'lg' => [
                        'base' => 'px-3 py-2 text-sm gap-2',
                        'leadingIcon' => 'size-5',
                        'leadingAvatarSize' => '2xs',
                        'trailingIcon' => 'size-5',
                    ],
                    'xl' => [
                        'base' => 'px-3 py-2 text-base gap-2',
                        'leadingIcon' => 'size-6',
                        'leadingAvatarSize' => 'xs',
                        'trailingIcon' => 'size-6',
                    ],
                ],
                'block' => [
                    'true' => [
                        'base' => 'w-full justify-center',
                        'trailingIcon' => 'ms-auto',
                    ],
                ],
                'square' => [
                    'true' => '',
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
                'active' => [
                    'true' => [
                        'base' => '',
                    ],
                    'false' => [
                        'base' => '',
                    ],
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
                    'variant' => 'solid',
                    'class' => [
                        'base' => 'text-inverted bg-phcolorph hover:bg-phcolorph/75 active:bg-phcolorph/75 disabled:bg-phcolorph aria-disabled:bg-phcolorph focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-phcolorph',
                    ],
                ],
                [
                    'color' => 'phcolorph',
                    'variant' => 'outline',
                    'class' => [
                        'base' => 'ring ring-inset ring-phcolorph/50 text-phcolorph hover:bg-phcolorph/10 active:bg-phcolorph/10 disabled:bg-transparent aria-disabled:bg-transparent dark:disabled:bg-transparent dark:aria-disabled:bg-transparent focus:outline-none focus-visible:ring-2 focus-visible:ring-phcolorph',
                    ],
                ],
                [
                    'color' => 'phcolorph',
                    'variant' => 'soft',
                    'class' => [
                        'base' => 'text-phcolorph bg-phcolorph/10 hover:bg-phcolorph/15 active:bg-phcolorph/15 focus:outline-none focus-visible:bg-phcolorph/15 disabled:bg-phcolorph/10 aria-disabled:bg-phcolorph/10',
                    ],
                ],
                [
                    'color' => 'phcolorph',
                    'variant' => 'subtle',
                    'class' => [
                        'base' => 'text-phcolorph ring ring-inset ring-phcolorph/25 bg-phcolorph/10 hover:bg-phcolorph/15 active:bg-phcolorph/15 disabled:bg-phcolorph/10 aria-disabled:bg-phcolorph/10 focus:outline-none focus-visible:ring-2 focus-visible:ring-phcolorph',
                    ],
                ],
                [
                    'color' => 'phcolorph',
                    'variant' => 'ghost',
                    'class' => [
                        'base' => 'text-phcolorph hover:bg-phcolorph/10 active:bg-phcolorph/10 focus:outline-none focus-visible:bg-phcolorph/10 disabled:bg-transparent aria-disabled:bg-transparent dark:disabled:bg-transparent dark:aria-disabled:bg-transparent',
                    ],
                ],
                [
                    'color' => 'phcolorph',
                    'variant' => 'link',
                    'class' => [
                        'base' => 'text-phcolorph hover:text-phcolorph/75 active:text-phcolorph/75 disabled:text-phcolorph aria-disabled:text-phcolorph focus:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-phcolorph',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'solid',
                    'class' => [
                        'base' => 'text-inverted bg-inverted hover:bg-inverted/90 active:bg-inverted/90 disabled:bg-inverted aria-disabled:bg-inverted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-inverted',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'outline',
                    'class' => [
                        'base' => 'ring ring-inset ring-accented text-default bg-default hover:bg-elevated active:bg-elevated disabled:bg-default aria-disabled:bg-default focus:outline-none focus-visible:ring-2 focus-visible:ring-inverted',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'soft',
                    'class' => [
                        'base' => 'text-default bg-elevated hover:bg-accented/75 active:bg-accented/75 focus:outline-none focus-visible:bg-accented/75 disabled:bg-elevated aria-disabled:bg-elevated',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'subtle',
                    'class' => [
                        'base' => 'ring ring-inset ring-accented text-default bg-elevated hover:bg-accented/75 active:bg-accented/75 disabled:bg-elevated aria-disabled:bg-elevated focus:outline-none focus-visible:ring-2 focus-visible:ring-inverted',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'ghost',
                    'class' => [
                        'base' => 'text-default hover:bg-elevated active:bg-elevated focus:outline-none focus-visible:bg-elevated hover:disabled:bg-transparent dark:hover:disabled:bg-transparent hover:aria-disabled:bg-transparent dark:hover:aria-disabled:bg-transparent',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'link',
                    'class' => [
                        'base' => 'text-muted hover:text-default active:text-default disabled:text-muted aria-disabled:text-muted focus:outline-none focus-visible:ring-inset focus-visible:ring-2 focus-visible:ring-inverted',
                    ],
                ],
                [
                    'size' => 'xs',
                    'square' => true,
                    'class' => [
                        'base' => 'p-1',
                    ],
                ],
                [
                    'size' => 'sm',
                    'square' => true,
                    'class' => [
                        'base' => 'p-1.5',
                    ],
                ],
                [
                    'size' => 'md',
                    'square' => true,
                    'class' => [
                        'base' => 'p-1.5',
                    ],
                ],
                [
                    'size' => 'lg',
                    'square' => true,
                    'class' => [
                        'base' => 'p-2',
                    ],
                ],
                [
                    'size' => 'xl',
                    'square' => true,
                    'class' => [
                        'base' => 'p-2',
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
                'color' => 'phcolorph',
                'variant' => 'solid',
                'size' => 'md',
            ],
        );
    }
}
