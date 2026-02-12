<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PageFeatureBaseTheme;

final class PageFeatureBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative rounded-sm",
            PageFeatureBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageFeatureBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center justify-center",
            PageFeatureBaseTheme::make(slot: 'leading'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-5 shrink-0 text-primary",
            PageFeatureBaseTheme::make(slot: 'leadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-base text-pretty font-semibold text-highlighted",
            PageFeatureBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-[15px] text-pretty text-muted",
            PageFeatureBaseTheme::make(slot: 'description'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative rounded-sm flex items-start gap-2.5",
            PageFeatureBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center justify-center p-0.5",
            PageFeatureBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'leading'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center justify-center mb-2.5",
            PageFeatureBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'leading'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative rounded-sm has-focus-visible:ring-2 has-focus-visible:ring-primary transition",
            PageFeatureBaseTheme::make(props: ['to' => 'true'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-[15px] text-pretty text-muted mt-1",
            PageFeatureBaseTheme::make(props: ['title' => 'true'], slot: 'description'),
        );
    }

}
