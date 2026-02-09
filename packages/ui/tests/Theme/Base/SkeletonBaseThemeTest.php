<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\SkeletonBaseTheme;

final class SkeletonBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "animate-pulse rounded-md bg-elevated",
            SkeletonBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "animate-pulse rounded-md bg-elevated",
            SkeletonBaseTheme::make(slot: 'base'),
        );
    }

}
