<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Radnik;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transakcija>
 */
class TransakcijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $vrste_transakcija = ['Prenos novca', 'Uplata', 'Isplata', 'Placanje', 'Konverzija valute'];
        return [
            'sifra' => $this->faker->numberBetween(1000, 9999),
            'naziv' => $this->faker->randomElement($vrste_transakcija),
            'korisnik' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'radnik_id' => Radnik::factory()
        ];
    }
}
