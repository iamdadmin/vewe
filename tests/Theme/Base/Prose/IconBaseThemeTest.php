<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\IconBaseTheme;

final class IconBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "size-4 shrink-0 align-sub",
            IconBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-4 shrink-0 align-sub",
            IconBaseTheme::make(slot: 'base'),
        );
    }

}
