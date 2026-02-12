<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\BreadcrumbBaseTheme;

final class BreadcrumbBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative min-w-0",
            BreadcrumbBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1.5",
            BreadcrumbBaseTheme::make(slot: 'list'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex min-w-0",
            BreadcrumbBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group relative flex items-center gap-1.5 text-sm min-w-0 focus-visible:outline-primary",
            BreadcrumbBaseTheme::make(slot: 'link'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            BreadcrumbBaseTheme::make(slot: 'linkLeadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0",
            BreadcrumbBaseTheme::make(slot: 'linkLeadingAvatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "2xs",
            BreadcrumbBaseTheme::make(slot: 'linkLeadingAvatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate",
            BreadcrumbBaseTheme::make(slot: 'linkLabel'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex",
            BreadcrumbBaseTheme::make(slot: 'separator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-muted",
            BreadcrumbBaseTheme::make(slot: 'separatorIcon'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative flex items-center gap-1.5 text-sm min-w-0 focus-visible:outline-primary text-primary font-semibold",
            BreadcrumbBaseTheme::make(props: ['active' => 'true'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative flex items-center gap-1.5 text-sm min-w-0 focus-visible:outline-primary text-muted font-medium",
            BreadcrumbBaseTheme::make(props: ['active' => 'false'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative flex items-center gap-1.5 text-sm min-w-0 focus-visible:outline-primary cursor-not-allowed opacity-75",
            BreadcrumbBaseTheme::make(props: ['disabled' => 'true'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative flex items-center gap-1.5 text-sm min-w-0 focus-visible:outline-primary",
            BreadcrumbBaseTheme::make(props: ['to' => 'true'], slot: 'link'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative flex items-center gap-1.5 text-sm min-w-0 focus-visible:outline-primary hover:text-default transition-colors',
            BreadcrumbBaseTheme::make(props: ['disabled' => false, 'active' => false, 'to' => true], slot: 'link'),
        );
    }

}
