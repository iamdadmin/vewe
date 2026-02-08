<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class TdBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'base' => 'py-3 px-4 text-sm align-top border-e border-b first:border-s border-muted [&_code]:text-xs/5 [&_p]:my-0 [&_p]:leading-6 [&_ul]:my-0 [&_ol]:my-0 [&_ul]:ps-4.5 [&_ol]:ps-4.5 [&_li]:leading-6 [&_li]:my-0.5',
                'variants' => [
                    'align' => [
                        'left' => 'text-left',
                        'center' => 'text-center',
                        'right' => 'text-right',
                    ],
                ],
                'defaultVariants' => [
                    'align' => 'left',
                ],
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            ['PHvariants'],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            ['PHcompoundVariants'],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            ['PHdefaultVariants'],
        );
    }
}
