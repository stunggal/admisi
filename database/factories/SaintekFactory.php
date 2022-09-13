<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\saintek>
 */
class SaintekFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'camaba_id' => $this->faker->unique()->numberBetween(1, 100),
            'matematika' => $this->faker->numberBetween(1, 5),
            'fisika' => $this->faker->numberBetween(1, 5),
            'kimia' => $this->faker->numberBetween(1, 5),
            'biologi' => $this->faker->numberBetween(1, 5),
            'kesanggupan' => $this->faker->numberBetween(1, 5),
            'inggris' => $this->faker->numberBetween(1, 5),
            'ujian_lisan' => $this->faker->numberBetween(1, 5),
            'arab' => $this->faker->numberBetween(1, 5),
            'pemikiran' => $this->faker->numberBetween(1, 5),
            'pendanaan' => $this->faker->numberBetween(1, 5),
            'pendidikan_terakhir' => $this->faker->numberBetween(1, 5),
            'penghasilan' => $this->faker->numberBetween(1, 5),

            // 'camaba_id' => $this->faker->randomElement(['5', '4', '3']),
            // 'matematika' => $this->faker->randomElement(['5', '4', '3']),
            // 'fisika' => $this->faker->randomElement(['5', '4', '3']),
            // 'kimia' => $this->faker->randomElement(['5', '4', '3']),
            // 'biologi' => $this->faker->randomElement(['5', '4', '3']),
            // 'pilihan' => $this->faker->randomElement(['5', '4', '3']),
            // 'inggris' => $this->faker->randomElement(['5', '4', '3']),
            // 'ujian_lisan' => $this->faker->randomElement(['5', '4', '3']),
            // 'arab' => $this->faker->randomElement(['5', '4', '3']),
            // 'ujian_lisan' => $this->faker->randomElement(['5', '4', '3']),
            // 'pemikiran' => $this->faker->randomElement(['5', '4', '3']),
            // 'pendanaan' => $this->faker->randomElement(['5', '4', '3']),
            // 'pendidikan_terakhir' => $this->faker->randomElement(['5', '4', '3']),
            // 'penghasilan' => $this->faker->randomElement(['5', '4', '3']),

        ];
    }
}
