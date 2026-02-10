<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;
use Vewe\Ui\Theme\Base\FieldGroupBaseTheme;

final class BadgeBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'base' => 'font-medium inline-flex items-center',
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
                    $this->color => [
                        'base' => '',
                    ],
                    'neutral' => [
                        'base' => '',
                    ],
                ],
                'variant' => [
                    'solid' => [
                        'base' => '',
                    ],
                    'outline' => [
                        'base' => '',
                    ],
                    'soft' => [
                        'base' => '',
                    ],
                    'subtle' => [
                        'base' => '',
                    ],
                ],
                'size' => [
                    'xs' => [
                        'base' => 'text-[8px]/3 px-1 py-0.5 gap-1 rounded-sm',
                        'leadingIcon' => 'size-3',
                        'leadingAvatarSize' => '3xs',
                        'trailingIcon' => 'size-3',
                    ],
                    'sm' => [
                        'base' => 'text-[10px]/3 px-1.5 py-1 gap-1 rounded-sm',
                        'leadingIcon' => 'size-3',
                        'leadingAvatarSize' => '3xs',
                        'trailingIcon' => 'size-3',
                    ],
                    'md' => [
                        'base' => 'text-xs px-2 py-1 gap-1 rounded-md',
                        'leadingIcon' => 'size-4',
                        'leadingAvatarSize' => '3xs',
                        'trailingIcon' => 'size-4',
                    ],
                    'lg' => [
                        'base' => 'text-sm px-2 py-1 gap-1.5 rounded-md',
                        'leadingIcon' => 'size-5',
                        'leadingAvatarSize' => '2xs',
                        'trailingIcon' => 'size-5',
                    ],
                    'xl' => [
                        'base' => 'text-base px-2.5 py-1 gap-1.5 rounded-md',
                        'leadingIcon' => 'size-6',
                        'leadingAvatarSize' => '2xs',
                        'trailingIcon' => 'size-6',
                    ],
                ],
                'square' => [
                    'true' => '',
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
                    'color' => $this->color,
                    'variant' => 'solid',
                    'class' => [
                        'base' => 'bg-'.$this->color.' text-inverted',
                    ],
                ],
                [
                    'color' => $this->color,
                    'variant' => 'outline',
                    'class' => [
                        'base' => 'text-'.$this->color.' ring ring-inset ring-'.$this->color.'/50',
                    ],
                ],
                [
                    'color' => $this->color,
                    'variant' => 'soft',
                    'class' => [
                        'base' => 'bg-'.$this->color.'/10 text-'.$this->color,
                    ],
                ],
                [
                    'color' => $this->color,
                    'variant' => 'subtle',
                    'class' => [
                        'base' => 'bg-'.$this->color.'/10 text-'.$this->color.' ring ring-inset ring-'.$this->color.'/25',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'solid',
                    'class' => [
                        'base' => 'text-inverted bg-inverted',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'outline',
                    'class' => [
                        'base' => 'ring ring-inset ring-accented text-default bg-default',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'soft',
                    'class' => [
                        'base' => 'text-default bg-elevated',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'subtle',
                    'class' => [
                        'base' => 'ring ring-inset ring-accented text-default bg-elevated',
                    ],
                ],
                [
                    'size' => 'xs',
                    'square' => true,
                    'class' => [
                        'base' => 'p-0.5',
                    ],
                ],
                [
                    'size' => 'sm',
                    'square' => true,
                    'class' => [
                        'base' => 'p-1',
                    ],
                ],
                [
                    'size' => 'md',
                    'square' => true,
                    'class' => [
                        'base' => 'p-1',
                    ],
                ],
                [
                    'size' => 'lg',
                    'square' => true,
                    'class' => [
                        'base' => 'p-1',
                    ],
                ],
                [
                    'size' => 'xl',
                    'square' => true,
                    'class' => [
                        'base' => 'p-1',
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
                'color' => $this->color,
                'variant' => 'solid',
                'size' => 'md',
            ],
        );
    }
}
