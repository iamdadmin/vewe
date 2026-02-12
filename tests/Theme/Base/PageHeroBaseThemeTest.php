<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PageHeroBaseTheme;

final class PageHeroBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative isolate",
            PageHeroBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col lg:grid py-24 sm:py-32 lg:py-40 gap-16 sm:gap-y-24",
            PageHeroBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageHeroBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageHeroBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mb-4",
            PageHeroBaseTheme::make(slot: 'headline'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-5xl sm:text-7xl text-pretty tracking-tight font-bold text-highlighted",
            PageHeroBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-lg sm:text-xl/8 text-muted",
            PageHeroBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-10",
            PageHeroBaseTheme::make(slot: 'body'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-10",
            PageHeroBaseTheme::make(slot: 'footer'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-wrap gap-x-6 gap-y-3",
            PageHeroBaseTheme::make(slot: 'links'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col lg:grid py-24 sm:py-32 lg:py-40 gap-16 sm:gap-y-24 lg:grid-cols-2 lg:items-center",
            PageHeroBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-lg sm:text-xl/8 text-muted text-pretty",
            PageHeroBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col lg:grid py-24 sm:py-32 lg:py-40 gap-16 sm:gap-y-24",
            PageHeroBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-4 justify-center",
            PageHeroBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'headline'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center",
            PageHeroBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-lg sm:text-xl/8 text-muted text-balance",
            PageHeroBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-wrap gap-x-6 gap-y-3 justify-center",
            PageHeroBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'links'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "order-last",
            PageHeroBaseTheme::make(props: ['reverse' => 'true'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-4 font-semibold text-primary flex items-center gap-1.5",
            PageHeroBaseTheme::make(props: ['headline' => 'true'], slot: 'headline'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-lg sm:text-xl/8 text-muted mt-6",
            PageHeroBaseTheme::make(props: ['title' => 'true'], slot: 'description'),
        );
    }

}
