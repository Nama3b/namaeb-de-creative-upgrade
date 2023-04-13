<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('languages')->insert([
            ['name' => 'PHP (Laravel)'],
            ['name' => 'PHP (Symfony)'],
            ['name' => 'PHP (Nova)'],
            ['name' => 'PHP core'],
        ]);
    }
}
