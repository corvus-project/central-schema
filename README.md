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

Shared central database migrations and seeders for EventAgile applications.

## Installation

You can install the package via Composer:

```bash
composer require eventagile/central-schema
```

The package automatically loads its central migrations. Run them in either consuming application with:

```bash
php artisan migrate
```

Seed the shared plans, roles, and permissions with:

```bash
php artisan db:seed --class="CentralSchema\\CentralSchema\\Database\\Seeders\\DatabaseSeeder"
```

## Usage

<!-- Add a basic usage example here. -->

## Contributing

Thank you for considering contributing to Central Schema! Please review our [contributing guide](.github/CONTRIBUTING.md) to get started.

## Credits

- [Kemal](https://github.com/corvus-project)
- [All Contributors](../../contributors)

## License

Central Schema is open-sourced software licensed under the [MIT license](LICENSE.md).
