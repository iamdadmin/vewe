<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\BlogPostBaseTheme;

final class BlogPostBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative group/blog-post flex flex-col rounded-lg overflow-hidden bg-default ring ring-default",
            BlogPostBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden aspect-[16/9] w-full pointer-events-none",
            BlogPostBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "min-w-0 flex-1 flex flex-col",
            BlogPostBaseTheme::make(slot: 'body'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            BlogPostBaseTheme::make(slot: 'footer'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "object-cover object-top w-full h-full",
            BlogPostBaseTheme::make(slot: 'image'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-xl text-pretty font-semibold text-highlighted",
            BlogPostBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-1 text-base text-pretty text-muted",
            BlogPostBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "pt-4 mt-auto flex flex-wrap gap-x-3 gap-y-1.5",
            BlogPostBaseTheme::make(slot: 'authors'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            BlogPostBaseTheme::make(slot: 'avatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-2 mb-2",
            BlogPostBaseTheme::make(slot: 'meta'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-sm text-toned",
            BlogPostBaseTheme::make(slot: 'date'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            BlogPostBaseTheme::make(slot: 'badge'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/blog-post flex flex-col rounded-lg overflow-hidden lg:grid lg:grid-cols-2 lg:items-center gap-x-8 bg-default ring ring-default",
            BlogPostBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "min-w-0 flex-1 flex flex-col justify-center p-4 sm:p-6 lg:px-0",
            BlogPostBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'body'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/blog-post flex flex-col rounded-lg overflow-hidden bg-default ring ring-default",
            BlogPostBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "min-w-0 flex-1 flex flex-col p-4 sm:p-6",
            BlogPostBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'body'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/blog-post flex flex-col rounded-lg overflow-hidden bg-default ring ring-default",
            BlogPostBaseTheme::make(props: ['variant' => 'outline'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-sm text-toned",
            BlogPostBaseTheme::make(props: ['variant' => 'outline'], slot: 'date'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mt-1 text-base text-pretty text-muted",
            BlogPostBaseTheme::make(props: ['variant' => 'outline'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/blog-post flex flex-col rounded-lg overflow-hidden bg-elevated/50",
            BlogPostBaseTheme::make(props: ['variant' => 'soft'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-sm text-muted",
            BlogPostBaseTheme::make(props: ['variant' => 'soft'], slot: 'date'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mt-1 text-base text-pretty text-toned",
            BlogPostBaseTheme::make(props: ['variant' => 'soft'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/blog-post flex flex-col rounded-lg overflow-hidden bg-elevated/50 ring ring-default",
            BlogPostBaseTheme::make(props: ['variant' => 'subtle'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-sm text-muted",
            BlogPostBaseTheme::make(props: ['variant' => 'subtle'], slot: 'date'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mt-1 text-base text-pretty text-toned",
            BlogPostBaseTheme::make(props: ['variant' => 'subtle'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-sm text-toned",
            BlogPostBaseTheme::make(props: ['variant' => 'ghost'], slot: 'date'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mt-1 text-base text-pretty text-muted",
            BlogPostBaseTheme::make(props: ['variant' => 'ghost'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden aspect-[16/9] w-full pointer-events-none shadow-lg rounded-lg",
            BlogPostBaseTheme::make(props: ['variant' => 'ghost'], slot: 'header'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/blog-post flex flex-col rounded-lg overflow-hidden p-0 sm:p-0",
            BlogPostBaseTheme::make(props: ['variant' => 'naked'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-sm text-toned",
            BlogPostBaseTheme::make(props: ['variant' => 'naked'], slot: 'date'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mt-1 text-base text-pretty text-muted",
            BlogPostBaseTheme::make(props: ['variant' => 'naked'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden aspect-[16/9] w-full pointer-events-none shadow-lg rounded-lg",
            BlogPostBaseTheme::make(props: ['variant' => 'naked'], slot: 'header'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/blog-post flex flex-col rounded-lg overflow-hidden has-focus-visible:ring-2 has-focus-visible:ring-primary transition bg-default ring ring-default",
            BlogPostBaseTheme::make(props: ['to' => 'true'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "object-cover object-top w-full h-full transform transition-transform duration-200 group-hover/blog-post:scale-110",
            BlogPostBaseTheme::make(props: ['to' => 'true'], slot: 'image'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "transform transition-transform duration-200 hover:scale-115 focus-visible:outline-primary",
            BlogPostBaseTheme::make(props: ['to' => 'true'], slot: 'avatar'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/blog-post flex flex-col rounded-lg overflow-hidden bg-default ring ring-default",
            BlogPostBaseTheme::make(props: ['image' => 'true'], slot: 'root'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group/blog-post flex flex-col rounded-lg overflow-hidden bg-default ring ring-default hover:bg-elevated/50',
            BlogPostBaseTheme::make(props: ['variant' => 'outline', 'to' => true], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group/blog-post flex flex-col rounded-lg overflow-hidden bg-elevated/50 hover:bg-elevated',
            BlogPostBaseTheme::make(props: ['variant' => 'soft', 'to' => true], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group/blog-post flex flex-col rounded-lg overflow-hidden bg-elevated/50 ring ring-default hover:bg-elevated hover:ring-accented',
            BlogPostBaseTheme::make(props: ['variant' => 'subtle', 'to' => true], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group/blog-post flex flex-col rounded-lg overflow-hidden hover:bg-elevated/50',
            BlogPostBaseTheme::make(props: ['variant' => 'ghost', 'to' => true], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden aspect-[16/9] w-full pointer-events-none shadow-lg rounded-lg group-hover/blog-post:shadow-none transition-all',
            BlogPostBaseTheme::make(props: ['variant' => 'ghost', 'to' => true], slot: 'header'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden aspect-[16/9] w-full pointer-events-none shadow-lg rounded-lg group-hover/blog-post:shadow-none transition-all group-hover/blog-post:rounded-b-none',
            BlogPostBaseTheme::make(props: ['variant' => 'ghost', 'to' => true, 'orientation' => 'vertical'], slot: 'header'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden aspect-[16/9] w-full pointer-events-none shadow-lg rounded-lg group-hover/blog-post:shadow-none transition-all group-hover/blog-post:rounded-r-none',
            BlogPostBaseTheme::make(props: ['variant' => 'ghost', 'to' => true, 'orientation' => 'horizontal'], slot: 'header'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'min-w-0 flex-1 flex flex-col p-4 sm:p-6 p-0 sm:p-0',
            BlogPostBaseTheme::make(props: ['orientation' => 'vertical', 'image' => false, 'variant' => 'naked'], slot: 'body'),
        );
    }

}
