<?php

declare(strict_types=1);

namespace Vewe {
    use Tempest\Support\Arr\ImmutableArray;
    use Tempest\Support\Str\ImmutableString;

    /**
     * Map $attributes to a flattened string
     *
     * @param \Tempest\Support\Arr\ImmutableArray<string, string> $attributes
     * @return ImmutableString
     */
    function mkAttrs(ImmutableArray $attributes): ImmutableString
    {
        return $attributes
            // @mago-expect analysis:possibly-invalid-argument
            ->map(fn(string $value, string $key) => "{$key}=\"{$value}\"")
            ->implode(' ');
    }

    /**
     * Validates a string attribute against allowed values
     *
     * @param mixed $attribute The attribute value to validate
     * @param array $validation ['value1', 'value2', 'valueN']
     * @param string $default The default value if attribute is not set or invalid
     * @return string The validated attribute value or default
     */
    function validateString(mixed $attribute, array $validation, string $default): string
    {
        // If not set or not a string, return default
        if (!isset($attribute) || !is_string($attribute)) {
            return $default;
        }

        // If no allowed values specified, return the string
        if (empty($validation)) {
            return $attribute;
        }

        // Check if value is in allowed list
        return in_array($attribute, $validation, true) ? $attribute : $default;
    }

    /**
     * Validates an integer attribute against min/max constraints
     *
     * @param mixed $attribute The attribute value to validate
     * @param array $validation ['min' => 0, 'max' => 100] The min and max to limit the attribute to if out of bounds
     * @param int $default The default value if attribute is not set
     * @return int The validated attribute value or default
     */
    function validateInteger(mixed $attribute, array $validation, int $default): int
    {
        // If not set, return default
        if (!isset($attribute)) {
            return $default;
        }

        // Try to convert to integer if it's a numeric string
        if (is_string($attribute) && is_numeric($attribute)) {
            $attribute = (int) $attribute;
        }

        // If not an integer after conversion attempt, return default
        if (!is_int($attribute)) {
            return $default;
        }

        // Check min constraint if provided
        if (isset($validation['min']) && $attribute < $validation['min']) {
            return $validation['min'];
        }

        // Check max constraint if provided
        if (isset($validation['max']) && $attribute > $validation['max']) {
            return $validation['max'];
        }

        return $attribute;
    }

    /**
     * Validates a boolean attribute
     *
     * @param mixed $attribute The attribute value to validate
     * @param bool $default The default value if attribute is not set
     * @return bool The validated attribute value or default
     */
    function validateBoolean(mixed $attribute, bool $default): bool
    {
        // If not set, return default
        if (!isset($attribute)) {
            return $default;
        }

        // If it's already a boolean, return it (respects both true and false)
        if (is_bool($attribute)) {
            return $attribute;
        }

        // Handle string representations
        if (is_string($attribute)) {
            $lower = strtolower(trim($attribute));
            if (in_array($lower, ['true', '1', 'yes', 'on'], true)) {
                return true;
            }
            if (in_array($lower, ['false', '0', 'no', 'off', ''], true)) {
                return false;
            }
        }

        // Handle numeric values
        if (is_numeric($attribute)) {
            return (bool) $attribute;
        }

        // If we can't determine a boolean value, return default
        return $default;
    }
}
