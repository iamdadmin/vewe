<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\ChipBaseTheme;

final class ChipBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative inline-flex items-center justify-center shrink-0",
            ChipBaseTheme::make(slot: 'root'),
        );

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap h-[8px] min-w-[8px] text-[8px] top-0 right-0",
            ChipBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap h-[8px] min-w-[8px] text-[8px] top-0 right-0",
            ChipBaseTheme::make(slot: 'base'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap bg-color h-[8px] min-w-[8px] text-[8px] top-0 right-0",
            ChipBaseTheme::make(props: ['color' => 'color'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap bg-inverted h-[8px] min-w-[8px] text-[8px] top-0 right-0",
            ChipBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap h-[4px] min-w-[4px] text-[4px] top-0 right-0",
            ChipBaseTheme::make(props: ['size' => '3xs'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap h-[5px] min-w-[5px] text-[5px] top-0 right-0",
            ChipBaseTheme::make(props: ['size' => '2xs'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap h-[6px] min-w-[6px] text-[6px] top-0 right-0",
            ChipBaseTheme::make(props: ['size' => 'xs'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap h-[7px] min-w-[7px] text-[7px] top-0 right-0",
            ChipBaseTheme::make(props: ['size' => 'sm'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap h-[8px] min-w-[8px] text-[8px] top-0 right-0",
            ChipBaseTheme::make(props: ['size' => 'md'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap h-[9px] min-w-[9px] text-[9px] top-0 right-0",
            ChipBaseTheme::make(props: ['size' => 'lg'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap h-[10px] min-w-[10px] text-[10px] top-0 right-0",
            ChipBaseTheme::make(props: ['size' => 'xl'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap h-[11px] min-w-[11px] text-[11px] top-0 right-0",
            ChipBaseTheme::make(props: ['size' => '2xl'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap h-[12px] min-w-[12px] text-[12px] top-0 right-0",
            ChipBaseTheme::make(props: ['size' => '3xl'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap top-0 right-0 h-[8px] min-w-[8px] text-[8px]",
            ChipBaseTheme::make(props: ['position' => 'top-right'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap bottom-0 right-0 h-[8px] min-w-[8px] text-[8px]",
            ChipBaseTheme::make(props: ['position' => 'bottom-right'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap top-0 left-0 h-[8px] min-w-[8px] text-[8px]",
            ChipBaseTheme::make(props: ['position' => 'top-left'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap bottom-0 left-0 h-[8px] min-w-[8px] text-[8px]",
            ChipBaseTheme::make(props: ['position' => 'bottom-left'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap h-[8px] min-w-[8px] text-[8px] top-0 right-0",
            ChipBaseTheme::make(props: ['inset' => 'false'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap absolute h-[8px] min-w-[8px] text-[8px] top-0 right-0",
            ChipBaseTheme::make(props: ['standalone' => 'false'], slot: 'base'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap top-0 right-0 h-[8px] min-w-[8px] text-[8px] -translate-y-1/2 translate-x-1/2 transform',
            ChipBaseTheme::make(props: ['position' => 'top-right', 'inset' => false], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap bottom-0 right-0 h-[8px] min-w-[8px] text-[8px] translate-y-1/2 translate-x-1/2 transform',
            ChipBaseTheme::make(props: ['position' => 'bottom-right', 'inset' => false], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap top-0 left-0 h-[8px] min-w-[8px] text-[8px] -translate-y-1/2 -translate-x-1/2 transform',
            ChipBaseTheme::make(props: ['position' => 'top-left', 'inset' => false], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-full ring ring-bg flex items-center justify-center text-inverted font-medium whitespace-nowrap bottom-0 left-0 h-[8px] min-w-[8px] text-[8px] translate-y-1/2 -translate-x-1/2 transform',
            ChipBaseTheme::make(props: ['position' => 'bottom-left', 'inset' => false], slot: 'base'),
        );
    }

}
