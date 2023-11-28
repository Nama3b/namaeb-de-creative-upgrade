<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            LevelSeeder::class,
            LanguageSeeder::class,
            PositionSeeder::class,
            AboutSeeder::class,
            ServiceSeeder::class,
            ExperienceSeeder::class,
            EducationSeeder::class,
            ClientSeeder::class,

        ]);
    }
}
