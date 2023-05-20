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
                $this->call([
                    CourseSeeder::class,
                    CategorySeeder::class,
                    CourseDetailSeeder::class
                ]);
    }
}
