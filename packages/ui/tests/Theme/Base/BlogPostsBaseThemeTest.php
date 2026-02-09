<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\BlogPostsBaseTheme;

final class BlogPostsBaseThemeTest extends TestCase
{    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "sm:grid sm:grid-cols-2 lg:grid-cols-3",
            BlogPostsBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            BlogPostsBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'base'),
        );
    }

}
