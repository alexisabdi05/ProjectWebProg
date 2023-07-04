<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class courseController extends Controller
{
    
    public function index($user, $id){
        $user = User::find($user);
        $courses = Category::find($id)->Course;
        $category = Category::find($id);
        return view('courses', compact('courses','category', 'user'));
    }

    // public function show($user){
    //     $courses = Course::all();
    //     $user = User::find($user);
    //     $courses = $courses->shuffle();
    //     return view('search', compact('courses', 'user'));
    // }
    
}
