<?php

namespace MarcoGermani87\FilamentCookieConsent\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MarcoGermani87\FilamentCookieConsent\FilamentCookieConsent
 */
class FilamentCookieConsent extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MarcoGermani87\FilamentCookieConsent\FilamentCookieConsent::class;
    }
}
