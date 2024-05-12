<?php

namespace MarcoGermani87\FilamentCookieConsent;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentCookieConsent
{
    public function getId(): string
    {
        return FilamentCookieConsentServiceProvider::$name;
    }

    public function register(Panel $panel): void
    {

    }

    public function boot(Panel $panel): void
    {
        $panel->renderHook(
                'panels::body.end',
                fn () => view('filament-cookie-consent.cookie'),
            );
    }

    public static function make(): static
    {
        return app(static::class);
    }
}
