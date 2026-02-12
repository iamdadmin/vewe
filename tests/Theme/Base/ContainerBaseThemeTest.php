<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\ContainerBaseTheme;

final class ContainerBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "w-full max-w-(--vewe-container) mx-auto px-4 sm:px-6 lg:px-8",
            ContainerBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full max-w-(--vewe-container) mx-auto px-4 sm:px-6 lg:px-8",
            ContainerBaseTheme::make(slot: 'base'),
        );
    }

}
