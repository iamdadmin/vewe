<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\BlockquoteBaseTheme;

final class BlockquoteBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "border-s-4 border-accented ps-4 italic",
            BlockquoteBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "border-s-4 border-accented ps-4 italic",
            BlockquoteBaseTheme::make(slot: 'base'),
        );
    }

}
