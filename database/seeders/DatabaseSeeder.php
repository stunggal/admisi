<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\camaba;
use App\Models\humaniora;
use App\Models\patokan_bobot_saintek;
use App\Models\patokanBobotSaintek;
use App\Models\periode;
use App\Models\saintek;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        saintek::factory()->times(100)->create();
        humaniora::factory()->times(90)->create();
        camaba::factory(100)->create();
        periode::factory()->times(5)->create();
        patokanBobotSaintek::factory()->times(13)->create();
    }
}
