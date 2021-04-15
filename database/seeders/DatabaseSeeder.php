<?php

namespace Database\Seeders;

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
        $this->call([
            UsersTableSeeder::class,
            HuisTableSeeder::class,
            // SensorTableSeeder::class,
            PaniekTableSeeder::class,
            TemperatuurTableSeeder::class,
            VochtigheidTableSeeder::class,
            BeveiligingTableSeeder::class
        ]);
    }
}
