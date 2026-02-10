<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PageCardBaseTheme;

final class PageCardBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative flex rounded-lg bg-default ring ring-default",
            PageCardBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-0 rounded-[inherit] pointer-events-none bg-default/90",
            PageCardBaseTheme::make(slot: 'spotlight'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative flex flex-col flex-1 lg:grid gap-x-8 gap-y-4 p-4 sm:p-6",
            PageCardBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col flex-1 items-start",
            PageCardBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mb-4",
            PageCardBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex-1",
            PageCardBaseTheme::make(slot: 'body'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "pt-4 mt-auto",
            PageCardBaseTheme::make(slot: 'footer'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center mb-2.5",
            PageCardBaseTheme::make(slot: 'leading'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-5 shrink-0 text-primary",
            PageCardBaseTheme::make(slot: 'leadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-base text-pretty font-semibold text-highlighted",
            PageCardBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-[15px] text-pretty text-muted",
            PageCardBaseTheme::make(slot: 'description'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex flex-col flex-1 lg:grid gap-x-8 gap-y-4 p-4 sm:p-6 lg:grid-cols-2 lg:items-center",
            PageCardBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex flex-col flex-1 lg:grid gap-x-8 gap-y-4 p-4 sm:p-6",
            PageCardBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col flex-1 items-start order-last",
            PageCardBaseTheme::make(props: ['reverse' => 'true'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex rounded-lg bg-inverted text-inverted",
            PageCardBaseTheme::make(props: ['variant' => 'solid'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-base text-pretty font-semibold text-highlighted text-inverted",
            PageCardBaseTheme::make(props: ['variant' => 'solid'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-[15px] text-pretty text-dimmed",
            PageCardBaseTheme::make(props: ['variant' => 'solid'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex rounded-lg bg-default ring ring-default",
            PageCardBaseTheme::make(props: ['variant' => 'outline'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-[15px] text-pretty text-muted",
            PageCardBaseTheme::make(props: ['variant' => 'outline'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex rounded-lg bg-elevated/50",
            PageCardBaseTheme::make(props: ['variant' => 'soft'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-[15px] text-pretty text-toned",
            PageCardBaseTheme::make(props: ['variant' => 'soft'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex rounded-lg bg-elevated/50 ring ring-default",
            PageCardBaseTheme::make(props: ['variant' => 'subtle'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-[15px] text-pretty text-toned",
            PageCardBaseTheme::make(props: ['variant' => 'subtle'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-[15px] text-pretty text-muted",
            PageCardBaseTheme::make(props: ['variant' => 'ghost'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex flex-col flex-1 lg:grid gap-x-8 gap-y-4 p-4 sm:p-6 p-0 sm:p-0",
            PageCardBaseTheme::make(props: ['variant' => 'naked'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-[15px] text-pretty text-muted",
            PageCardBaseTheme::make(props: ['variant' => 'naked'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex rounded-lg has-focus-visible:ring-2 has-focus-visible:ring-primary transition bg-default ring ring-default",
            PageCardBaseTheme::make(props: ['to' => 'true'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-[15px] text-pretty mt-1 text-muted",
            PageCardBaseTheme::make(props: ['title' => 'true'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex rounded-lg ring-2 bg-default ring ring-default",
            PageCardBaseTheme::make(props: ['highlight' => 'true'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageCardBaseTheme::make(props: ['highlightColor' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageCardBaseTheme::make(props: ['highlightColor' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex rounded-lg [--spotlight-size:400px] before:absolute before:-inset-px before:pointer-events-none before:rounded-[inherit] before:bg-[radial-gradient(var(--spotlight-size)_var(--spotlight-size)_at_calc(var(--spotlight-x,0px))_calc(var(--spotlight-y,0px)),var(--spotlight-color),transparent_70%)] bg-default ring ring-default",
            PageCardBaseTheme::make(props: ['spotlight' => 'true'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageCardBaseTheme::make(props: ['spotlightColor' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageCardBaseTheme::make(props: ['spotlightColor' => 'neutral'], slot: 'base'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex rounded-lg bg-inverted text-inverted hover:bg-inverted/90',
            PageCardBaseTheme::make(props: ['variant' => 'solid', 'to' => true], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex rounded-lg bg-default ring ring-default hover:bg-elevated/50',
            PageCardBaseTheme::make(props: ['variant' => 'outline', 'to' => true], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex rounded-lg bg-elevated/50 hover:bg-elevated',
            PageCardBaseTheme::make(props: ['variant' => 'soft', 'to' => true], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex rounded-lg bg-elevated/50 ring ring-default hover:bg-elevated',
            PageCardBaseTheme::make(props: ['variant' => 'subtle', 'to' => true], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex rounded-lg bg-elevated/50 ring ring-default hover:bg-elevated hover:ring-accented',
            PageCardBaseTheme::make(props: ['variant' => 'subtle', 'to' => true, 'highlight' => false], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex rounded-lg hover:bg-elevated/50',
            PageCardBaseTheme::make(props: ['variant' => 'ghost', 'to' => true], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex rounded-lg bg-default ring ring-default ring-primary',
            PageCardBaseTheme::make(props: ['highlightColor' => 'primary', 'highlight' => true], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex rounded-lg bg-default ring ring-default ring-inverted',
            PageCardBaseTheme::make(props: ['highlightColor' => 'neutral', 'highlight' => true], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex rounded-lg bg-default ring ring-default [--spotlight-color:var(--vewe-bg-spotlightColor)]',
            PageCardBaseTheme::make(props: ['spotlightColor' => 'spotlightColor', 'spotlight' => true], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex rounded-lg bg-default ring ring-default [--spotlight-color:var(--vewe-bg-inverted)]',
            PageCardBaseTheme::make(props: ['spotlightColor' => 'neutral', 'spotlight' => true], slot: 'root'),
        );
    }

}
