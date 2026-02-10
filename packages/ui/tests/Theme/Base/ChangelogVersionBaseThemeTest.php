<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\ChangelogVersionBaseTheme;

final class ChangelogVersionBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative",
            ChangelogVersionBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col mx-auto max-w-2xl",
            ChangelogVersionBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            ChangelogVersionBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-3 mb-2",
            ChangelogVersionBaseTheme::make(slot: 'meta'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-sm/6 text-toned truncate",
            ChangelogVersionBaseTheme::make(slot: 'date'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            ChangelogVersionBaseTheme::make(slot: 'badge'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative text-xl text-pretty font-semibold text-highlighted",
            ChangelogVersionBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-base text-pretty text-muted mt-1",
            ChangelogVersionBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden rounded-lg aspect-[16/9] mt-5 group/changelog-version-image",
            ChangelogVersionBaseTheme::make(slot: 'imageWrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "object-cover object-top w-full h-full",
            ChangelogVersionBaseTheme::make(slot: 'image'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-wrap gap-x-4 gap-y-1.5",
            ChangelogVersionBaseTheme::make(slot: 'authors'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "border-t border-default pt-5 flex items-center justify-between",
            ChangelogVersionBaseTheme::make(slot: 'footer'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute start-0 top-0 w-32 hidden lg:flex items-center justify-end gap-3 min-w-0",
            ChangelogVersionBaseTheme::make(slot: 'indicator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-4 rounded-full bg-default ring ring-default flex items-center justify-center my-1",
            ChangelogVersionBaseTheme::make(slot: 'dot'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-2 rounded-full bg-primary",
            ChangelogVersionBaseTheme::make(slot: 'dotInner'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-t border-default pt-5 flex items-center justify-between mt-5",
            ChangelogVersionBaseTheme::make(props: ['body' => 'false'], slot: 'footer'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-3 mb-2 lg:hidden",
            ChangelogVersionBaseTheme::make(props: ['badge' => 'false'], slot: 'meta'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-xl text-pretty font-semibold text-highlighted has-focus-visible:ring-2 has-focus-visible:ring-primary rounded-xs transition",
            ChangelogVersionBaseTheme::make(props: ['to' => 'true'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "object-cover object-top w-full h-full transform transition-transform duration-200 group-hover/changelog-version-image:scale-105 group-has-focus-visible/changelog-version-image:scale-105",
            ChangelogVersionBaseTheme::make(props: ['to' => 'true'], slot: 'image'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-sm/6 text-toned truncate lg:hidden",
            ChangelogVersionBaseTheme::make(props: ['hidden' => 'true'], slot: 'date'),
        );
    }

}
