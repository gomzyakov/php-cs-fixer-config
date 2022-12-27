# Code-style configuration for `php-cs-fixer`

[![packagist](https://img.shields.io/packagist/v/gomzyakov/php-cs-fixer-config.svg)](https://packagist.org/packages/gomzyakov/php-cs-fixer-config)
[![downloads_count](https://img.shields.io/packagist/dt/gomzyakov/php-cs-fixer-config.svg)](https://packagist.org/packages/gomzyakov/php-cs-fixer-config)
[![GitHub release](https://img.shields.io/github/release/gomzyakov/php-cs-fixer-config.svg)](https://github.com/gomzyakov/php-cs-fixer-config/releases/latest)
[![license](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/php-cs-fixer-config/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/php-cs-fixer-config/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/php-cs-fixer-config)

This package allows sharing identical [php-cs-fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer) formatting rules across all of your projects without copy-and-pasting configuration files.

## Quickstart

### Step 1 of 3

Install [`friendsofphp/php-cs-fixer`](https://github.com/FriendsOfPHP/PHP-CS-Fixer) & this package via Composer:

```sh
composer require --dev friendsofphp/php-cs-fixer gomzyakov/php-cs-fixer-config
```

### Step 2 of 3

Then create file `.php-cs-fixer.dist.php` at the root of your project with following contents:

```php
<?php

use Gomzyakov\CS\Finder;
use Gomzyakov\CS\Config;

// Routes for analysis with `php-cs-fixer`
$routes = ['./src', './tests'];

return Config::createWithFinder(Finder::createWithRoutes($routes));
```

Change the value of `$routes` depending on where your project's source code is.

### Step 3 of 3

**And that's it!** You can now find code style violations with following command:

```sh
./vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.dist.php --dry-run
```

And then completely fix them all with:

```sh
./vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.dist.php
```

## Configuration

You must pass a set of routes to the `Finder::createWithRoutes()` call. For example, for [Laravel](https://laravel.com) projects, this would be:

```php
Finder::createWithRoutes(['./app', './config', './database', './resources', './routes', './tests'])
```

Also, you can pass a custom set of rules to the `Config::createWithFinder()` call:

```php
Config::createWithFinder($finder, [
    '@PHP81Migration'   => true,
    'array_indentation' => false
])
```

## Laravel Pint

The following describes the use of styles in conjunction with `friendsofphp/php-cs-fixer`. Also you can use these style settings for [Laravel Pint](PINT.md).

## Support

If you find any package errors, please, [make an issue](https://github.com/gomzyakov/php-cs-fixer-config/issues) in current repository.

## License

This is open-sourced software licensed under the [MIT License](https://github.com/gomzyakov/php-cs-fixer-config/blob/main/LICENSE).

## Special thanks

- https://github.com/FriendsOfPHP/PHP-CS-Fixer
- https://mlocati.github.io/php-cs-fixer-configurator/
