<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseDetail;
use App\Models\Category;
use App\Models\User;

class courseDetailController extends Controller
{
    public function index($user, $id){
        $user = User::find($user);
        $course = Course::find($id);
        $courseDetail = Course::find($id)->CourseDetail;
        $category = Category::where('id', $course->category_id)->get();
        return view('coursedetail', compact('course','courseDetail','category', 'user'));
    }
}
