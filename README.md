# php-code-style

![version](https://img.shields.io/badge/release-v0.0.0-blue)
[![codecov](https://codecov.io/gh/gomzyakov/php-code-style/branch/main/graph/badge.svg?token=RH46YRL1CN)](https://codecov.io/gh/gomzyakov/php-code-style)

Just [PSR-12](https://www.php-fig.org/psr/psr-12/)-based code style configuration for `php-cs-fixer`.

## Installation

First of all install `gomzyakov/php-code-style` via composer:

```sh
composer require --dev gomzyakov/php-code-style
```

The package `friendsofphp/php-cs-fixer` will be installed automatically

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

And that's it. You can now find code style violations with following command:

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

## Code style

Our code style is based primarily on [PSR-12](https://www.php-fig.org/psr/psr-12/) with some changes.

## Support

If you find any package errors, please, [make an issue](https://github.com/gomzyakov/php-code-style/issues) in current repository.

## License

This is open-sourced software licensed under the [MIT License](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).
