<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PageGridBaseTheme;

final class PageGridBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "relative grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8",
            PageGridBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8",
            PageGridBaseTheme::make(slot: 'base'),
        );
    }

}
