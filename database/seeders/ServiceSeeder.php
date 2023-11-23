<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'title' => 'Web Design',
                'content' => 'My knowledge: I had experience to work with HTML, CSS, MySQL, Docker, PHP and Laravel, Symfony framework. I had worked with EC-cube an open source CMS developed by Japan to solve the problem of e-commerce base on symfony framework for half year',
                'image_thumbnail' => 'image/web_design.png'
            ],
            [
                'title' => 'Development',
                'content' => 'PHP is my main language and i want to learn and develop intensively on it.',
                'image_thumbnail' => 'image/Web_Development.png'
            ],
            [
                'title' => 'SEO Friendly',
                'content' => "Still learn about it and haven't experience to do with SEO.",
                'image_thumbnail' => 'image/Seo.png'
            ],
            [
                'title' => 'Graphic Design',
                'content' => 'I know how to use basic figma like cut and edit html, css.',
                'image_thumbnail' => 'image/Graphics_Design.png'
            ],
            [
                'title' => 'Support',
                'content' => "I'll do my best just count on me and give me a chance.",
                'image_thumbnail' => 'image/support.png'
            ],
            [
                'title' => 'Responsive Design',
                'content' => 'Almostly is css and a little js.',
                'image_thumbnail' => 'image/Responsive.png'
            ],
        ]);
    }
}
