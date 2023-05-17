<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('course')->insert(
            [
                'CategoryID' => 1,
                'CourseName' => 'Welcome to 5 Days of Photoshop!',
                'CourseDesc' => "Welcome to 5 Days of Photoshop! For the next 5 days we'll be exploring the magic of Photoshop, from the most common tools and techniques, to professional skills, to photo retouching and compositing! Visit PHLEARN.com to download the calendar and schedule. It's never been a better time to learn Photoshop! We'll see you tomorrow.",
                'CourseIMG' => 'kosong',
                'author' => 'PH Learn'
            ]
        );
        DB::table('course')->insert(
            [
                'CategoryID' => 1,
                'CourseName' => 'Another 3 Days of Photoshop',
                'CourseDesc' => "Welcome to Another 3 Days of Photoshop! This course is a continuation of the previous course. For the next 3 days we'll be exploring the magic of Photoshop, from the most common tools and techniques, to professional skills, to photo retouching and compositing! It's never been a better time to learn Photoshop! We'll see you tomorrow.",
                'CourseIMG' => '-',
                'author' => 'PH Learn'
            ]
        );
        DB::table('course')->insert(
            [
                'CategoryID' => 1,
                'CourseName' => 'Photoshop Effect Tutorials',
                'CourseDesc' => "Lorem~",
                'CourseIMG' => '-',
                'author' => 'Photoshop Tutorials'
            ]
        );
        DB::table('course')->insert(
            [
                'CategoryID' => 2,
                'CourseName' => 'Learn Adobe Illustrator',
                'CourseDesc' => "On this course I will be introducing you to the program and covering some essential practice exercises. Then I will be demonstrating how to create a small project in Adobe Illustrator from start to finish. To help break down the process I have structured the course in 3 main sections: INTRODUCTION, ESSENTIAL PRACTISE , TEST PROJECT. Along the way we will be covering many topics, such as how to set up your document, understand how the program works, use text in Illustrator, prepare and import images into Illustrator and finally export your document ready for print. ",
                'CourseIMG' => '-',
                'author' => 'Gareth David Studio'
            ]
        );
        DB::table('course')->insert(
            [
                'CategoryID' => 2,
                'CourseName' => 'Adobe Illustrator Tutorials',
                'CourseDesc' => "Lorem~ ",
                'CourseIMG' => '-',
                'author' => 'tutvid'
            ]
        );
        DB::table('course')->insert(
            [
                'CategoryID' => 2,
                'CourseName' => 'Adobe Illustrator CC Flat Illustration Tutorial',
                'CourseDesc' => "Lorem~ ",
                'CourseIMG' => '-',
                'author' => 'How to Graphic Design'
            ]
        );
        DB::table('course')->insert(
            [
                'CategoryID' => 3,
                'CourseName' => 'Canva: Graphic Design for Beginners',
                'CourseDesc' => "Easy and basic Canva tutorials for beginners to start designing with Canva. All the essentials you should know in order to start using Canva and our best tips for you to create awesome, beautiful, and engaging designs, even if you haven't done it before, never-ever!
                ",
                'CourseIMG' => '-',
                'author' => 'Design with Canva'
            ]
        );
    }
}
