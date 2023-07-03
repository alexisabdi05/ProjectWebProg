<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class courseController extends Controller
{
    
    public function index($id){
        $courses = Category::find($id)->Course;
        $category = Category::find($id);
        return view('courses', compact('courses','category'));
    }

    public function show(){
        $courses = Course::all();
        $courses = $courses->shuffle();
        return view('course', compact('courses'));
    }
    
}
