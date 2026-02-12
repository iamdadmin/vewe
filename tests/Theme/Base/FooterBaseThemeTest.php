<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\FooterBaseTheme;

final class FooterBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            FooterBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "py-8 lg:py-12",
            FooterBaseTheme::make(slot: 'top'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "py-8 lg:py-12",
            FooterBaseTheme::make(slot: 'bottom'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "py-8 lg:py-4 lg:flex lg:items-center lg:justify-between lg:gap-x-3",
            FooterBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-center lg:justify-start lg:flex-1 gap-x-1.5 mt-3 lg:mt-0 lg:order-1",
            FooterBaseTheme::make(slot: 'left'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-3 lg:mt-0 lg:order-2 flex items-center justify-center",
            FooterBaseTheme::make(slot: 'center'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "lg:flex-1 flex items-center justify-center lg:justify-end gap-x-1.5 lg:order-3",
            FooterBaseTheme::make(slot: 'right'),
        );
    }

}
