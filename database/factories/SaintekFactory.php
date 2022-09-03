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
            'pilihan' => $this->faker->numberBetween(1, 5),
            'inggris' => $this->faker->numberBetween(1, 5),
            'ujian_lisan' => $this->faker->numberBetween(1, 5),
            'arab' => $this->faker->numberBetween(1, 5),
            'pemikiran' => $this->faker->numberBetween(1, 5),
            'pendanaan' => $this->faker->numberBetween(1, 5),
            'pendidikan_terakhir' => $this->faker->numberBetween(1, 5),
            'penghasilan' => $this->faker->numberBetween(1, 5),
        ];
    }
}
