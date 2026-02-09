<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class CardBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'base' => 'group relative block my-5 p-4 sm:p-6 border border-default rounded-md bg-default transition-colors',
                'icon' => 'size-6 mb-2 block',
                'title' => 'text-highlighted font-semibold',
                'description' => 'text-[15px] text-muted *:first:mt-0 *:last:mb-0 *:my-1',
                'externalIcon' => 'size-4 align-top absolute right-2 top-2 text-dimmed pointer-events-none transition-colors',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'color' => [
                    $this->color => [
                        'icon' => 'text-'.$this->color,
                    ],
                    'neutral' => [
                        'icon' => 'text-highlighted',
                    ],
                ],
                'to' => [
                    'true' => [
                        'base' => '',
                    ],
                ],
                'title' => [
                    'true' => [
                        'description' => 'mt-1',
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
                    'color' => $this->color,
                    'to' => true,
                    'class' => [
                        'base' => 'hover:bg-'.$this->color.'/10 hover:border-'.$this->color.' has-focus-visible:border-'.$this->color,
                        'externalIcon' => 'group-hover:text-'.$this->color,
                    ],
                ],
                [
                    'color' => 'neutral',
                    'to' => true,
                    'class' => [
                        'base' => 'hover:bg-elevated/50 hover:border-inverted has-focus-visible:border-inverted',
                        'externalIcon' => 'group-hover:text-highlighted',
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
                'color' => 'primary',
            ],
        );
    }
}
