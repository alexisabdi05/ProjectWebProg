<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseDetail extends Model
{
    public $table = "course_detail";
    use HasFactory;
    public function Course()
    {
        return $this->belongsTo(Course::class);
    }

    public function CourseStatus()
    {
        return $this->hasMany(CourseStatus::class);
    }
}
