<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\FieldGroupBaseTheme;

final class FieldGroupBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "my-5 divide-y divide-default *:not-last:pb-5",
            FieldGroupBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "my-5 divide-y divide-default *:not-last:pb-5",
            FieldGroupBaseTheme::make(slot: 'base'),
        );
    }

}
