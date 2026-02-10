<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class FooterColumnsBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'xl:grid xl:grid-cols-3 xl:gap-8',
                'left' => 'mb-10 xl:mb-0',
                'center' => 'flex flex-col lg:grid grid-flow-col auto-cols-fr gap-8 xl:col-span-2',
                'right' => 'mt-10 xl:mt-0',
                'label' => 'text-sm font-semibold',
                'list' => 'mt-6 space-y-4',
                'item' => 'relative',
                'link' => 'group text-sm flex items-center gap-1.5 focus-visible:outline-primary',
                'linkLeadingIcon' => 'size-5 shrink-0',
                'linkLabel' => 'truncate',
                'linkLabelExternalIcon' => 'size-3 absolute top-0 text-dimmed inline-block',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'active' => [
                    'true' => [
                        'link' => 'text-primary font-medium',
                    ],
                    'false' => [
                        'link' => [
                            'text-muted hover:text-default transition-colors',
                        ],
                    ],
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [],
        );
    }
}
