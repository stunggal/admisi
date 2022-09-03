<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\humaniora>
 */
class HumanioraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->numberBetween(1, 900),
            'pengetahuan_umum' => $this->faker->numberBetween(1, 10),
            'kesanggupan' => $this->faker->numberBetween(1, 10),
            'pilihan' => $this->faker->numberBetween(1, 10),
            'inggris' => $this->faker->numberBetween(1, 10),
            'ujian_lisan' => $this->faker->numberBetween(1, 10),
            'arab' => $this->faker->numberBetween(1, 10),
            'pemikiran' => $this->faker->numberBetween(1, 10),
            'pendanaan' => $this->faker->numberBetween(1, 10),
            'pendidikan_terakhir' => $this->faker->numberBetween(1, 10),
            'penghasilan' => $this->faker->numberBetween(1, 10),
        ];
    }
}
