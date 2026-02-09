<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\DashboardSearchBaseTheme;

final class DashboardSearchBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            DashboardSearchBaseTheme::make(slot: 'modal'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "[&>input]:text-base/5",
            DashboardSearchBaseTheme::make(slot: 'input'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "sm:max-w-3xl h-full sm:h-[28rem]",
            DashboardSearchBaseTheme::make(props: ['fullscreen' => 'false'], slot: 'modal'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "[&>input]:text-sm",
            DashboardSearchBaseTheme::make(props: ['size' => 'xs'], slot: 'input'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "[&>input]:text-sm",
            DashboardSearchBaseTheme::make(props: ['size' => 'sm'], slot: 'input'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "[&>input]:text-base/5",
            DashboardSearchBaseTheme::make(props: ['size' => 'md'], slot: 'input'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "[&>input]:text-base/5",
            DashboardSearchBaseTheme::make(props: ['size' => 'lg'], slot: 'input'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "[&>input]:text-lg",
            DashboardSearchBaseTheme::make(props: ['size' => 'xl'], slot: 'input'),
        );
    }

}
