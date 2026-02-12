<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\ToastBaseTheme;

final class ToastBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative group overflow-hidden bg-default shadow-lg rounded-lg ring ring-default p-4 flex gap-2.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            ToastBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-0 flex-1 flex flex-col",
            ToastBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-sm font-medium text-highlighted",
            ToastBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-sm text-muted",
            ToastBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-primary",
            ToastBaseTheme::make(slot: 'icon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0",
            ToastBaseTheme::make(slot: 'avatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "2xl",
            ToastBaseTheme::make(slot: 'avatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-1.5 shrink-0",
            ToastBaseTheme::make(slot: 'actions'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-x-0 bottom-0",
            ToastBaseTheme::make(slot: 'progress'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-0",
            ToastBaseTheme::make(slot: 'close'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group overflow-hidden bg-default shadow-lg rounded-lg ring ring-default p-4 flex gap-2.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            ToastBaseTheme::make(props: ['color' => 'primary'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group overflow-hidden bg-default shadow-lg rounded-lg ring ring-default p-4 flex gap-2.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-secondary",
            ToastBaseTheme::make(props: ['color' => 'secondary'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-primary",
            ToastBaseTheme::make(props: ['color' => 'primary'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-secondary",
            ToastBaseTheme::make(props: ['color' => 'secondary'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group overflow-hidden bg-default shadow-lg rounded-lg ring ring-default p-4 flex gap-2.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted",
            ToastBaseTheme::make(props: ['color' => 'neutral'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-highlighted",
            ToastBaseTheme::make(props: ['color' => 'neutral'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group overflow-hidden bg-default shadow-lg rounded-lg ring ring-default p-4 flex gap-2.5 focus:outline-none items-center focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            ToastBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-1.5 shrink-0 items-center",
            ToastBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'actions'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group overflow-hidden bg-default shadow-lg rounded-lg ring ring-default p-4 flex gap-2.5 focus:outline-none items-start focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            ToastBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-1.5 shrink-0 items-start mt-2.5",
            ToastBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'actions'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-sm text-muted mt-1",
            ToastBaseTheme::make(props: ['title' => 'true'], slot: 'description'),
        );
    }

}
