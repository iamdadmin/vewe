<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\LinkBaseTheme;

final class LinkBaseThemeTest extends TestCase
{    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-primary",
            LinkBaseTheme::make(props: ['active' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted",
            LinkBaseTheme::make(props: ['active' => 'false'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "cursor-not-allowed opacity-75",
            LinkBaseTheme::make(props: ['disabled' => 'true'], slot: 'base'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'hover:text-default transition-colors',
            LinkBaseTheme::make(props: ['active' => false, 'disabled' => false], slot: 'base'),
        );
    }

}
