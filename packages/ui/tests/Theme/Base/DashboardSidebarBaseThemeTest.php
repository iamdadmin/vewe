<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\DashboardSidebarBaseTheme;

final class DashboardSidebarBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative hidden lg:flex flex-col min-h-svh min-w-16 w-(--width) shrink-0",
            DashboardSidebarBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "h-(--vewe-header-height) shrink-0 flex items-center gap-1.5 px-4",
            DashboardSidebarBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col gap-4 flex-1 overflow-y-auto px-4 py-2",
            DashboardSidebarBaseTheme::make(slot: 'body'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 flex items-center gap-1.5 px-4 py-2",
            DashboardSidebarBaseTheme::make(slot: 'footer'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            DashboardSidebarBaseTheme::make(slot: 'toggle'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            DashboardSidebarBaseTheme::make(slot: 'handle'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "lg:hidden",
            DashboardSidebarBaseTheme::make(slot: 'content'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "lg:hidden",
            DashboardSidebarBaseTheme::make(slot: 'overlay'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "h-(--vewe-header-height) shrink-0 flex items-center gap-1.5 px-4 sm:px-6",
            DashboardSidebarBaseTheme::make(props: ['menu' => 'true'], slot: 'header'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col gap-4 flex-1 overflow-y-auto px-4 py-2 sm:px-6",
            DashboardSidebarBaseTheme::make(props: ['menu' => 'true'], slot: 'body'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 flex items-center gap-1.5 px-4 py-2 sm:px-6",
            DashboardSidebarBaseTheme::make(props: ['menu' => 'true'], slot: 'footer'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative hidden lg:flex flex-col min-h-svh min-w-16 w-(--width) shrink-0 border-e border-default",
            DashboardSidebarBaseTheme::make(props: ['side' => 'left'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative hidden lg:flex flex-col min-h-svh min-w-16 w-(--width) shrink-0",
            DashboardSidebarBaseTheme::make(props: ['side' => 'right'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            DashboardSidebarBaseTheme::make(props: ['toggleSide' => 'left'], slot: 'toggle'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "ms-auto",
            DashboardSidebarBaseTheme::make(props: ['toggleSide' => 'right'], slot: 'toggle'),
        );
    }

}
