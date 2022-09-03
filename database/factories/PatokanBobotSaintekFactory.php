<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\patokanBobotSaintek>
 */
class PatokanBobotSaintekFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kriteria' => $this->faker->unique()->randomElement(['Matematika', 'Fisika', 'Kimia', 'Biologi', 'Kesanggupan Studi', 'Pilihan Prodi', 'Bahasa Inggris', 'Ujian Lisan', 'Bahasa Arab', 'Pemikiran', 'Pendanaan', 'Pendidikan Terakhir', 'Penghasilan Perbulan']),
            'ti' => $this->faker->numberBetween(1, 5),
            'tip' => $this->faker->numberBetween(1, 5),
            'agro' => $this->faker->numberBetween(1, 5),
            'status' => $this->faker->randomElement(['cost', 'benefit']),
        ];
    }
}
