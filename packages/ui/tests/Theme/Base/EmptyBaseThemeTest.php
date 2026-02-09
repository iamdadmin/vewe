<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\EmptyBaseTheme;

final class EmptyBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative flex flex-col items-center justify-center gap-4 rounded-lg p-4 sm:p-6 lg:p-8 min-w-0 bg-default ring ring-default",
            EmptyBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col items-center gap-2 max-w-sm text-center",
            EmptyBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 mb-2 size-10 text-xl",
            EmptyBaseTheme::make(slot: 'avatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted text-pretty font-medium text-base",
            EmptyBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-balance text-center text-muted text-sm",
            EmptyBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col items-center gap-4 max-w-sm",
            EmptyBaseTheme::make(slot: 'body'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-wrap justify-center gap-2 shrink-0",
            EmptyBaseTheme::make(slot: 'actions'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col items-center gap-2 max-w-sm",
            EmptyBaseTheme::make(slot: 'footer'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 mb-2 size-8 text-base",
            EmptyBaseTheme::make(props: ['size' => 'xs'], slot: 'avatar'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted text-pretty font-medium text-sm",
            EmptyBaseTheme::make(props: ['size' => 'xs'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-balance text-center text-xs text-muted",
            EmptyBaseTheme::make(props: ['size' => 'xs'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 mb-2 size-9 text-lg",
            EmptyBaseTheme::make(props: ['size' => 'sm'], slot: 'avatar'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted text-pretty font-medium text-sm",
            EmptyBaseTheme::make(props: ['size' => 'sm'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-balance text-center text-xs text-muted",
            EmptyBaseTheme::make(props: ['size' => 'sm'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 mb-2 size-10 text-xl",
            EmptyBaseTheme::make(props: ['size' => 'md'], slot: 'avatar'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted text-pretty font-medium text-base",
            EmptyBaseTheme::make(props: ['size' => 'md'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-balance text-center text-sm text-muted",
            EmptyBaseTheme::make(props: ['size' => 'md'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 mb-2 size-11 text-[22px]",
            EmptyBaseTheme::make(props: ['size' => 'lg'], slot: 'avatar'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted text-pretty font-medium text-base",
            EmptyBaseTheme::make(props: ['size' => 'lg'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-balance text-center text-sm text-muted",
            EmptyBaseTheme::make(props: ['size' => 'lg'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 mb-2 size-12 text-2xl",
            EmptyBaseTheme::make(props: ['size' => 'xl'], slot: 'avatar'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted text-pretty font-medium text-lg",
            EmptyBaseTheme::make(props: ['size' => 'xl'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-balance text-center text-base text-muted",
            EmptyBaseTheme::make(props: ['size' => 'xl'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex flex-col items-center justify-center gap-4 rounded-lg p-4 sm:p-6 lg:p-8 min-w-0 bg-inverted",
            EmptyBaseTheme::make(props: ['variant' => 'solid'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted text-pretty font-medium text-inverted text-base",
            EmptyBaseTheme::make(props: ['variant' => 'solid'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-balance text-center text-dimmed text-sm",
            EmptyBaseTheme::make(props: ['variant' => 'solid'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex flex-col items-center justify-center gap-4 rounded-lg p-4 sm:p-6 lg:p-8 min-w-0 bg-default ring ring-default",
            EmptyBaseTheme::make(props: ['variant' => 'outline'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-balance text-center text-muted text-sm",
            EmptyBaseTheme::make(props: ['variant' => 'outline'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex flex-col items-center justify-center gap-4 rounded-lg p-4 sm:p-6 lg:p-8 min-w-0 bg-elevated/50",
            EmptyBaseTheme::make(props: ['variant' => 'soft'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-balance text-center text-toned text-sm",
            EmptyBaseTheme::make(props: ['variant' => 'soft'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex flex-col items-center justify-center gap-4 rounded-lg p-4 sm:p-6 lg:p-8 min-w-0 bg-elevated/50 ring ring-default",
            EmptyBaseTheme::make(props: ['variant' => 'subtle'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-balance text-center text-toned text-sm",
            EmptyBaseTheme::make(props: ['variant' => 'subtle'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-balance text-center text-muted text-sm",
            EmptyBaseTheme::make(props: ['variant' => 'naked'], slot: 'description'),
        );
    }

}
