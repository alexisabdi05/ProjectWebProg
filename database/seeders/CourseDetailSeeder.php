<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('course')->insert(
            [
                'CategoryID' => 8,
                'CourseName' => 'Color Theory',
                'CourseDesc' => "'Color Theory' is an insightful YouTube playlist that dives deep into the captivating world of colors and their significance in art, design, and visual communication. This comprehensive series of videos provides a thorough exploration of color theory, making it an invaluable resource for artists, designers, and enthusiasts alike.
                ",
                'CourseIMG' => '-',
                'author' => "The Future Academy"
            ]
        );
    }
}
