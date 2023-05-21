<?php
use App\Http\Controllers\categoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\courseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('categories');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/ps', function () {
    return view('photoshop');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/colorpaletteoutput', function () {
    return view('coloroutput');
});

Route::get('/colorpalette', function () {
    return view('color');
});

Route::get('/test',[courseController::class,'index'] );
