<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class AuthFormBaseTheme implements Theme
{
    use IsTheme;

    // @mago-expect lint:no-literal-password
    protected const array SLOTS = [
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
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
