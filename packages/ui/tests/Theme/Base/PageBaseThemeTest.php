<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PageBaseTheme;

final class PageBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col lg:grid lg:grid-cols-10 lg:gap-10",
            PageBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "lg:col-span-2",
            PageBaseTheme::make(slot: 'left'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "lg:col-span-8",
            PageBaseTheme::make(slot: 'center'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "lg:col-span-2 order-first lg:order-last",
            PageBaseTheme::make(slot: 'right'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageBaseTheme::make(props: ['left' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            PageBaseTheme::make(props: ['right' => 'true'], slot: 'base'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'lg:col-span-8 lg:col-span-6',
            PageBaseTheme::make(props: ['left' => true, 'right' => true], slot: 'center'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'lg:col-span-8 lg:col-span-10',
            PageBaseTheme::make(props: ['left' => false, 'right' => false], slot: 'center'),
        );
    }

}
