<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\DashboardSearchButtonBaseTheme;

final class DashboardSearchButtonBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "",
            DashboardSearchButtonBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            DashboardSearchButtonBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            DashboardSearchButtonBaseTheme::make(slot: 'label'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:flex items-center gap-0.5 ms-auto",
            DashboardSearchButtonBaseTheme::make(slot: 'trailing'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "hidden",
            DashboardSearchButtonBaseTheme::make(props: ['collapsed' => 'true'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:flex items-center gap-0.5 ms-auto lg:hidden",
            DashboardSearchButtonBaseTheme::make(props: ['collapsed' => 'true'], slot: 'trailing'),
        );
    }

}
