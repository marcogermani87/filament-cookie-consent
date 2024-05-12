<?php

namespace MarcoGermani87\FilamentCookieConsent\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use MarcoGermani87\FilamentCookieConsent\Tests\Models\User;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
