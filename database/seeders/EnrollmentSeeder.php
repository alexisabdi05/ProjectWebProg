<?php

namespace Database\Seeders;
use App\Models\Enrollment;
use App\Models\CourseStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Enrollment::create([
            'user_id' => 1,
            'course_id' => 1
        ]);
        Enrollment::create([
            'user_id' => 1,
            'course_id' => 2
        ]);

        for ($i=1; $i <= 117; $i++) {
            CourseStatus::create([
                'user_id' => 1,
            'coursedetail_id'=> $i
            ]);
        };
        CourseStatus::create([
            'user_id'=>1,
            'coursedetail_id'=>1,
            'status'=>TRUE
        ]);
        CourseStatus::create([
            'user_id'=>1,
            'coursedetail_id'=>2,
            'status'=>TRUE
        ]);
        CourseStatus::create([
            'user_id'=>1,
            'coursedetail_id'=>3,
            'status'=>TRUE
        ]);
        CourseStatus::create([
            'user_id'=>1,
            'coursedetail_id'=>6,
            'status'=>TRUE
        ]);
        CourseStatus::create([
            'user_id'=>1,
            'coursedetail_id'=>7,
            'status'=>TRUE
        ]);
    }
}
