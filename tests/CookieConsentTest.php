<?php

use Filament\Pages\Dashboard;

use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\assertModelExists;
use function Pest\Livewire\livewire;
use function PHPUnit\Framework\assertEquals;

it('can render dashboard', function () {
    livewire(Dashboard::class)
        ->assertSuccessful();
});

it('can see cookie consent', function () {
    livewire(Dashboard::class)
        ->assertSee('js-cookie-consent');
});
