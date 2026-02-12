<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PageAnchorsBaseTheme;

final class PageAnchorsBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageAnchorsBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageAnchorsBaseTheme::make(slot: 'list'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative",
            PageAnchorsBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group text-sm flex items-center gap-1.5 py-1 focus-visible:outline-primary",
            PageAnchorsBaseTheme::make(slot: 'link'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md p-1 inline-flex ring-inset ring",
            PageAnchorsBaseTheme::make(slot: 'linkLeading'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-4 shrink-0",
            PageAnchorsBaseTheme::make(slot: 'linkLeadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate",
            PageAnchorsBaseTheme::make(slot: 'linkLabel'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-3 absolute top-0 text-dimmed",
            PageAnchorsBaseTheme::make(slot: 'linkLabelExternalIcon'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group text-sm flex items-center gap-1.5 py-1 focus-visible:outline-primary text-primary font-semibold",
            PageAnchorsBaseTheme::make(props: ['active' => 'true'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md p-1 inline-flex ring-inset ring bg-primary ring-primary text-inverted",
            PageAnchorsBaseTheme::make(props: ['active' => 'true'], slot: 'linkLeading'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group text-sm flex items-center gap-1.5 py-1 focus-visible:outline-primary text-muted hover:text-default font-medium transition-colors",
            PageAnchorsBaseTheme::make(props: ['active' => 'false'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md p-1 inline-flex ring-inset ring bg-elevated/50 ring-accented text-dimmed group-hover:bg-primary group-hover:ring-primary group-hover:text-inverted transition",
            PageAnchorsBaseTheme::make(props: ['active' => 'false'], slot: 'linkLeading'),
        );
    }

}
