<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\periode>
 */
class PeriodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'periode' => $this->faker->randomNumber(4, true),
            'periode' => $this->faker->randomElement(['20191', '20192', '20201', '20202']),
            'status' => $this->faker->randomElement(['aktif', 'nonaktif']),
        ];
    }
}
