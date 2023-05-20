<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class courseController extends Controller
{
    public function index(){
        return view('test',[
            "kumpul_test" => Course::all()
        ]);
    }
}
