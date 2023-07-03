<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class courseController extends Controller
{
    
    public function index($id, $user){
        $user = User::find($user);
        $courses = Category::find($id)->Course;
        $category = Category::find($id);
        return view('courses', compact('courses','category', 'user'));
    }

    public function show(){
        $courses = Course::all();
        $user = User::find($id);
        $courses = $courses->shuffle();
        return view('course', compact('courses', 'user'));
    }
    
}
