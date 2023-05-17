<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(){
        return view('test',[
            "kumpul_test" => Category::all()
        ]);
    }
}
