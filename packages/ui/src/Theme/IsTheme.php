<?php
// @mago-expect analysis:never-return
// @mago-expect analysis:no-value
// @mago-expect analysis:non-existent-class-constant

declare(strict_types=1);

namespace Vewe\Ui\Theme;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\ClassVariance\Cv;

trait IsTheme
{
    protected string $color;

    /**
     * Get CSS classes for a slot with variants applied
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

        return $instance->build($variants, $merge);
    }

    protected function build(array $variants, string|array|null $merge): string
    {
        // TODO
        return '';
    }

    private function mergeTheme(ImmutableArray $override, ImmutableArray $base): ImmutableArray
    {
        // Get all unique keys from both arrays
        $allKeys = $base->keys()->merge($override->keys())->unique();

        // Build merged result by processing each key
        return $allKeys->reduce(
            /** @param string $key */
            function (ImmutableArray $result, mixed $key) use ($base, $override) {
                $hasInBase = $base->hasKey($key);
                $hasInOverride = $override->hasKey($key);

                if (! $hasInOverride) {
                    // Only in base, keep base value
                    return $result->set($key, $base->get($key));
                }

                if (! $hasInBase) {
                    // Only in override, use override value
                    return $result->set($key, $override->get($key));
                }

                // In both - check if we need deep merge
                $baseValue = $base->get($key);
                $overrideValue = $override->get($key);

                if (is_array($baseValue) && is_array($overrideValue)) {
                    // Both are arrays - recursively merge
                    return $result->set(
                        $key,
                        $this->mergeTheme(
                            new ImmutableArray($overrideValue),
                            new ImmutableArray($baseValue),
                        ),
                    );
                }

                // Override wins for non-array values
                return $result->set($key, $overrideValue);
            },
            new ImmutableArray([]),
        );
    }
}
