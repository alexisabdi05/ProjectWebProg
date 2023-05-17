<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseDetail;
use App\Models\Enrollment;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create(
            [
                'CategoryName' => 'Photoshop',
                'CategoryIMG' => 'img/home_photoshop.png'
            ]);
            Category::create(
                [
                    'CategoryName' => 'Adobe Ilustrator',
                    'CategoryIMG' => 'img/home_ilustrator.png'
                ]);
            Category::create(
                [
                    'CategoryName' => 'Canva',
                    'CategoryIMG' => 'img/home_canva.png'
                ]);
            Category::create(
                [
                    'CategoryName' => 'Graphic Design',
                    'CategoryIMG' => 'img/home_graphic.png'
                ]);
            Category::create(
                [
                    'CategoryName' => 'Logo Design',
                    'CategoryIMG' => 'img/home_logo-design.png'
                ]);
            Category::create(
                [
                    'CategoryName' => 'Figure Draw',
                    'CategoryIMG' => 'img/home_figure.png'
                ]);
            Category::create(
                [
                    'CategoryName' => 'Cartoon',
                    'CategoryIMG' => 'img/home_photoshop.png'
                ]);
            Category::create(
                [
                    'CategoryName' => 'Color Theory',
                    'CategoryIMG' => 'img/home_color-theory.png'
                ]);
            Course::create(
                []
            );
    }
}
