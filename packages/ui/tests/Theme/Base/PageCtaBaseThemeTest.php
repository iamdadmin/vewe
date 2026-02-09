<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PageCtaBaseTheme;

final class PageCtaBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative isolate rounded-xl overflow-hidden bg-default ring ring-default",
            PageCtaBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col lg:grid px-6 py-12 sm:px-12 sm:py-24 lg:px-16 lg:py-24 gap-8 sm:gap-16",
            PageCtaBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageCtaBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageCtaBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-3xl sm:text-4xl text-pretty tracking-tight font-bold text-highlighted",
            PageCtaBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-base sm:text-lg text-muted",
            PageCtaBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-8",
            PageCtaBaseTheme::make(slot: 'body'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-8",
            PageCtaBaseTheme::make(slot: 'footer'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-wrap gap-x-6 gap-y-3",
            PageCtaBaseTheme::make(slot: 'links'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col lg:grid px-6 py-12 sm:px-12 sm:py-24 lg:px-16 lg:py-24 gap-8 sm:gap-16 lg:grid-cols-2 lg:items-center",
            PageCtaBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-base sm:text-lg text-muted text-pretty",
            PageCtaBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col lg:grid px-6 py-12 sm:px-12 sm:py-24 lg:px-16 lg:py-24 gap-8 sm:gap-16",
            PageCtaBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-3xl sm:text-4xl text-pretty tracking-tight font-bold text-highlighted text-center",
            PageCtaBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-base sm:text-lg text-muted text-center text-balance",
            PageCtaBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-wrap gap-x-6 gap-y-3 justify-center",
            PageCtaBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'links'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "order-last",
            PageCtaBaseTheme::make(props: ['reverse' => 'true'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative isolate rounded-xl overflow-hidden bg-inverted text-inverted",
            PageCtaBaseTheme::make(props: ['variant' => 'solid'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-3xl sm:text-4xl text-pretty tracking-tight font-bold text-highlighted text-inverted",
            PageCtaBaseTheme::make(props: ['variant' => 'solid'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-base sm:text-lg text-muted text-dimmed",
            PageCtaBaseTheme::make(props: ['variant' => 'solid'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative isolate rounded-xl overflow-hidden bg-default ring ring-default",
            PageCtaBaseTheme::make(props: ['variant' => 'outline'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-base sm:text-lg text-muted",
            PageCtaBaseTheme::make(props: ['variant' => 'outline'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative isolate rounded-xl overflow-hidden bg-elevated/50",
            PageCtaBaseTheme::make(props: ['variant' => 'soft'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-base sm:text-lg text-muted text-toned",
            PageCtaBaseTheme::make(props: ['variant' => 'soft'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative isolate rounded-xl overflow-hidden bg-elevated/50 ring ring-default",
            PageCtaBaseTheme::make(props: ['variant' => 'subtle'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-base sm:text-lg text-muted text-toned",
            PageCtaBaseTheme::make(props: ['variant' => 'subtle'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-base sm:text-lg text-muted",
            PageCtaBaseTheme::make(props: ['variant' => 'naked'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-base sm:text-lg text-muted mt-6",
            PageCtaBaseTheme::make(props: ['title' => 'true'], slot: 'description'),
        );
    }

}
