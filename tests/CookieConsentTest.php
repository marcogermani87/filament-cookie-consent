<?php

use Filament\Facades\Filament;
use Filament\Pages\Dashboard;
use Livewire\Livewire;
use MarcoGermani87\FilamentCookieConsent\Tests\Models\User;

use function Pest\Livewire\livewire;

beforeEach(function () {});

it('can render dashboard', function () {
    $this->actingAs(User::factory()->create());
    livewire(Dashboard::class)
        ->assertSuccessful();
});

// it('can see cookie consent', function () {
//    Livewire::withoutLazyLoading();
//    $this->get(Filament::getLoginUrl())
//        ->assertContent('Allow cookies');
// });
