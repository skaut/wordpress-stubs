# AGENTS.md

This file provides guidance to coding agents when working with code in this repository.

## What this is

A Composer library (`skaut/wordpress-stubs`) of **hand-written** PHP stubs for WordPress (plus a few PHPUnit and WordPress test-suite classes), consumed by phan and PHPStan in downstream plugins/themes. Unlike `php-stubs/wordpress-stubs` (auto-generated from WP source), the point of this package is precise types — e.g. real array shapes instead of `array<mixed>`. The stubs are intentionally incomplete; things get added as they are needed.

There is no build step and no test suite. The only "tests" are the linters run over the stubs themselves.

## Commands

```sh
composer install
composer run-script lint     # phpcs + phan + phpstan (what CI runs, on PHP 8.4 with the ast extension)
composer run-script phpcs    # WordPress Coding Standards + Slevomat, see phpcs.xml
composer run-script phan     # requires the php-ast extension
composer run-script phpstan  # level max
vendor/bin/phpcbf            # auto-fix phpcs issues
vendor/bin/phpcs stubs/WordPress/functions.php   # lint a single file
```

## Layout

- `stubs/WordPress/` — WordPress core. `functions.php` holds all global constants and functions; every class lives in its own `class-<name-lowercased-with-dashes>.php` file (e.g. `WP_Error` → `class-wp-error.php`, `Requests_Utility_CaseInsensitiveDictionary` → `class-requests-utility-caseinsensitivedictionary.php`).
- `stubs/WordPress-test/` — the WordPress PHPUnit test framework (`WP_UnitTestCase`, `tests_add_filter`, ...).
- `stubs/PHPUnit/Framework/` — minimal PHPUnit stubs needed by the above.
- `.phan/config.php`, `phpstan.neon`, `phpcs.xml` — lint configs; all of them analyse `stubs/` and `.phan/`.

## Stub conventions

- Each file starts with a `@package wordpress-stubs` docblock and `declare(strict_types = 1);`.
- Functions/methods have empty bodies and **no native type hints** (the package supports PHP `^7.0`); all types go in docblocks (`@param`, `@return`, `@var`). PHPStan-specific annotations (`@phpstan-return` conditional types, `@template`, array shapes) are used where they add precision.
- Only declare what is actually stubbed — classes typically contain just the relevant methods/properties, not the full WP API.
- Functions in `functions.php` are (roughly) in alphabetical order; insert new ones in their alphabetical place. Constants are at the top of the file.
- Constants use placeholder values of the right type. Boolean constants use `__LINE__ === 0` so static analysers don't treat them as a fixed `true`/`false` (the matching "strict comparison will always evaluate to false" error is ignored in `phpstan.neon`).
- Missing-return errors are suppressed in both phan and PHPStan configs because the bodies are empty by design.
- Follow the existing WordPress formatting (tabs, spaces inside parentheses, aligned `@param` columns); phpcs enforces it.
