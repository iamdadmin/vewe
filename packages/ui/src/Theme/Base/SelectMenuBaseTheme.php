<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;
use Vewe\Ui\Theme\Base\SelectBaseTheme;

final class SelectMenuBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => (new SelectBaseTheme())->slots->merge(
            // @mago-expect analysis:less-specific-argument
            new ImmutableArray(
                [
                'input' => 'border-b border-default',
                'focusScope' => 'flex flex-col min-h-0',
                'viewport' => 'relative scroll-py-1 overflow-y-auto flex-1',
                'content' => [
                    (new SelectBaseTheme())->slots['content'] .' origin-(--reka-combobox-content-transform-origin) w-(--reka-combobox-trigger-width)',
                ],
                'trailingClear' => 'p-0',
            ],
            ),
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => (new SelectBaseTheme())->variants->merge(
            // @mago-expect analysis:less-specific-argument
            new ImmutableArray(
                [
                'virtualize' => [
                    'true' => [
                        'viewport' => 'p-1 isolate',
                    ],
                    'false' => [
                        'viewport' => 'divide-y divide-default',
                    ],
                ],
            ],
            ),
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => (new SelectBaseTheme())->compoundVariants->merge(
            // @mago-expect analysis:less-specific-argument
            new ImmutableArray(
                [],
            ),
        )->map(fn (array $item) => [
            ...$item,
            'class' => isset($item['class']['base'])
                ? [...$item['class'], 'base' => str_replace('focus:', 'focus-visible:', $item['class']['base'])]
                : $item['class'],
        ]);
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => (new SelectBaseTheme())->defaultVariants->merge(
            // @mago-expect analysis:less-specific-argument
            new ImmutableArray(
                [],
            ),
        );
    }
}
