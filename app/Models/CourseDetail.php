<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    use HasFactory;
    public function Course()
    {
        return $this->belongsTo(Course::class,'CourseID', 'CourseID');
    }
}
