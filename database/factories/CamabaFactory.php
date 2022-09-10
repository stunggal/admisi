<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\camaba>
 */
class CamabaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'nama' => $this->faker->randomElement(['Siraj Hammam Ahmad', 'Hanafie Rizal', 'Muhammad alwi']),
            'nama' => $this->faker->name,
            'prodi1' => $this->faker->randomElement(['Teknik Informatika', 'Teknik Industri Pertanian', 'Agroteknologi', 'Hubungan International', 'Ilmu Komunikasi', 'Studi Agama-agama', 'Aqidah Filsafat Islam', 'Ilmu Quran dan Tafsir', 'Kesehatan Keselamatan Kerja', 'Farmasi', 'Gizi', 'Pendidkan Bahasa Arab', 'Pendidikan Agama Islam', 'Tadris Bahasa Inggris', 'Hukum Ekonomi Syariah', 'Perbandingan Madzhab', 'Ekonomi Islam', 'Management']),
            'prodi2' => $this->faker->randomElement(['Teknik Informatika', 'Teknik Industri Pertanian', 'Agroteknologi', 'Hubungan International', 'Ilmu Komunikasi', 'Studi Agama-agama', 'Aqidah Filsafat Islam', 'Ilmu Quran dan Tafsir', 'Kesehatan Keselamatan Kerja', 'Farmasi', 'Gizi', 'Pendidkan Bahasa Arab', 'Pendidikan Agama Islam', 'Tadris Bahasa Inggris', 'Hukum Ekonomi Syariah', 'Perbandingan Madzhab', 'Ekonomi Islam', 'Management']),
            'prodi3' => $this->faker->randomElement(['Teknik Informatika', 'Teknik Industri Pertanian', 'Agroteknologi', 'Hubungan International', 'Ilmu Komunikasi', 'Studi Agama-agama', 'Aqidah Filsafat Islam', 'Ilmu Quran dan Tafsir', 'Kesehatan Keselamatan Kerja', 'Farmasi', 'Gizi', 'Pendidkan Bahasa Arab', 'Pendidikan Agama Islam', 'Tadris Bahasa Inggris', 'Hukum Ekonomi Syariah', 'Perbandingan Madzhab', 'Ekonomi Islam', 'Management']),
            'periode' => $this->faker->randomElement(['20191', '20192', '20201']),
        ];
    }
}
