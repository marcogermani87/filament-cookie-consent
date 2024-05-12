<?php

namespace MarcoGermani87\FilamentCookieConsent;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentCookieConsent implements Plugin
{
    public function getId(): string
    {
        return FilamentCookieConsentServiceProvider::$name;
    }

    public function register(Panel $panel): void
    {
        $panel->renderHook(
            'panels::body.end',
            fn () => view('filament-cookie-consent::index'),
        );
    }

    public function boot(Panel $panel): void
    {

    }

    public static function make(): static
    {
        return app(static::class);
    }
}
