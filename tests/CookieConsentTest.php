<?php

use Filament\Pages\Dashboard;
use Livewire\Livewire;

use function Pest\Livewire\livewire;

it('can render dashboard', function () {
    livewire(Dashboard::class)
        ->assertSuccessful();
});

it('can see cookie consent', function () {
    Livewire::test(Dashboard::class)
        ->assertSee('Allow cookies');
    //    livewire(Dashboard::class)
    //        ->assertSee('js-cookie-consent');
});
