<?php

namespace MarcoGermani87\FilamentCookieConsent;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCookieConsentServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-cookie-consent';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-cookie-consent')
            ->hasConfigFile()
            ->hasViews();
    }
}
