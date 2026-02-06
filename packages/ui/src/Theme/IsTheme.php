<?php
// @mago-expect analysis:never-return
// @mago-expect analysis:no-value
// @mago-expect analysis:non-existent-class-constant

declare(strict_types=1);

namespace Vewe\Ui\Theme;

use FeatureNinja\Cva\ClassVarianceAuthority;
use TalesFromADev\TailwindMerge\TailwindMerge;

/**
 * @return array|string|null
 */

trait IsTheme
{
    private static ?TailwindMerge $merger = null;

    protected string $color;

    protected string $slot;

    public array $slotData {
        get {
            return self::VARIANTS[$this->$slot];
        }
    }

    public array $variantData {
        get {
            return $this->replacePlaceholders(self::VARIANTS);
        }
    }

    public array $compoundVariantData {
        get {
            return $this->replacePlaceholders(self::COMPOUND_VARIANTS);
        }
    }

    public array $defaultVariantData {
        get {
            return self::DEFAULT_VARIANTS ?? [];
        }
    }

    /**
     * Get CSS classes for a slot with variants applied
     *
     * @param string $slot Slot name
     * @param array $variants Variant values
     * @param string|array|null $merge Additional classes to merge
     * @return string Final CSS class string
     */
    public static function make(
        string $slot = 'base',
        array $variants = [],
        string|array|null $merge = null,
    ): string {
        $instance = new static();

        // @mago-expect analysis:mixed-property-type-coercion
        $instance->color = $variants['color'] ?? 'primary';
        $instance->slot = $slot;

        return $instance->build($variants, $merge);
    }

    protected function build(array $variants, string|array|null $merge): string
    {
        $variance = [];

        // Get CVA result for this slot
        $cva = ClassVarianceAuthority::new(
            self::SLOTS[$this->slot] ?? [],
            $variance,
        );

        // Append user classes
        // if ($merge !== null) {
        //     $classes .= ' ' . (is_array($merge) ? implode(' ', $merge) : $merge);
        // }

        // TailwindMerge
        return (self::$merger ??= TailwindMerge::instance())->merge($cva);
    }

    /**
     * Extract slot-specific data from VARIANTS or COMPOUND_VARIANTS
     */
    protected function getSlotData(array $data, string $slot): array
    {
        $result = [];

        foreach ($data as $key => $value) {
            // VARIANTS: [variantType => [optionName => value]]
            if (is_array($value) && ! isset($value['class'])) {
                foreach ($value as $name => $val) {
                    if (! is_array($val)) {
                        // String/empty: include as-is
                        $result[$key][$name] = $val;
                    } elseif (isset($val[$slot])) {
                        // Array with slot key: extract it
                        $result[$key][$name] = $val[$slot];
                    }
                }
            }
            // COMPOUND_VARIANTS: [['conditions', 'class' => [slot => value]]]
            elseif (isset($value['class'][$slot])) {
                $result[] = [...$value, 'class' => $value['class'][$slot]];
            }
        }

        return $result;
    }

    protected function replacePlaceholders(array $data): array
    {
        $replacements = [
            '{{color}}' => $this->color,
        ];

        $result = [];

        foreach ($data as $key => $value) {
            // Replace placeholders in the key
            $newKey = is_string($key)
                ? str_replace(
                    array_keys($replacements),
                    array_values($replacements),
                    $key,
                )
                : $key;

            // Recurse or replace value
            if (is_array($value)) {
                $result[$newKey] = $this->replacePlaceholders($value);
            } elseif (is_string($value)) {
                $result[$newKey] = str_replace(
                    array_keys($replacements),
                    array_values($replacements),
                    $value,
                );
            } else {
                $result[$newKey] = $value;
            }
        }

        return $result;
    }
}
