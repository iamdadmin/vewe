<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class PageLinksBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'flex flex-col gap-3',
                'title' => 'text-sm font-semibold flex items-center gap-1.5',
                'list' => 'flex flex-col gap-2',
                'item' => 'relative',
                'link' => 'group text-sm flex items-center gap-1.5 focus-visible:outline-primary',
                'linkLeadingIcon' => 'size-5 shrink-0',
                'linkLabel' => 'truncate',
                'linkLabelExternalIcon' => 'size-3 absolute top-0 text-dimmed',
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
