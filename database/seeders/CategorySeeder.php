<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert(
            [
                'CategoryName' => 'Photoshop',
                'CategoryIMG' => 'img/home_photoshop.png'
            ]);
            DB::table('category')->insert(
                [
                    'CategoryName' => 'Adobe Ilustrator',
                    'CategoryIMG' => 'img/home_ilustrator.png'
                ]);
            DB::table('category')->insert(
                [
                    'CategoryName' => 'Canva',
                    'CategoryIMG' => 'img/home_canva.png'
                ]);
            DB::table('category')->insert(
                [
                    'CategoryName' => 'Graphic Design',
                    'CategoryIMG' => 'img/home_graphic.png'
                ]);
            DB::table('category')->insert(
                [
                    'CategoryName' => 'Logo Design',
                    'CategoryIMG' => 'img/home_logo-design.png'
                ]);
            DB::table('category')->insert(
                [
                    'CategoryName' => 'Figure Draw',
                    'CategoryIMG' => 'img/home_figure.png'
                ]);
            DB::table('category')->insert(
                [
                    'CategoryName' => 'Cartoon',
                    'CategoryIMG' => 'img/home_photoshop.png'
                ]);
            DB::table('category')->insert(
                [
                    'CategoryName' => 'Color Theory',
                    'CategoryIMG' => 'img/home_color-theory.png'
                ]);
    }
}
