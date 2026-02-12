<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PageListBaseTheme;

final class PageListBaseThemeTest extends TestCase
{    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "*:not-last:after:absolute *:not-last:after:inset-x-1 *:not-last:after:bottom-0 *:not-last:after:bg-border *:not-last:after:h-px",
            PageListBaseTheme::make(props: ['divide' => 'true'], slot: 'base'),
        );
    }

}
