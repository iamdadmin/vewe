<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\DashboardSidebarCollapseBaseTheme;

final class DashboardSidebarCollapseBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "hidden lg:flex",
            DashboardSidebarCollapseBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:flex",
            DashboardSidebarCollapseBaseTheme::make(slot: 'base'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:flex",
            DashboardSidebarCollapseBaseTheme::make(props: ['side' => 'left'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:flex",
            DashboardSidebarCollapseBaseTheme::make(props: ['side' => 'right'], slot: 'base'),
        );
    }

}
