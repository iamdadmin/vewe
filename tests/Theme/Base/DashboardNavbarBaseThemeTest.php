<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\DashboardNavbarBaseTheme;

final class DashboardNavbarBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "h-(--vewe-header-height) shrink-0 flex items-center justify-between border-b border-default px-4 sm:px-6 gap-1.5",
            DashboardNavbarBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1.5 min-w-0",
            DashboardNavbarBaseTheme::make(slot: 'left'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 self-center me-1.5",
            DashboardNavbarBaseTheme::make(slot: 'icon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1.5 font-semibold text-highlighted truncate",
            DashboardNavbarBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:flex",
            DashboardNavbarBaseTheme::make(slot: 'center'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center shrink-0 gap-1.5",
            DashboardNavbarBaseTheme::make(slot: 'right'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            DashboardNavbarBaseTheme::make(slot: 'toggle'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            DashboardNavbarBaseTheme::make(props: ['toggleSide' => 'left'], slot: 'toggle'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            DashboardNavbarBaseTheme::make(props: ['toggleSide' => 'right'], slot: 'toggle'),
        );
    }

}
