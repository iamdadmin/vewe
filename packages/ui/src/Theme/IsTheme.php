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

    private function replacePlaceholder(mixed $subject, string $replace, string $replaceWith): mixed
    {
        if (is_string($subject)) {
            return $this->replacePlaceholder($subject, $replace, $replaceWith);
        }

        if (is_array($subject)) {
            return new ImmutableArray($subject)
                ->map(fn (mixed $value) => $this->replacePlaceholder($value, $replace, $replaceWith))
                ->toArray();
        }

        return $subject;
    }
}
