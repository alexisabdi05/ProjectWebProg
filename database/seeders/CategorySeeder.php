<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
