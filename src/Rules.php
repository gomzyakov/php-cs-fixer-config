<?php

declare(strict_types = 1);

namespace Gomzyakov\CS;

use function json_decode;

/**
 * The class containing the rules for `php-cs-fixer`.
 *
 * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/
 */
class Rules
{
    /**
     * @param array<string, array<string, mixed>|bool> $overwritten_rules
     *
     * @return array<string, array<string, mixed>|bool>
     */
    public static function getRules(array $overwritten_rules = []): array
    {
        /** @var string $pint_rules */
        $pint_rules = file_get_contents(__DIR__ . '/../pint.json');

        /** @var array{rules: array<string, array<string, mixed>|bool>} $rules */
        $rules = json_decode($pint_rules, true);

        return array_merge($rules['rules'], $overwritten_rules);
    }
}
