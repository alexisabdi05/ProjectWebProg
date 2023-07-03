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
                'CategoryName' => 'Adobe Photoshop',
                'CategoryIMG' => 'img/home_photoshop.png',
                'Color' => '#F46E59'
            ]);
        Category::create(
            [
                'CategoryName' => 'Adobe Ilustrator',
                'CategoryIMG' => 'img/home_illustrator.png',
                'Color' => '#57ABF1'
            ]);
        Category::create(
            [
                'CategoryName' => 'Canva',
                'CategoryIMG' => 'img/home_canva.png',
                'Color' => '#EECE63'
            ]);
        Category::create(
            [
                'CategoryName' => 'Graphic Design',
                'CategoryIMG' => 'img/home_graphic.png',
                'Color' => '#6169EF'
            ]);
        Category::create(
            [
                'CategoryName' => 'Logo Design',
                'CategoryIMG' => 'img/home_logo-design.png',
                'Color' =>'#EECE63'
            ]);
        Category::create(
            [
                'CategoryName' => 'Figure Draw',
                'CategoryIMG' => 'img/home_figure.png',
                'Color' =>'#6169EF'
            ]);
        Category::create(
            [
                'CategoryName' => 'Cartoon',
                'CategoryIMG' => 'img/home_cartoon.png',
                'Color' =>'#E58F58'
            ]);
        Category::create(
            [
                'CategoryName' => 'Color Theory',
                'CategoryIMG' => 'img/home_color-theory.png',
                'Color' =>'#F46E59'
            ]);
    }
}
