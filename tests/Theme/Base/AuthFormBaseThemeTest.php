<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\AuthFormBaseTheme;

final class AuthFormBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full space-y-6",
            AuthFormBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col text-center",
            AuthFormBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mb-2",
            AuthFormBaseTheme::make(slot: 'leading'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-8 shrink-0 inline-block",
            AuthFormBaseTheme::make(slot: 'leadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-xl text-pretty font-semibold text-highlighted",
            AuthFormBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-1 text-base text-pretty text-muted",
            AuthFormBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "gap-y-6 flex flex-col",
            AuthFormBaseTheme::make(slot: 'body'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "space-y-3",
            AuthFormBaseTheme::make(slot: 'providers'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            AuthFormBaseTheme::make(slot: 'checkbox'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full",
            AuthFormBaseTheme::make(slot: 'select'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full",
            AuthFormBaseTheme::make(slot: 'password'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full",
            AuthFormBaseTheme::make(slot: 'otp'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full",
            AuthFormBaseTheme::make(slot: 'input'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            AuthFormBaseTheme::make(slot: 'separator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "space-y-5",
            AuthFormBaseTheme::make(slot: 'form'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-sm text-center text-muted mt-2",
            AuthFormBaseTheme::make(slot: 'footer'),
        );
    }

}
