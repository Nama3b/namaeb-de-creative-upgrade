<?php

namespace Database\Seeders;

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
                'technology_using' => json_encode(["Front-end" => "HTML, CSS, Js.", "Back-end" => "PHP core, MySQL."])
            ],
            [
                'introduce' => 'PHP: Laravel framework',
                'title' => 'ProjectN (PHP Laravel)',
                'content' => 'A e-commerce website, buy and sell the hottest sneakers, clothes, watches and accessories',
                'position_id' => 5,
                'level_id' => 5,
                'technology_using' => json_encode(["Front-end" => "HTML, CSS, Js.", "Back-end" => "PHP, Laravel Framework, MySQL."])
            ],
            [
                'introduce' => 'Back-end web developer at Entetsu Vietnam',
                'title' => 'Assist be (PHP Laravel)',
                'content' => 'A simple CMS site for supporting old people',
                'position_id' => 5,
                'level_id' => 4,
                'technology_using' => json_encode(["Front-end" => "", "Back-end" => "PHP, Laravel Framework, MySQL."])
            ],
            [
                'introduce' => 'Back-end web developer at Entetsu Vietnam',
                'title' => 'EC cube (PHP Symfony)',
                'content' => 'Upgrade old project to new version, optimize new code with old version, move a large user data',
                'position_id' => 5,
                'level_id' => 3,
                'technology_using' => json_encode(["Front-end" => "", "Back-end" => "Symfony Framework, EC cube Framework, MySQL."])
            ],
            [
                'introduce' => 'Back-end web developer at Entetsu Vietnam',
                'title' => 'LINE bus (PHP Laravel)',
                'content' => 'A CMS manager a driver holiday and plan',
                'position_id' => 5,
                'level_id' => 3,
                'technology_using' => json_encode(["Front-end" => "", "Back-end" => "Laravel Framework, MySQL."])
            ],
        ]);
    }
}
