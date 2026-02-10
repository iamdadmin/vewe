<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\BannerBaseTheme;

final class BannerBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative z-50 w-full transition-colors bg-primary",
            BannerBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-between gap-3 h-12",
            BannerBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:flex-1 lg:flex lg:items-center",
            BannerBaseTheme::make(slot: 'left'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1.5 min-w-0",
            BannerBaseTheme::make(slot: 'center'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "lg:flex-1 flex items-center justify-end",
            BannerBaseTheme::make(slot: 'right'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-5 shrink-0 text-inverted pointer-events-none",
            BannerBaseTheme::make(slot: 'icon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-sm text-inverted font-medium truncate",
            BannerBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-1.5 shrink-0 isolate",
            BannerBaseTheme::make(slot: 'actions'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-inverted hover:bg-default/10 focus-visible:bg-default/10 -me-1.5 lg:me-0",
            BannerBaseTheme::make(slot: 'close'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative z-50 w-full transition-colors bg-primary",
            BannerBaseTheme::make(props: ['color' => 'primary'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative z-50 w-full transition-colors bg-secondary",
            BannerBaseTheme::make(props: ['color' => 'secondary'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative z-50 w-full transition-colors bg-inverted",
            BannerBaseTheme::make(props: ['color' => 'neutral'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative z-50 w-full transition-colors bg-primary",
            BannerBaseTheme::make(props: ['to' => 'true'], slot: 'root'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative z-50 w-full transition-colors bg-primary hover:bg-primary/90',
            BannerBaseTheme::make(props: ['color' => 'primary', 'to' => true], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative z-50 w-full transition-colors bg-inverted hover:bg-inverted/90',
            BannerBaseTheme::make(props: ['color' => 'neutral', 'to' => true], slot: 'root'),
        );
    }

}
