<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme;

use FeatureNinja\Cva\ClassVarianceAuthority;
use TalesFromADev\TailwindMerge\TailwindMerge;

/**
 * Trait providing theme slot extraction and CVA integration
 *
 * This trait:
 * 1. Extracts the requested slot's base classes
 * 2. Delegates variant resolution to FeatureNinja CVA
 * 3. Merges with TailwindMerge (Tailwind v4 compatible)
 */
trait IsTheme
{
    /**
     * Singleton TailwindMerge instance (lazy-loaded)
     */
    private static ?TailwindMerge $merger = null;

    /**
     * Get CSS classes for a specific slot with variants applied
     *
     * @param string $slot Slot name (e.g., 'base', 'leadingIcon', 'label')
     * @param array $variants Variant configuration ['color' => 'primary', 'size' => 'md']
     * @param string|array|null $merge Additional classes to merge (optional)
     * @return string Space-separated CSS class string
     */
    public static function make(
        string $slot = 'base',
        array $variants = [],
        string|array|null $merge = null,
    ): string {
        $instance = new static();
        return $instance->resolveSlot($slot, $variants, $merge);
    }

    /**
     * Get all available slot names
     *
     * @return array<string>|list<array-key> Array of slot names
     */
    public static function getAvailableSlots(): array
    {
        // @mago-expect analysis:no-value
        return array_keys(static::SLOTS);
    }

    /**
     * Get a closure for a specific slot (useful for inline usage)
     *
     * @param string $slotName The slot name
     * @return \Closure Closure that accepts (array $variants, string|array|null $merge)
     */
    public static function slot(string $slotName): \Closure
    {
        return function (array $variants = [], string|array|null $merge = null) use ($slotName) {
            return static::make($slotName, $variants, $merge);
        };
    }

    /**
     * Resolve a slot with variants using CVA and TailwindMerge
     *
     * @param string $slotName Slot to resolve
     * @param array $activeVariants Variants to apply
     * @param string|array|null $additionalClasses Additional classes to merge
     * @return string Final class string
     */
    protected function resolveSlot(
        string $slotName,
        array $activeVariants = [],
        string|array|null $additionalClasses = null,
    ): string {
        // Step 1: Extract base classes for the slot (fallback to 'base' if not found)
        $baseClasses = $this->extractSlotClasses($slotName);

        // Step 2: Extract slot-specific variants and compound variants
        $slotVariants = $this->extractSlotVariants($slotName);
        $slotCompoundVariants = $this->extractSlotCompoundVariants($slotName);

        // Step 3: Use FeatureNinja CVA to resolve variants
        $cva = ClassVarianceAuthority::new(
            $baseClasses,
            [
                'variants' => $slotVariants,
                'compoundVariants' => $slotCompoundVariants,
                'defaultVariants' => static::DEFAULT_VARIANTS,
            ],
        );

        // Get classes from CVA with active variants
        $cvaClasses = $cva($activeVariants);

        // Step 4: Add any additional user-provided classes
        if ($additionalClasses !== null) {
            if (is_array($additionalClasses)) {
                $additionalClasses = implode(' ', $additionalClasses);
            }
            $cvaClasses .= ' ' . $additionalClasses;
        }

        // Step 5: Merge with TailwindMerge (Tailwind v4 compatible)
        return $this->mergeClasses($cvaClasses);
    }

    /**
     * Extract base classes for a specific slot
     *
     * @param string $slotName Slot name
     * @return array<int, string>|string Base classes for the slot
     */
    protected function extractSlotClasses(string $slotName): array|string
    {
        // Get slot classes, fallback to 'base' slot if not found
        $classes = static::SLOTS[$slotName] ?? static::SLOTS['base'] ?? [];

        // If already an array, return as-is (CVA accepts arrays)
        if (is_array($classes)) {
            return $classes;
        }

        // If string, return as-is (CVA accepts strings)
        return $classes;
    }

    /**
     * Extract slot-specific variants
     *
     * Only includes variant options that have classes for this specific slot
     *
     * @param string $slotName Slot name
     * @return array Slot-specific variants
     */
    protected function extractSlotVariants(string $slotName): array
    {
        $slotVariants = [];

        foreach (static::VARIANTS as $variantType => $variantOptions) {
            $slotVariants[$variantType] = [];

            foreach ($variantOptions as $optionName => $optionConfig) {
                // If option is empty, include it as empty (it might be used in compound variants)
                if (empty($optionConfig)) {
                    $slotVariants[$variantType][$optionName] = '';
                    continue;
                }

                // If option has slot-specific classes, extract them
                if (is_array($optionConfig) && isset($optionConfig[$slotName])) {
                    $slotVariants[$variantType][$optionName] = $optionConfig[$slotName];
                } elseif (is_string($optionConfig)) {
                    // If it's a string, it applies to base slot only
                    if ($slotName === 'base') {
                        $slotVariants[$variantType][$optionName] = $optionConfig;
                    }
                }
            }

            // Remove variant type if it has no options for this slot
            if (empty($slotVariants[$variantType])) {
                unset($slotVariants[$variantType]);
            }
        }

        return $slotVariants;
    }

    /**
     * Extract slot-specific compound variants
     *
     * Only includes compound variants that have classes for this specific slot
     *
     * @param string $slotName Slot name
     * @return array Slot-specific compound variants
     */
    protected function extractSlotCompoundVariants(string $slotName): array
    {
        $slotCompoundVariants = [];

        foreach (static::COMPOUND_VARIANTS as $compound) {
            // Clone the compound array to avoid modifying the original
            $slotCompound = $compound;

            // Extract the class for this slot
            if (isset($compound['class'])) {
                $classConfig = $compound['class'];

                // If class is an array with slot-specific classes
                if (is_array($classConfig) && isset($classConfig[$slotName])) {
                    $slotCompound['class'] = $classConfig[$slotName];
                }
                // If class is a string (applies to base slot only)
                elseif (is_string($classConfig) && $slotName === 'base') {
                    $slotCompound['class'] = $classConfig;
                }
                // Otherwise, skip this compound variant for this slot
                else {
                    continue;
                }

                $slotCompoundVariants[] = $slotCompound;
            }
        }

        return $slotCompoundVariants;
    }

    /**
     * Merge classes using TailwindMerge (Tailwind v4 compatible)
     *
     * @param string $classes Classes to merge
     * @return string Merged classes
     */
    protected function mergeClasses(string $classes): string
    {
        if (self::$merger === null) {
            self::$merger = TailwindMerge::instance();
        }

        return self::$merger->merge($classes);
    }
}
