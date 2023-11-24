<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            [
                'name' => 'Stdeve Jobs',
                'comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Excepturi, pariatur? ipsum dolor sit amet consectetur adipisicing elit.',
                'rate' => 4,
            ],
            [
                'name' => 'Elon Musk',
                'comment' => 'Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Neque? lorem ipsum dolor sit, amet consectetur, adipisicing elit.',
                'rate' => 5,
            ],
            [
                'name' => 'Mark Zuckerberg',
                'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea. ipsum dolor sit amet consectetur adipisicing elit.',
                'rate' => 5,
            ],
        ]);
    }
}
