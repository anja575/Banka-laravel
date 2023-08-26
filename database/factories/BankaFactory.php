<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banka>
 */
class BankaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'naziv' => $this->faker->unique()->company(),
            'adresa' => $this->faker->unique()->streetAddress(),
            'email' => $this->faker->unique()->companyEmail(),
            'sajt' => $this->faker->unique()->url(),
            'broj_telefona' => $this->faker->unique()->phoneNumber()
        ];
    }
}
