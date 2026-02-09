<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\CarouselBaseTheme;

final class CarouselBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative focus:outline-none",
            CarouselBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "overflow-hidden",
            CarouselBaseTheme::make(slot: 'viewport'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-start",
            CarouselBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "min-w-0 shrink-0 basis-full",
            CarouselBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            CarouselBaseTheme::make(slot: 'controls'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            CarouselBaseTheme::make(slot: 'arrows'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full",
            CarouselBaseTheme::make(slot: 'prev'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full",
            CarouselBaseTheme::make(slot: 'next'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-x-0 -bottom-7 flex flex-wrap items-center justify-center gap-3",
            CarouselBaseTheme::make(slot: 'dots'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "cursor-pointer size-3 bg-accented rounded-full focus:outline-none focus-visible:ring-2 focus-visible:ring-primary transition",
            CarouselBaseTheme::make(slot: 'dot'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-start flex-col -mt-4",
            CarouselBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "min-w-0 shrink-0 basis-full pt-4",
            CarouselBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full top-4 sm:-top-12 left-1/2 -translate-x-1/2 rotate-90 rtl:-rotate-90",
            CarouselBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'prev'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full bottom-4 sm:-bottom-12 left-1/2 -translate-x-1/2 rotate-90 rtl:-rotate-90",
            CarouselBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'next'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-start flex-row -ms-4",
            CarouselBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "min-w-0 shrink-0 basis-full ps-4",
            CarouselBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full start-4 sm:-start-12 top-1/2 -translate-y-1/2",
            CarouselBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'prev'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full end-4 sm:-end-12 top-1/2 -translate-y-1/2",
            CarouselBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'next'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "cursor-pointer size-3 bg-accented rounded-full focus:outline-none focus-visible:ring-2 focus-visible:ring-primary transition data-[state=active]:bg-inverted",
            CarouselBaseTheme::make(props: ['active' => 'true'], slot: 'dot'),
        );
    }

}
