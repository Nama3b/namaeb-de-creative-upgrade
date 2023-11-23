<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            'name' => 'Le Thanh Long',
            'email' => 'leethanhlong7890@gmail.com',
            'title' => "I'M IN THE DESIGN INDUSTRY WITH 22 YEARS OF EXPERIENCE.",
            'description' => "With a intern position i want to learning more knowledge,
            upgrade myself and i want to take advantages of IT skills & experience to become a official employee
            of the company to contribute my youth and brain matter to bring a lot value to company and your customers.
            From that, I will contribute to intern of your company.",
            'phone_number' => '0385233333',
            'address' => 'Ha Noi capital city.',
            'gender' => 1,
            'relate_url' => json_encode(["github" => "", "twitter" => "", "linkedin" => "", "profile_website" => ""]),
            'image' => 'https://scontent.fhan14-3.fna.fbcdn.net/v/t1.15752-9/403669435_875919380936417_1536252136765944219_n.jpg?stp=dst-jpg_s2048x2048&_nc_cat=104&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=W0gvWcdHqmYAX8F3Bfn&_nc_ht=scontent.fhan14-3.fna&oh=03_AdSONvomgq2AuuD1Wb_YNyftrd7VO9LpCnHOWa3ouzQB0g&oe=65866F11',
        ]);
    }
}
