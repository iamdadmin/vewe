<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\AlertBaseTheme;

final class AlertBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden w-full rounded-lg p-4 flex gap-2.5 bg-primary text-inverted",
            AlertBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "min-w-0 flex-1 flex flex-col",
            AlertBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-sm font-medium",
            AlertBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-sm opacity-90",
            AlertBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            AlertBaseTheme::make(slot: 'icon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0",
            AlertBaseTheme::make(slot: 'avatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "2xl",
            AlertBaseTheme::make(slot: 'avatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-wrap gap-1.5 shrink-0",
            AlertBaseTheme::make(slot: 'actions'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-0",
            AlertBaseTheme::make(slot: 'close'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            AlertBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            AlertBaseTheme::make(props: ['color' => 'secondary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            AlertBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden w-full rounded-lg p-4 flex gap-2.5 bg-primary text-inverted",
            AlertBaseTheme::make(props: ['variant' => 'solid'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden w-full rounded-lg p-4 flex gap-2.5 text-primary ring ring-inset ring-primary/25",
            AlertBaseTheme::make(props: ['variant' => 'outline'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden w-full rounded-lg p-4 flex gap-2.5 bg-primary/10 text-primary",
            AlertBaseTheme::make(props: ['variant' => 'soft'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden w-full rounded-lg p-4 flex gap-2.5 bg-primary/10 text-primary ring ring-inset ring-primary/25",
            AlertBaseTheme::make(props: ['variant' => 'subtle'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden w-full rounded-lg p-4 flex gap-2.5 items-center bg-primary text-inverted",
            AlertBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-wrap gap-1.5 shrink-0 items-center",
            AlertBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'actions'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden w-full rounded-lg p-4 flex gap-2.5 items-start bg-primary text-inverted",
            AlertBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-wrap gap-1.5 shrink-0 items-start mt-2.5",
            AlertBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'actions'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-sm opacity-90 mt-1",
            AlertBaseTheme::make(props: ['title' => 'true'], slot: 'description'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden w-full rounded-lg p-4 flex gap-2.5 bg-primary text-inverted',
            AlertBaseTheme::make(props: ['color' => 'primary', 'variant' => 'solid'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden w-full rounded-lg p-4 flex gap-2.5 text-primary ring ring-inset ring-primary/25',
            AlertBaseTheme::make(props: ['color' => 'primary', 'variant' => 'outline'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden w-full rounded-lg p-4 flex gap-2.5 bg-primary/10 text-primary',
            AlertBaseTheme::make(props: ['color' => 'primary', 'variant' => 'soft'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden w-full rounded-lg p-4 flex gap-2.5 bg-primary/10 text-primary ring ring-inset ring-primary/25',
            AlertBaseTheme::make(props: ['color' => 'primary', 'variant' => 'subtle'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden w-full rounded-lg p-4 flex gap-2.5 text-inverted bg-inverted',
            AlertBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'solid'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden w-full rounded-lg p-4 flex gap-2.5 text-highlighted bg-default ring ring-inset ring-default',
            AlertBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'outline'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden w-full rounded-lg p-4 flex gap-2.5 text-highlighted bg-elevated/50',
            AlertBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'soft'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden w-full rounded-lg p-4 flex gap-2.5 text-highlighted bg-elevated/50 ring ring-inset ring-accented',
            AlertBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'subtle'], slot: 'root'),
        );
    }

}
