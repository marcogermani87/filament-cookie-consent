<?php

use Filament\Pages\Dashboard;

use function Pest\Livewire\livewire;

it('can render dashboard', function () {
    livewire(Dashboard::class)
        ->assertSuccessful();
});

it('can see cookie consent', function () {
    livewire(Dashboard::class)
        ->assertSee('js-cookie-consent');
});
