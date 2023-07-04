<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CourseDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseStatusController extends Controller
{
    // public $table = "course_detail";
    use HasFactory;
    public function CourseDetail()
    {
        return $this->belongsTo(CourseDetail::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
