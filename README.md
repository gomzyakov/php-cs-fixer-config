# Code-style configuration for Pint and `php-cs-fixer`

![version](https://img.shields.io/badge/release-v0.2.2-blue)
[![codecov](https://codecov.io/gh/gomzyakov/php-code-style/branch/main/graph/badge.svg?token=RH46YRL1CN)](https://codecov.io/gh/gomzyakov/php-code-style)


## Quickstart with Laravel Pint

### Step 1 of 2

Install [Laravel Pint](https://github.com/laravel/pint) & this package via Composer:

```sh
composer require --dev laravel/pint gomzyakov/php-code-style
```

### Step 2 of 2

**And that's it!** You can now find code style violations with following command:

```sh
./vendor/bin/pint --config vendor/gomzyakov/php-code-style/pint.json
```

## Quickstart with `php-cs-fixer`

### Step 1 of 3

Install [`friendsofphp/php-cs-fixer`](https://github.com/FriendsOfPHP/PHP-CS-Fixer) & this package via Composer:

```sh
composer require --dev friendsofphp/php-cs-fixer gomzyakov/php-code-style
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

## Support

If you find any package errors, please, [make an issue](https://github.com/gomzyakov/php-code-style/issues) in current repository.

## License

This is open-sourced software licensed under the [MIT License](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).

## Special thanks

- https://github.com/FriendsOfPHP/PHP-CS-Fixer
- https://mlocati.github.io/php-cs-fixer-configurator/
