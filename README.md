# High quality stubs for WordPress

[![GitHub Actions](https://github.com/skaut/wordpress-stubs/workflows/CI/badge.svg)](https://github.com/skaut/wordpress-stubs/actions)

This repo contains stubs for WordPress functions and classes to be used with [phan](https://github.com/phan/phan) or [phpstan](https://phpstan.org/). This allows for better type-checking of a codebase as the stubs all have type information.

## Alternatives

### [`php-stubs/wordpress-stubs`](https://github.com/php-stubs/wordpress-stubs)

The `php-stubs/wordpress-stubs` project uses stubs that are exported directly from WordPress source code. That means that the stubs are more complete and updated quicker. On the other hand, a lot of functions and classes are documented poorly in WordPress and array types are almost never typed properly (i. e. just `array<mixed>`). This package has all the stubs created by hand, so they are much more precise.

## Installation

```sh
$ composer require --dev skaut/wordpress-stubs
```

Add to your `.phan/config.php`:

```php
return [
	'directory_list' => [
		'vendor/skaut/wordpress-stubs/stubs'
	],
	'exclude_analysis_directory_list' => [
		'vendor/skaut/wordpress-stubs/stubs'
	]
];
```

Add to your `phpstan.neon`:

```neon
parameters:
	scanDirectories:
	  - vendor/skaut/wordpress-stubs/stubs
	scanFiles:
	  - vendor/skaut/wordpress-stubs/stubs/WordPress/functions.php
	dynamicConstantNames:
	  - WP_DEBUG
	  - ...
```
(you have to list dynamic constants yourself)

## Completeness

The stubs are not complete. If you spot any missing functions or classes, please [open an issue](https://github.com/skaut/wordpress-stubs/issues/new).
