<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\ImgBaseTheme;

final class ImgBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "rounded-md w-full",
            ImgBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md w-full",
            ImgBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "fixed inset-0 bg-default/75 backdrop-blur-sm will-change-opacity",
            ImgBaseTheme::make(slot: 'overlay'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "fixed inset-0 flex items-center justify-center cursor-zoom-out focus:outline-none",
            ImgBaseTheme::make(slot: 'content'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full h-auto max-w-[95vw] max-h-[95vh] object-contain rounded-md",
            ImgBaseTheme::make(slot: 'zoomedImage'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md w-full will-change-transform",
            ImgBaseTheme::make(props: ['zoom' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md w-full",
            ImgBaseTheme::make(props: ['open' => 'true'], slot: 'base'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md w-full cursor-zoom-in',
            ImgBaseTheme::make(props: ['zoom' => true, 'open' => false], slot: 'base'),
        );
    }

}
