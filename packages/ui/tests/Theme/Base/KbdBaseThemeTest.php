<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\KbdBaseTheme;

final class KbdBaseThemeTest extends TestCase
{    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "h-5 min-w-[20px] text-[11px] ring ring-inset ring-primary/50 text-primary",
            KbdBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "h-5 min-w-[20px] text-[11px] ring ring-inset ring-secondary/50 text-secondary",
            KbdBaseTheme::make(props: ['color' => 'secondary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "h-5 min-w-[20px] text-[11px] ring ring-inset ring-accented text-default bg-default",
            KbdBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "h-5 min-w-[20px] text-[11px] text-inverted bg-inverted",
            KbdBaseTheme::make(props: ['variant' => 'solid'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "h-5 min-w-[20px] text-[11px] ring ring-inset ring-accented text-default bg-default",
            KbdBaseTheme::make(props: ['variant' => 'outline'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "h-5 min-w-[20px] text-[11px] text-default bg-elevated",
            KbdBaseTheme::make(props: ['variant' => 'soft'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "h-5 min-w-[20px] text-[11px] ring ring-inset ring-accented text-default bg-elevated",
            KbdBaseTheme::make(props: ['variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "h-4 min-w-[16px] text-[10px] ring ring-inset ring-accented text-default bg-default",
            KbdBaseTheme::make(props: ['size' => 'sm'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "h-5 min-w-[20px] text-[11px] ring ring-inset ring-accented text-default bg-default",
            KbdBaseTheme::make(props: ['size' => 'md'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "h-6 min-w-[24px] text-[12px] ring ring-inset ring-accented text-default bg-default",
            KbdBaseTheme::make(props: ['size' => 'lg'], slot: 'base'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'h-5 min-w-[20px] text-[11px] text-inverted bg-primary',
            KbdBaseTheme::make(props: ['color' => 'primary', 'variant' => 'solid'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'h-5 min-w-[20px] text-[11px] ring ring-inset ring-primary/50 text-primary',
            KbdBaseTheme::make(props: ['color' => 'primary', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'h-5 min-w-[20px] text-[11px] text-primary bg-primary/10',
            KbdBaseTheme::make(props: ['color' => 'primary', 'variant' => 'soft'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'h-5 min-w-[20px] text-[11px] text-primary ring ring-inset ring-primary/25 bg-primary/10',
            KbdBaseTheme::make(props: ['color' => 'primary', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'h-5 min-w-[20px] text-[11px] text-inverted bg-inverted',
            KbdBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'solid'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'h-5 min-w-[20px] text-[11px] ring ring-inset ring-accented text-default bg-default',
            KbdBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'h-5 min-w-[20px] text-[11px] text-default bg-elevated',
            KbdBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'soft'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'h-5 min-w-[20px] text-[11px] ring ring-inset ring-accented text-default bg-elevated',
            KbdBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'subtle'], slot: 'base'),
        );
    }

}
