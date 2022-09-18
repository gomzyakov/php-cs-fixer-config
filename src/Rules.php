<?php

declare(strict_types = 1);

namespace Gomzyakov\CS;

/**
 * The class containing the rules for `php-cs-fixer`.
 *
 * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/
 */
class Rules
{
    /**
     * @param array<string, mixed> $overwritten_rules
     *
     * @return array<string, mixed>
     */
    public static function getRules(array $overwritten_rules = []): array
    {
        $pint_rules = file_get_contents(__DIR__ . '/../pint.json');
        $rules      = \json_decode($pint_rules, true);

        return array_merge($rules['rules'], $overwritten_rules);
    }
}
