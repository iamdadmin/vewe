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
    private static ?TailwindMerge $merger = null;

    public static function make(string $slot = 'base', array $variants = [], $merge = null): string
    {
        return new static()->resolveSlot($slot, $variants, $merge);
    }

    protected function resolveSlot(string $slot, array $variants, $merge): string
    {
        // Base theme CVA (if defined)
        $baseClasses = $this->hasBaseTheme()
            ? $this->getBaseCva($slot)($variants)
            : '';

        // Override theme CVA
        $overrideClasses = $this->getOverrideCva($slot)($variants);

        // Merge: base → override → user → TailwindMerge
        $allClasses = trim(implode(' ', array_filter([
            $baseClasses,
            $overrideClasses,
            is_array($merge) ? implode(' ', $merge) : $merge,
        ])));

        return (self::$merger ??= TailwindMerge::instance())->merge($allClasses);
    }

    protected function hasBaseTheme(): bool
    {
        return defined('static::BASE_THEME');
    }

    protected function getBaseCva(string $slot): ClassVarianceAuthority
    {
        $base = static::BASE_THEME;
        return ClassVarianceAuthority::new(
            $base::SLOTS[$slot] ?? [],
            [
                'variants' => $this->getSlotData($base::VARIANTS, $slot),
                'compoundVariants' => $this->getSlotData($base::COMPOUND_VARIANTS, $slot),
                'defaultVariants' => $base::DEFAULT_VARIANTS,
            ],
        );
    }

    protected function getOverrideCva(string $slot): ClassVarianceAuthority
    {
        return ClassVarianceAuthority::new(
            static::SLOTS[$slot] ?? [],
            [
                'variants' => $this->getSlotData(static::VARIANTS, $slot),
                'compoundVariants' => $this->getSlotData(static::COMPOUND_VARIANTS, $slot),
                'defaultVariants' => static::DEFAULT_VARIANTS,
            ],
        );
    }

    protected function getSlotData(array $data, string $slot): array
    {
        $result = [];
        foreach ($data as $key => $value) {
            // VARIANTS: extract slot-specific classes
            if (is_array($value) && ! isset($value['class'])) {
                foreach ($value as $name => $val) {
                    $result[$key][$name] = ! is_array($val) ? $val : $val[$slot] ?? null;
                }
            }
            // COMPOUND_VARIANTS: extract slot-specific class
            elseif (isset($value['class'][$slot])) {
                $result[] = [...$value, 'class' => $value['class'][$slot]];
            }
        }
        return array_filter($result);
    }
}
