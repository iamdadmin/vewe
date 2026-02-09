<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\AvatarGroupBaseTheme;

final class AvatarGroupBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex flex-row-reverse justify-end",
            AvatarGroupBaseTheme::make(slot: 'root'),
        );

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "relative rounded-full ring-bg first:me-0 ring-2 -me-1.5",
            AvatarGroupBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative rounded-full ring-bg first:me-0 ring-2 -me-1.5",
            AvatarGroupBaseTheme::make(slot: 'base'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative rounded-full ring-bg first:me-0 ring -me-0.5",
            AvatarGroupBaseTheme::make(props: ['size' => '3xs'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative rounded-full ring-bg first:me-0 ring -me-0.5",
            AvatarGroupBaseTheme::make(props: ['size' => '2xs'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative rounded-full ring-bg first:me-0 ring -me-0.5",
            AvatarGroupBaseTheme::make(props: ['size' => 'xs'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative rounded-full ring-bg first:me-0 ring-2 -me-1.5",
            AvatarGroupBaseTheme::make(props: ['size' => 'sm'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative rounded-full ring-bg first:me-0 ring-2 -me-1.5",
            AvatarGroupBaseTheme::make(props: ['size' => 'md'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative rounded-full ring-bg first:me-0 ring-2 -me-1.5",
            AvatarGroupBaseTheme::make(props: ['size' => 'lg'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative rounded-full ring-bg first:me-0 ring-3 -me-2",
            AvatarGroupBaseTheme::make(props: ['size' => 'xl'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative rounded-full ring-bg first:me-0 ring-3 -me-2",
            AvatarGroupBaseTheme::make(props: ['size' => '2xl'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative rounded-full ring-bg first:me-0 ring-3 -me-2",
            AvatarGroupBaseTheme::make(props: ['size' => '3xl'], slot: 'base'),
        );
    }

}
