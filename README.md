# Laravel Tonic API Integration

[![Latest Version on Packagist](https://img.shields.io/packagist/v/eele/laravel-tonic.svg?style=flat-square)](https://packagist.org/packages/eele/laravel-tonic)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/eele/laravel-tonic/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/eele/laravel-tonic/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/eele/laravel-tonic/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/eele/laravel-tonic/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/eele/laravel-tonic.svg?style=flat-square)](https://packagist.org/packages/eele/laravel-tonic)

Tonic Integration for Laravel, using for my personal projects.
Use at your own risk.

## Installation

You can install the package via composer:

```bash
composer require eele/laravel-tonic
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-tonic-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-tonic-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-tonic-views"
```

## Usage

```php
$tonic = new Eele94\Tonic();
echo $tonic->echoPhrase('Hello, Eele94!');
```

### Integration generate api sdk
Using sdkgenerator

#### Tonic
sdkgenerator generate:sdk ./tonic-for-publishers-api-v4.json --type=openapi --name=Tonic --output=./app/Http/Integrations/Tonic --namespace=App\\Http\\Integrations\\Tonic

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [eele94](https://github.com/eele)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
