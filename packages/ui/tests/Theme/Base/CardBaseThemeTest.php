<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\CardBaseTheme;

final class CardBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-lg overflow-hidden bg-default ring ring-default divide-y divide-default",
            CardBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-4 sm:px-6",
            CardBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-4 sm:p-6",
            CardBaseTheme::make(slot: 'body'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-4 sm:px-6",
            CardBaseTheme::make(slot: 'footer'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-lg overflow-hidden bg-inverted text-inverted",
            CardBaseTheme::make(props: ['variant' => 'solid'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-lg overflow-hidden bg-default ring ring-default divide-y divide-default",
            CardBaseTheme::make(props: ['variant' => 'outline'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-lg overflow-hidden bg-elevated/50 divide-y divide-default",
            CardBaseTheme::make(props: ['variant' => 'soft'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-lg overflow-hidden bg-elevated/50 ring ring-default divide-y divide-default",
            CardBaseTheme::make(props: ['variant' => 'subtle'], slot: 'root'),
        );
    }

}
