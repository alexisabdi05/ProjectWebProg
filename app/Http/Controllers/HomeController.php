<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function home(){
        $courses = Course::all();
        $courses = $courses->shuffle();
        // $len = count($courses);
        // $courses = $courses[rand(1,$len)-1];
        return view('home', compact('courses'));
    }
}
