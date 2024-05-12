<?php

namespace MarcoGermani87\FilamentCookieConsent;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\Facades\Config;

class FilamentCookieConsent implements Plugin
{
    public function getId(): string
    {
        return FilamentCookieConsentServiceProvider::$name;
    }

    public function register(Panel $panel): void
    {
        $position = Config::get('filament-cookie-consent.position') ?? 'end';
        $panel->renderHook(
            $position == 'start' ? PanelsRenderHook::HEAD_START : PanelsRenderHook::BODY_END,
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
