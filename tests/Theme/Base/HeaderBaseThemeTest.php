<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\HeaderBaseTheme;

final class HeaderBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "bg-default/75 backdrop-blur border-b border-default h-(--vewe-header-height) sticky top-0 z-50",
            HeaderBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-between gap-3 h-full",
            HeaderBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "lg:flex-1 flex items-center gap-1.5",
            HeaderBaseTheme::make(slot: 'left'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:flex",
            HeaderBaseTheme::make(slot: 'center'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-end lg:flex-1 gap-1.5",
            HeaderBaseTheme::make(slot: 'right'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 font-bold text-xl text-highlighted flex items-end gap-1.5",
            HeaderBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "lg:hidden",
            HeaderBaseTheme::make(slot: 'toggle'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "lg:hidden",
            HeaderBaseTheme::make(slot: 'content'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "lg:hidden",
            HeaderBaseTheme::make(slot: 'overlay'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "px-4 sm:px-6 h-(--vewe-header-height) shrink-0 flex items-center justify-between gap-3",
            HeaderBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-4 sm:p-6 overflow-y-auto",
            HeaderBaseTheme::make(slot: 'body'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "lg:hidden -ms-1.5",
            HeaderBaseTheme::make(props: ['toggleSide' => 'left'], slot: 'toggle'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "lg:hidden -me-1.5",
            HeaderBaseTheme::make(props: ['toggleSide' => 'right'], slot: 'toggle'),
        );
    }

}
