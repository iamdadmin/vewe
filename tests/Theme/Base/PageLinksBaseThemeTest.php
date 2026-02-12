<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PageLinksBaseTheme;

final class PageLinksBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col gap-3",
            PageLinksBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-sm font-semibold flex items-center gap-1.5",
            PageLinksBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col gap-2",
            PageLinksBaseTheme::make(slot: 'list'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative",
            PageLinksBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group text-sm flex items-center gap-1.5 focus-visible:outline-primary",
            PageLinksBaseTheme::make(slot: 'link'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-5 shrink-0",
            PageLinksBaseTheme::make(slot: 'linkLeadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate",
            PageLinksBaseTheme::make(slot: 'linkLabel'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-3 absolute top-0 text-dimmed",
            PageLinksBaseTheme::make(slot: 'linkLabelExternalIcon'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group text-sm flex items-center gap-1.5 focus-visible:outline-primary text-primary font-medium",
            PageLinksBaseTheme::make(props: ['active' => 'true'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group text-sm flex items-center gap-1.5 focus-visible:outline-primary text-muted hover:text-default transition-colors",
            PageLinksBaseTheme::make(props: ['active' => 'false'], slot: 'link'),
        );
    }

}
