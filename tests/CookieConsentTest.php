<?php

use Livewire\Livewire;
use Filament\Pages\Dashboard;

use function Pest\Livewire\livewire;

it('can render dashboard', function () {
    livewire(Dashboard::class)
        ->assertSuccessful();
});

it('can see cookie consent', function () {
    Livewire::withoutLazyLoading();
    livewire(Dashboard::class)
        ->assertSee('Allow cookies');
});
