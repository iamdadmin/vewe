<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\TabsItemBaseTheme;

final class TabsItemBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "*:first:mt-0 *:last:mb-0 *:my-1.5",
            TabsItemBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "*:first:mt-0 *:last:mb-0 *:my-1.5",
            TabsItemBaseTheme::make(slot: 'base'),
        );
    }

}
