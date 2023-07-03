<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class categoryController extends Controller
{
    public function index($user){
        $categories = Category::all();
        $courses = Course::all();
        $courses = $courses->shuffle();
        $user = User::find($user);
        // $len = count($courses);
        // $courses = $courses[rand(1,$len)-1];
        return view('categories', compact('categories', 'courses' ,'user'));
    }
}
