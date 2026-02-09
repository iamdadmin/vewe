<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\ButtonBaseTheme;

final class ButtonBaseThemeTest extends TestCase
{
    #[Test]
    public function button_base_theme(): void
    {
        // Check the default return matches
        $this->assertSame(
            $component = ButtonBaseTheme::make(),
            $component = ButtonBaseTheme::make(slot: 'base'),
        );

        $this->assertSame(
            'font-semibold border rounded bg-white text-gray-800 border-gray-400 hover:bg-gray-100 text-sm py-1 px-2',
            $component = ButtonBaseTheme::make(props: ['variant' => 'secondary', 'size' => 'small']),
        );

        $this->assertSame(
            'font-semibold border rounded bg-white text-gray-800 border-gray-400 hover:bg-gray-100 text-sm py-1 px-2 focus:ring-2',
            $component = ButtonBaseTheme::make(props: ['class' => 'focus:ring-2', 'className' => 'focus:ring-4', 'variant' => 'secondary', 'size' => 'small']),
        );

        $this->assertSame(
            'font-semibold border rounded bg-white text-gray-800 border-gray-400 hover:bg-gray-100 text-sm py-1 px-2 focus:ring-2',
            $component = ButtonBaseTheme::make(props: ['className' => 'focus:ring-2', 'variant' => 'secondary', 'size' => 'small']),
        );
    }
}
