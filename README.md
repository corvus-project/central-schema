<div align="center">
    <h1>Central Schema</h1>
</div>

<p align="center">
    <a href="https://packagist.org/packages/eventagile/central-schema"><img src="https://img.shields.io/packagist/v/eventagile/central-schema.svg?style=flat-square" alt="Packagist"></a>
    <a href="https://packagist.org/packages/eventagile/central-schema"><img src="https://img.shields.io/packagist/php-v/eventagile/central-schema.svg?style=flat-square" alt="PHP from Packagist"></a>
    <a href="https://packagist.org/packages/eventagile/central-schema"><img src="https://badge.laravel.cloud/badge/eventagile/central-schema?style=flat" alt="Laravel versions"></a>
    <a href="https://github.com/eventagile/central-schema/actions"><img alt="GitHub Workflow Status (main)" src="https://img.shields.io/github/actions/workflow/status/eventagile/central-schema/tests.yml?branch=main&label=Tests&style=flat-square"></a>
    <a href="https://packagist.org/packages/eventagile/central-schema"><img src="https://img.shields.io/packagist/dt/eventagile/central-schema.svg?style=flat-square" alt="Total Downloads"></a>
</p>

This is for EventAgile Migration and Seerder files

## Installation

You can install the package via Composer:

```bash
composer require eventagile/central-schema
```

You may publish all of the package's resources at once:

```bash
php artisan vendor:publish --tag="central-schema"
```

Or, you may publish each resource individually:

### Publishing the Configuration File

```bash
php artisan vendor:publish --tag="central-schema-config"
```

### Publishing and Running the Migrations

```bash
php artisan vendor:publish --tag="central-schema-migrations"
php artisan migrate
```

## Usage

<!-- Add a basic usage example here. -->

## Contributing

Thank you for considering contributing to Central Schema! Please review our [contributing guide](.github/CONTRIBUTING.md) to get started.

## Credits

- [Kemal](https://github.com/eventagile)
- [All Contributors](../../contributors)

## License

Central Schema is open-sourced software licensed under the [MIT license](LICENSE.md).
