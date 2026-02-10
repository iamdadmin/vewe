<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\AvatarBaseTheme;

final class AvatarBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center justify-center shrink-0 select-none rounded-full align-middle bg-elevated size-8 text-base",
            AvatarBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "h-full w-full rounded-[inherit] object-cover",
            AvatarBaseTheme::make(slot: 'image'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "font-medium leading-none text-muted truncate",
            AvatarBaseTheme::make(slot: 'fallback'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted shrink-0",
            AvatarBaseTheme::make(slot: 'icon'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center justify-center shrink-0 select-none rounded-full align-middle bg-elevated size-4 text-[8px]",
            AvatarBaseTheme::make(props: ['size' => '3xs'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center justify-center shrink-0 select-none rounded-full align-middle bg-elevated size-5 text-[10px]",
            AvatarBaseTheme::make(props: ['size' => '2xs'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center justify-center shrink-0 select-none rounded-full align-middle bg-elevated size-6 text-xs",
            AvatarBaseTheme::make(props: ['size' => 'xs'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center justify-center shrink-0 select-none rounded-full align-middle bg-elevated size-7 text-sm",
            AvatarBaseTheme::make(props: ['size' => 'sm'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center justify-center shrink-0 select-none rounded-full align-middle bg-elevated size-8 text-base",
            AvatarBaseTheme::make(props: ['size' => 'md'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center justify-center shrink-0 select-none rounded-full align-middle bg-elevated size-9 text-lg",
            AvatarBaseTheme::make(props: ['size' => 'lg'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center justify-center shrink-0 select-none rounded-full align-middle bg-elevated size-10 text-xl",
            AvatarBaseTheme::make(props: ['size' => 'xl'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center justify-center shrink-0 select-none rounded-full align-middle bg-elevated size-11 text-[22px]",
            AvatarBaseTheme::make(props: ['size' => '2xl'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center justify-center shrink-0 select-none rounded-full align-middle bg-elevated size-12 text-2xl",
            AvatarBaseTheme::make(props: ['size' => '3xl'], slot: 'root'),
        );
    }

}
