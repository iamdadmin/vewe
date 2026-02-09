<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\MarqueeBaseTheme;

final class MarqueeBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group relative flex items-center overflow-hidden gap-(--gap) [--gap:--spacing(16)] [--duration:20s]",
            MarqueeBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center shrink-0 justify-around gap-(--gap) min-w-max",
            MarqueeBaseTheme::make(slot: 'content'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center shrink-0 justify-around gap-(--gap) min-w-max w-full flex-row animate-[marquee_var(--duration)_linear_infinite] rtl:animate-[marquee-rtl_var(--duration)_linear_infinite] backface-hidden",
            MarqueeBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center shrink-0 justify-around gap-(--gap) min-w-max h-full flex-col animate-[marquee-vertical_var(--duration)_linear_infinite] rtl:animate-[marquee-vertical-rtl_var(--duration)_linear_infinite] h-[fit-content] backface-hidden",
            MarqueeBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center shrink-0 justify-around gap-(--gap) min-w-max group-hover:[animation-play-state:paused]",
            MarqueeBaseTheme::make(props: ['pauseOnHover' => 'true'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center shrink-0 justify-around gap-(--gap) min-w-max ![animation-direction:reverse]",
            MarqueeBaseTheme::make(props: ['reverse' => 'true'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative flex items-center overflow-hidden gap-(--gap) [--gap:--spacing(16)] [--duration:20s] before:absolute before:pointer-events-none before:content-[''] before:z-2 before:from-default before:to-transparent after:absolute after:pointer-events-none after:content-[''] after:z-2 after:from-default after:to-transparent",
            MarqueeBaseTheme::make(props: ['overlay' => 'true'], slot: 'root'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative flex items-center overflow-hidden gap-(--gap) [--gap:--spacing(16)] [--duration:20s] flex-row',
            MarqueeBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-center shrink-0 justify-around gap-(--gap) min-w-max w-full flex-row animate-[marquee_var(--duration)_linear_infinite] rtl:animate-[marquee-rtl_var(--duration)_linear_infinite] backface-hidden',
            MarqueeBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative flex items-center overflow-hidden gap-(--gap) [--gap:--spacing(16)] [--duration:20s] flex-row before:inset-y-0 before:left-0 before:h-full before:w-1/3 before:bg-gradient-to-r after:inset-y-0 after:right-0 after:h-full after:w-1/3 after:bg-gradient-to-l backface-hidden',
            MarqueeBaseTheme::make(props: ['orientation' => 'horizontal', 'overlay' => true], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative flex items-center overflow-hidden gap-(--gap) [--gap:--spacing(16)] [--duration:20s] flex-col',
            MarqueeBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-center shrink-0 justify-around gap-(--gap) min-w-max h-full flex-col animate-[marquee-vertical_var(--duration)_linear_infinite] rtl:animate-[marquee-vertical-rtl_var(--duration)_linear_infinite] h-[fit-content] backface-hidden',
            MarqueeBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative flex items-center overflow-hidden gap-(--gap) [--gap:--spacing(16)] [--duration:20s] flex-col before:inset-x-0 before:top-0 before:w-full before:h-1/3 before:bg-gradient-to-b after:inset-x-0 after:bottom-0 after:w-full after:h-1/3 after:bg-gradient-to-t backface-hidden',
            MarqueeBaseTheme::make(props: ['orientation' => 'vertical', 'overlay' => true], slot: 'root'),
        );
    }

}
