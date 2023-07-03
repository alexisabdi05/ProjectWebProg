<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseDetail;
use App\Models\Category;

class courseDetailController extends Controller
{
    public function index($id){
        $course = Course::find($id);
        $courseDetail = Course::find($id)->CourseDetail;
        $categories = Category::all();
        $category = $categories->where('id', $course->category_id);
        return view('coursedetail', compact('course','courseDetail','category'));
    }
}
