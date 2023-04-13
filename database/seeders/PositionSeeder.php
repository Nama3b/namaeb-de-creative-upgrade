<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('positions')->insert([
            ['name' => 'GeneralAffairs'],
            ['name' => 'Project manager'],
            ['name' => 'Tech lead'],
            ['name' => 'Business Analyst'],
            ['name' => 'Back-end develop'],
            ['name' => 'Front-end develop'],
            ['name' => 'Designer'],
            ['name' => 'Tester'],
            ['name' => 'Comtor'],
            ['name' => 'HR']
        ]);
    }
}
