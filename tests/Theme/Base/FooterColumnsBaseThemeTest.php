<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\FooterColumnsBaseTheme;

final class FooterColumnsBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "xl:grid xl:grid-cols-3 xl:gap-8",
            FooterColumnsBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mb-10 xl:mb-0",
            FooterColumnsBaseTheme::make(slot: 'left'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col lg:grid grid-flow-col auto-cols-fr gap-8 xl:col-span-2",
            FooterColumnsBaseTheme::make(slot: 'center'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-10 xl:mt-0",
            FooterColumnsBaseTheme::make(slot: 'right'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-sm font-semibold",
            FooterColumnsBaseTheme::make(slot: 'label'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-6 space-y-4",
            FooterColumnsBaseTheme::make(slot: 'list'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative",
            FooterColumnsBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group text-sm flex items-center gap-1.5 focus-visible:outline-primary",
            FooterColumnsBaseTheme::make(slot: 'link'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-5 shrink-0",
            FooterColumnsBaseTheme::make(slot: 'linkLeadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate",
            FooterColumnsBaseTheme::make(slot: 'linkLabel'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-3 absolute top-0 text-dimmed inline-block",
            FooterColumnsBaseTheme::make(slot: 'linkLabelExternalIcon'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group text-sm flex items-center gap-1.5 focus-visible:outline-primary text-primary font-medium",
            FooterColumnsBaseTheme::make(props: ['active' => 'true'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group text-sm flex items-center gap-1.5 focus-visible:outline-primary text-muted hover:text-default transition-colors",
            FooterColumnsBaseTheme::make(props: ['active' => 'false'], slot: 'link'),
        );
    }

}
