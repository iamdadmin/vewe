<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PageHeaderBaseTheme;

final class PageHeaderBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative border-b border-default py-8",
            PageHeaderBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageHeaderBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4",
            PageHeaderBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mb-2.5 text-sm font-semibold text-primary flex items-center gap-1.5",
            PageHeaderBaseTheme::make(slot: 'headline'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-3xl sm:text-4xl text-pretty font-bold text-highlighted",
            PageHeaderBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-lg text-pretty text-muted",
            PageHeaderBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-wrap items-center gap-1.5",
            PageHeaderBaseTheme::make(slot: 'links'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-lg text-pretty text-muted mt-4",
            PageHeaderBaseTheme::make(props: ['title' => 'true'], slot: 'description'),
        );
    }

}
