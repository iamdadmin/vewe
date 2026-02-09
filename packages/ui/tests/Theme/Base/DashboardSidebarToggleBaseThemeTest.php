<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\DashboardSidebarToggleBaseTheme;

final class DashboardSidebarToggleBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "lg:hidden",
            DashboardSidebarToggleBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "lg:hidden",
            DashboardSidebarToggleBaseTheme::make(slot: 'base'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "lg:hidden",
            DashboardSidebarToggleBaseTheme::make(props: ['side' => 'left'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "lg:hidden",
            DashboardSidebarToggleBaseTheme::make(props: ['side' => 'right'], slot: 'base'),
        );
    }

}
