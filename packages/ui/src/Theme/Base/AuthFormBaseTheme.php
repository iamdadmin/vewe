<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class AuthFormBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'w-full space-y-6',
                'header' => 'flex flex-col text-center',
                'leading' => 'mb-2',
                'leadingIcon' => 'size-8 shrink-0 inline-block',
                'title' => 'text-xl text-pretty font-semibold text-highlighted',
                'description' => 'mt-1 text-base text-pretty text-muted',
                'body' => 'gap-y-6 flex flex-col',
                'providers' => 'space-y-3',
                'checkbox' => '',
                'select' => 'w-full',
                'password' => 'w-full',
                'otp' => 'w-full',
                'input' => 'w-full',
                'separator' => '',
                'form' => 'space-y-5',
                'footer' => 'text-sm text-center text-muted mt-2',
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
