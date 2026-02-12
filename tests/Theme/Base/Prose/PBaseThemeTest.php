<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\PBaseTheme;

final class PBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "my-5 leading-7 text-pretty",
            PBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "my-5 leading-7 text-pretty",
            PBaseTheme::make(slot: 'base'),
        );
    }

}
