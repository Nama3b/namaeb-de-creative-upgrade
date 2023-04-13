<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('levels')->insert([
            ['name' => 'Senior'],
            ['name' => 'Middle'],
            ['name' => 'Junior'],
            ['name' => 'Fresher'],
            ['name' => 'Intern']
        ]);
    }
}
