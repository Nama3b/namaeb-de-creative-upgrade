<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experiences')->insert([
            [
                'introduce' => 'PHP core',
                'title' => 'EngZ0N3 (PHP core)',
                'content' => " A free website for helping people learning English and it's have shopping book service, blog post service, admin manager dashboard and more features.",
                'position_id' => 5,
                'level_id' => 5,
                'technology_using' => json_encode(["FE" => "HTML, CSS, Js.", "BE" => "PHP core, MySQL."]),
                'start_date' => Carbon::create('2020','6'),
                'end_date' => Carbon::create('2020','9')
            ],
            [
                'introduce' => 'PHP: Laravel framework',
                'title' => 'ProjectN (PHP Laravel)',
                'content' => 'A e-commerce website, buy and sell the hottest sneakers, clothes, watches and accessories',
                'position_id' => 5,
                'level_id' => 5,
                'technology_using' => json_encode(["FE" => "HTML, CSS, Js.", "BE" => "PHP, Laravel Framework, MySQL."]),
                'start_date' => Carbon::create('2021','3'),
                'end_date' => Carbon::create('2021','6')
            ],
            [
                'introduce' => 'Back-end web developer at Entetsu Vietnam',
                'title' => 'Assist be (PHP Laravel)',
                'content' => 'A simple CMS site for supporting old people',
                'position_id' => 5,
                'level_id' => 4,
                'technology_using' => json_encode(["FE" => "", "BE" => "PHP, Laravel Framework, MySQL."]),
                'start_date' => Carbon::create('2022','6'),
                'end_date' => Carbon::create('2022','9')
            ],
            [
                'introduce' => 'Back-end web developer at Entetsu Vietnam',
                'title' => 'EC cube (PHP Symfony)',
                'content' => 'Upgrade old project to new version, optimize new code with old version, move a large user data',
                'position_id' => 5,
                'level_id' => 3,
                'technology_using' => json_encode(["FE" => "", "BE" => "Symfony Framework, EC cube Framework, MySQL."]),
                'start_date' => Carbon::create('2022','10'),
                'end_date' => Carbon::create('2023','4')
            ],
            [
                'introduce' => 'Back-end web developer at Entetsu Vietnam',
                'title' => 'LINE bus (PHP Laravel)',
                'content' => 'A CMS manager a driver holiday and plan',
                'position_id' => 5,
                'level_id' => 3,
                'technology_using' => json_encode(["FE" => "", "BE" => "Laravel Framework, MySQL."]),
                'start_date' => Carbon::create('2021','6'),
                'end_date' => Carbon::create('2022','12')
            ],
        ]);
    }
}
