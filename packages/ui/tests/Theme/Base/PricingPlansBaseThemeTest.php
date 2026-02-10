<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PricingPlansBaseTheme;

final class PricingPlansBaseThemeTest extends TestCase
{    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "gap-x-8",
            PricingPlansBaseTheme::make(props: ['compact' => 'false'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            PricingPlansBaseTheme::make(props: ['scale' => 'true'], slot: 'base'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'lg:gap-x-13',
            PricingPlansBaseTheme::make(props: ['compact' => false, 'scale' => true], slot: 'base'),
        );
    }

}
