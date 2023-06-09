<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use App\Models\Enrollment;
use App\Models\CourseDetail;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\CourseSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\EnrollmentSeeder;
use Database\Seeders\CourseDetailSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
                $this->call([
                    UserSeeder::class,
                    AdminSeeder::class,
                    CategorySeeder::class,
                    CourseSeeder::class,
                    CourseDetailSeeder::class,
                ]);
    }
}
