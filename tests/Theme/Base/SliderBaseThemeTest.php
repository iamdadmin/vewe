<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\SliderBaseTheme;

final class SliderBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-center select-none touch-none",
            SliderBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative bg-accented overflow-hidden rounded-full grow",
            SliderBaseTheme::make(slot: 'track'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full bg-primary",
            SliderBaseTheme::make(slot: 'range'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full bg-default ring-2 focus-visible:outline-2 focus-visible:outline-offset-2 size-4 ring-primary focus-visible:outline-primary/50",
            SliderBaseTheme::make(slot: 'thumb'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full bg-primary",
            SliderBaseTheme::make(props: ['color' => 'primary'], slot: 'range'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full bg-secondary",
            SliderBaseTheme::make(props: ['color' => 'secondary'], slot: 'range'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full bg-default ring-2 focus-visible:outline-2 focus-visible:outline-offset-2 ring-primary focus-visible:outline-primary/50 size-4",
            SliderBaseTheme::make(props: ['color' => 'primary'], slot: 'thumb'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full bg-default ring-2 focus-visible:outline-2 focus-visible:outline-offset-2 ring-secondary focus-visible:outline-secondary/50 size-4",
            SliderBaseTheme::make(props: ['color' => 'secondary'], slot: 'thumb'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full bg-inverted",
            SliderBaseTheme::make(props: ['color' => 'neutral'], slot: 'range'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full bg-default ring-2 focus-visible:outline-2 focus-visible:outline-offset-2 ring-inverted focus-visible:outline-inverted/50 size-4",
            SliderBaseTheme::make(props: ['color' => 'neutral'], slot: 'thumb'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full bg-default ring-2 focus-visible:outline-2 focus-visible:outline-offset-2 size-3 ring-primary focus-visible:outline-primary/50",
            SliderBaseTheme::make(props: ['size' => 'xs'], slot: 'thumb'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full bg-default ring-2 focus-visible:outline-2 focus-visible:outline-offset-2 size-3.5 ring-primary focus-visible:outline-primary/50",
            SliderBaseTheme::make(props: ['size' => 'sm'], slot: 'thumb'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full bg-default ring-2 focus-visible:outline-2 focus-visible:outline-offset-2 size-4 ring-primary focus-visible:outline-primary/50",
            SliderBaseTheme::make(props: ['size' => 'md'], slot: 'thumb'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full bg-default ring-2 focus-visible:outline-2 focus-visible:outline-offset-2 size-4.5 ring-primary focus-visible:outline-primary/50",
            SliderBaseTheme::make(props: ['size' => 'lg'], slot: 'thumb'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full bg-default ring-2 focus-visible:outline-2 focus-visible:outline-offset-2 size-5 ring-primary focus-visible:outline-primary/50",
            SliderBaseTheme::make(props: ['size' => 'xl'], slot: 'thumb'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-center select-none touch-none w-full",
            SliderBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full h-full bg-primary",
            SliderBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'range'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-center select-none touch-none flex-col h-full",
            SliderBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full w-full bg-primary",
            SliderBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'range'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-center select-none touch-none opacity-75 cursor-not-allowed",
            SliderBaseTheme::make(props: ['disabled' => 'true'], slot: 'root'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative bg-accented overflow-hidden rounded-full grow h-[6px]',
            SliderBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'xs'], slot: 'track'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative bg-accented overflow-hidden rounded-full grow h-[7px]',
            SliderBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'sm'], slot: 'track'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative bg-accented overflow-hidden rounded-full grow h-[8px]',
            SliderBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'md'], slot: 'track'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative bg-accented overflow-hidden rounded-full grow h-[9px]',
            SliderBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'lg'], slot: 'track'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative bg-accented overflow-hidden rounded-full grow h-[10px]',
            SliderBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'xl'], slot: 'track'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative bg-accented overflow-hidden rounded-full grow w-[6px]',
            SliderBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'xs'], slot: 'track'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative bg-accented overflow-hidden rounded-full grow w-[7px]',
            SliderBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'sm'], slot: 'track'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative bg-accented overflow-hidden rounded-full grow w-[8px]',
            SliderBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'md'], slot: 'track'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative bg-accented overflow-hidden rounded-full grow w-[9px]',
            SliderBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'lg'], slot: 'track'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative bg-accented overflow-hidden rounded-full grow w-[10px]',
            SliderBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'xl'], slot: 'track'),
        );
    }

}
