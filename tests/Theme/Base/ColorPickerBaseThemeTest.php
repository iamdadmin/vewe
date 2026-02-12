<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\ColorPickerBaseTheme;

final class ColorPickerBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "data-[disabled]:opacity-75",
            ColorPickerBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-4",
            ColorPickerBaseTheme::make(slot: 'picker'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md touch-none w-42 h-42",
            ColorPickerBaseTheme::make(slot: 'selector'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full h-full relative rounded-md",
            ColorPickerBaseTheme::make(slot: 'selectorBackground'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "-translate-y-1/2 -translate-x-1/2 absolute size-4 ring-2 ring-white rounded-full cursor-pointer data-[disabled]:cursor-not-allowed",
            ColorPickerBaseTheme::make(slot: 'selectorThumb'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-[8px] relative rounded-md touch-none h-42",
            ColorPickerBaseTheme::make(slot: 'track'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute transform -translate-y-1/2 -translate-x-[4px] rtl:translate-x-[4px] size-4 rounded-full ring-2 ring-white cursor-pointer data-[disabled]:cursor-not-allowed",
            ColorPickerBaseTheme::make(slot: 'trackThumb'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md touch-none w-38 h-38",
            ColorPickerBaseTheme::make(props: ['size' => 'xs'], slot: 'selector'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-[8px] relative rounded-md touch-none h-38",
            ColorPickerBaseTheme::make(props: ['size' => 'xs'], slot: 'track'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md touch-none w-40 h-40",
            ColorPickerBaseTheme::make(props: ['size' => 'sm'], slot: 'selector'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-[8px] relative rounded-md touch-none h-40",
            ColorPickerBaseTheme::make(props: ['size' => 'sm'], slot: 'track'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md touch-none w-42 h-42",
            ColorPickerBaseTheme::make(props: ['size' => 'md'], slot: 'selector'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-[8px] relative rounded-md touch-none h-42",
            ColorPickerBaseTheme::make(props: ['size' => 'md'], slot: 'track'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md touch-none w-44 h-44",
            ColorPickerBaseTheme::make(props: ['size' => 'lg'], slot: 'selector'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-[8px] relative rounded-md touch-none h-44",
            ColorPickerBaseTheme::make(props: ['size' => 'lg'], slot: 'track'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md touch-none w-46 h-46",
            ColorPickerBaseTheme::make(props: ['size' => 'xl'], slot: 'selector'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-[8px] relative rounded-md touch-none h-46",
            ColorPickerBaseTheme::make(props: ['size' => 'xl'], slot: 'track'),
        );
    }

}
