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
     * Get CSS classes for a specific slot with variants applied
     *
     * @param string $slot Slot name (e.g., 'base', 'icon', 'label')
     * @param array $variants Variant configuration ['color' => 'primary', 'size' => 'md']
     * @param string|array|null $merge Additional classes to merge (optional)
     * @return string Space-separated CSS class string
     */
    public static function make(
        string $slot = 'base',
        array $variants = [],
        string|array|null $merge = null,
    ): string;
}
