<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Banka;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Radnik>
 */
class RadnikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pozicije = ['Blagajnik', 'Likvidator', 'Sef saltera'];
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'email' => $this->faker->unique()->email(),
            'broj_telefona' => $this->faker->unique()->phoneNumber(),
            'pozicija' => $this->faker->randomElement($pozicije),
            'banka_id' => Banka::factory()
    
        ];
    }
}
