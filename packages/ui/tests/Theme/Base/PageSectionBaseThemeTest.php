<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PageSectionBaseTheme;

final class PageSectionBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative isolate",
            PageSectionBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col lg:grid py-16 sm:py-24 lg:py-32 gap-8 sm:gap-16",
            PageSectionBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageSectionBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageSectionBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center mb-6",
            PageSectionBaseTheme::make(slot: 'leading'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-10 shrink-0 text-primary",
            PageSectionBaseTheme::make(slot: 'leadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mb-3",
            PageSectionBaseTheme::make(slot: 'headline'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-3xl sm:text-4xl lg:text-5xl text-pretty tracking-tight font-bold text-highlighted",
            PageSectionBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-base sm:text-lg text-muted",
            PageSectionBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-8",
            PageSectionBaseTheme::make(slot: 'body'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "grid",
            PageSectionBaseTheme::make(slot: 'features'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-8",
            PageSectionBaseTheme::make(slot: 'footer'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-wrap gap-x-6 gap-y-3",
            PageSectionBaseTheme::make(slot: 'links'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col lg:grid py-16 sm:py-24 lg:py-32 gap-8 sm:gap-16 lg:grid-cols-2 lg:items-center",
            PageSectionBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-base sm:text-lg text-muted text-pretty",
            PageSectionBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "grid gap-4",
            PageSectionBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'features'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col lg:grid py-16 sm:py-24 lg:py-32 gap-8 sm:gap-16",
            PageSectionBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-3 justify-center",
            PageSectionBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'headline'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center mb-6 justify-center",
            PageSectionBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'leading'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-3xl sm:text-4xl lg:text-5xl text-pretty tracking-tight font-bold text-highlighted text-center",
            PageSectionBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-base sm:text-lg text-muted text-center text-balance",
            PageSectionBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-wrap gap-x-6 gap-y-3 justify-center",
            PageSectionBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'links'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "grid sm:grid-cols-2 lg:grid-cols-3 gap-8",
            PageSectionBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'features'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "order-last",
            PageSectionBaseTheme::make(props: ['reverse' => 'true'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-3 font-semibold text-primary flex items-center gap-1.5",
            PageSectionBaseTheme::make(props: ['headline' => 'true'], slot: 'headline'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-base sm:text-lg text-muted mt-6",
            PageSectionBaseTheme::make(props: ['title' => 'true'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageSectionBaseTheme::make(props: ['description' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageSectionBaseTheme::make(props: ['body' => 'true'], slot: 'base'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'mt-8 mt-16',
            PageSectionBaseTheme::make(props: ['orientation' => 'vertical', 'title' => true], slot: 'body'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'mt-8 mt-16',
            PageSectionBaseTheme::make(props: ['orientation' => 'vertical', 'description' => true], slot: 'body'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'mt-8 mt-16',
            PageSectionBaseTheme::make(props: ['orientation' => 'vertical', 'body' => true], slot: 'footer'),
        );
    }

}
