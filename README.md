<p class="filament-hidden">
<img src="https://banners.beyondco.de/filament-cookie-consent.png?theme=light&packageManager=composer+require&packageName=marcogermani87%2Ffilament-cookie-consent&pattern=architect&style=style_1&description=Easy+cookie+consent+integrations+for+Filament&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg" class="filament-hidden">
</p>

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marcogermani87/filament-cookie-consent.svg?style=flat-square)](https://packagist.org/packages/marcogermani87/filament-cookie-consent)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/marcogermani87/filament-cookie-consent/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/:vendor_slug/filament-cookie-consent/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/marcogermani87/filament-cookie-consent/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/:vendor_slug/filament-cookie-consent/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marcogermani87/filament-cookie-consent.svg?style=flat-square)](https://packagist.org/packages/marcogermani87/filament-cookie-consent)

A package to easily include cookie consent in [Filament](https://filamentphp.com).

This project is based on [spatie/laravel-cookie-consent](https://github.com/spatie/laravel-cookie-consent) package.

## Version Compatibility

| Plugin  | Filament | Laravel | PHP |
| ------------- | ------------- | ------------- | -------------|
| 1.x  | 3.x  | 10.x | 8.x |
| 1.x  | 3.x  | 11.x | 8.2 \| 8.3 |

## Installation

You can install the package via composer:

```bash
composer require marcogermani87/filament-cookie-consent
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag=":filament-cookie-consent-config"
```

This is the contents of the published config file:

```php
return [
    'consent_button' => [
        'size' => 'sm',
        'color' => 'warning',
    ],

    'privacy_policy_button' => [
        'href' => '/privacy-policy',
        'size' => 'sm',
        'color' => 'gray',
        'target' => '_blank',
    ],
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-cookie-consent-views"
```

## Usage

Register the plugin through your panel service provider:

```php
->plugin(\MarcoGermani87\FilamentCookieConsent\FilamentCookieConsent::make())
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

If you discover any security-related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Marco Germani](https://github.com/marcogermani87)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
