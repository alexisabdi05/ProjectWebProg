<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class courseController extends Controller
{

    public function index($id){
        $courses = Course::where('category_id',$id)->get();
        $category = Category::find($id);
        return view('courses', compact('courses','category'));
    }

}
