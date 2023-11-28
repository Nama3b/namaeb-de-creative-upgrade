<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('educations')->insert([
            [
                'title' => 'BACHELOR DEGREE',
                'content' => json_encode([
                    '1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, soluta. Lorem ipsum dolor sit amet consectetur adipisicing, elit.',
                    '2' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, eum a! Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
                    '3' => 'Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Error, natus, obcaecati? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor, consectetur.',
                    '4' => 'Lorem ipsum consectetur adipisicing elit. Voluptatum, eos fugiat. Lorem ipsum, dolor sit amet consectetur adipisicing elit.'
                    ]),
                'certificate' => 'Bachkhoa-aptech, Viet Nam',
                'start_date' => Carbon::create('2018','6'),
                'end_date' => Carbon::create('2021','6')
            ],
            [
                'title' => 'MSC OF INTERNATIONAL INNOVATION (COMPUTER SCIENCE PATHWAY)',
                'content' => json_encode([
                    '1' => 'Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Accusamus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem, ipsum, dolor.',
                    '2' => 'Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Dolor, minima. Lorem ipsum dolor sit, amet consectetur, adipisicing elit.',
                    '3' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, ad officiis expedita. Lorem ipsum dolor sit amet consectetur adipisicing elit.'
                ]),
                'certificate' => 'Goethe University Frankfurt, Germany',
                'start_date' => Carbon::create('2021','6'),
                'end_date' => Carbon::create('2022','6')
            ],
        ]);
    }
}
