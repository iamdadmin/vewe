<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\LiBaseTheme;

final class LiBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "my-1.5 ps-1.5 leading-7 [&>ul]:my-0",
            LiBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "my-1.5 ps-1.5 leading-7 [&>ul]:my-0",
            LiBaseTheme::make(slot: 'base'),
        );
    }

}
