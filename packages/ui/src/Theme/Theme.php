<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme;

/**
 * Interface for all theme components
 *
 * Defines the contract that all theme classes must follow
 */
interface Theme
{
    /**
     * Get CSS classes for a slot with variants applied
     * @param string $slot Slot name
     * @param array<array-key, string> $props Props passed to slot
     * @return string Final CSS class string
     */
    public static function make(
        string $slot = 'base',
        array $props = [],
    ): string;
}
