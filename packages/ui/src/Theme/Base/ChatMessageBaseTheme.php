<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class ChatMessageBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'group/message relative w-full',
                'container' => 'relative flex items-start',
                'leading' => 'inline-flex items-center justify-center min-h-6',
                'leadingIcon' => 'shrink-0',
                'leadingAvatar' => 'shrink-0',
                'leadingAvatarSize' => '',
                'content' => 'relative text-pretty min-w-0 *:first:mt-0 *:last:mb-0',
                'actions' => [
                    'opacity-0 group-hover/message:opacity-100 absolute bottom-0 flex items-center',
                    '(options.theme.transitions) && transition-opacity',
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'variant' => [
                    'solid' => [
                        'content' => 'bg-inverted text-inverted',
                    ],
                    'outline' => [
                        'content' => 'bg-default ring ring-default',
                    ],
                    'soft' => [
                        'content' => 'bg-elevated/50',
                    ],
                    'subtle' => [
                        'content' => 'bg-elevated/50 ring ring-default',
                    ],
                    'naked' => [
                        'content' => '',
                    ],
                ],
                'side' => [
                    'left' => [
                        'container' => 'rtl:justify-end',
                    ],
                    'right' => [
                        'container' => 'ltr:justify-end ms-auto max-w-[75%]',
                    ],
                ],
                'leading' => [
                    'true' => [
                        'root' => '',
                    ],
                ],
                'actions' => [
                    'true' => [
                        'root' => '',
                    ],
                ],
                'compact' => [
                    'true' => [
                        'root' => 'scroll-mt-3',
                        'container' => 'gap-1.5 pb-3',
                        'leadingIcon' => 'size-5',
                        'leadingAvatarSize' => '2xs',
                    ],
                    'false' => [
                        'root' => 'scroll-mt-4 sm:scroll-mt-6',
                        'container' => 'gap-3 pb-8',
                        'leadingIcon' => 'size-8',
                        'leadingAvatarSize' => 'md',
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
                    'compact' => true,
                    'actions' => true,
                    'class' => [
                        'container' => 'pb-8',
                    ],
                ],
                [
                    'leading' => true,
                    'compact' => false,
                    'side' => 'left',
                    'class' => [
                        'actions' => 'left-11',
                    ],
                ],
                [
                    'leading' => true,
                    'compact' => true,
                    'side' => 'left',
                    'class' => [
                        'actions' => 'left-6.5',
                    ],
                ],
                [
                    'variant' => [
                        'solid',
                        'outline',
                        'soft',
                        'subtle',
                    ],
                    'compact' => false,
                    'class' => [
                        'content' => 'px-4 py-3 rounded-lg min-h-12',
                        'leading' => 'mt-2',
                    ],
                ],
                [
                    'variant' => [
                        'solid',
                        'outline',
                        'soft',
                        'subtle',
                    ],
                    'compact' => true,
                    'class' => [
                        'content' => 'px-2 py-1 rounded-lg min-h-8',
                        'leading' => 'mt-1',
                    ],
                ],
                [
                    'variant' => 'naked',
                    'side' => 'left',
                    'class' => [
                        'content' => 'w-full',
                    ],
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [
                'variant' => 'naked',
            ],
        );
    }
}
