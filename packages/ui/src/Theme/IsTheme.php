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
     * @param array<array-key, string> $props Props passed to slot
     * @return string Final CSS class string
     */
    public static function make(
        string $slot = 'base',
        array $props = [],
    ): string {
        $instance = new static();

        // @mago-expect analysis:mixed-property-type-coercion
        $instance->color = $props['color'] ?? 'primary';

        return $instance->build($slot, $props);
    }

    /**
     * @param array<array-key, string> $props
     */
    protected function build(string $slot, array $props = []): string
    {
        /** @var string|array<array-key, string|array<array-key, string>> $base */
        $base = $this->slots->toArray() ?? [];

        /** @var array{
         *     variants?: array<array-key, array<array-key, string|array<array-key, string>|array<array-key, string|array<array-key, string>>>>,
         *     compoundVariants?: array<array-key, array<array-key, string|bool|array<array-key, string>>>,
         *     defaultVariants?: array<array-key, string|bool>
         * } $variance */
        $variance = array(
            'variants' => $this->variants->toArray() ?? [],
            'compoundVariants' => $this->compoundVariants->toArray() ?? [],
            'defaultVariants' => $this->defaultVariants->toArray() ?? [],
        );

        $cv = Cv::new(
            $base,
            $variance,
        );

        $return = $cv(props: $props, slot: $slot);

        $placeholders = [
            'phcolorph' => $this->color,
            'phhighlightColorph' => $this->color,
            'phspotlightColorph' => $this->color,
        ];

        foreach ($placeholders as $needle => $replaceWith) {
            $return = str_replace($needle, $replaceWith, $return);
        }

        return $return;
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
