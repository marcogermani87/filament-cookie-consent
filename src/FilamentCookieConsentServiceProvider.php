<?php

namespace MarcoGermani87\FilamentCookieConsent;

use Illuminate\Contracts\View\View;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Support\Facades\Cookie;
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
            ->hasViews()
            ->hasTranslations()
            ->hasViewComposer('filament-cookie-consent::index', function (View $view) {
                $cookieConsentConfig = config('cookie-consent');
                $pluginConfig = config('filament-cookie-consent');
                $alreadyConsentedWithCookies = Cookie::has($cookieConsentConfig['cookie_name']);
                $view->with(compact(
                    'alreadyConsentedWithCookies',
                    'cookieConsentConfig',
                    'pluginConfig',
                ));
            });
    }
}
