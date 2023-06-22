<?php
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\categoryController;
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

Route::get('/signin', function () {
    $user = NULL;
    return view('signin', compact('user'));
});

Route::get('/signup', function () {
    $user = NULL;
    return view('signup', compact('user'));
});

Route::post('/MakeUser', [userController::class, 'make']);
Route::post('/validateSignIn', [userController::class, 'validate']);


Route::get('/', function () {
    $user = NULL;
    return view('home', compact('user'));
});

Route::get('/{id}', function ($id) {
    $user = User::find($id);
    return view('home',  compact('user'));
});

Route::get('/{username}', function ($username) {
    $user = Admin::where('username', '=', $request->username)->get();
    return view('home',  compact('user'));
});


Route::get('/courses', function () {
    return view('courses');
});

Route::get('/ps', function () {
    return view('photoshop');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/profile/{id}', function ($id) {
    $user = User::find($id);
    return view('profile',  compact('user'));
});

Route::get('/colorpaletteoutput', function () {
    return view('coloroutput');
});

Route::get('/colorpalette', function () {
    return view('color');
});

Route::get('/courses/{id}', function ($id) {
    $user = User::find($id);
    return view('courses',  compact('user'));
});

Route::get('/ps/{id}', function ($id) {
    $user = User::find($id);
    return view('photoshop',  compact('user'));
});

Route::get('/categories/{id}', function ($id) {
    $user = User::find($id);
    return view('categories',  compact('user'));
});

Route::get('/colorpaletteoutput/{id}', function ($id) {
    $user = User::find($id);
    return view('coloroputput',  compact('user'));
});

Route::get('/colorpalette/{id}', function ($id) {
    $user = User::find($id);
    return view('color',  compact('user'));
});

Route::get('/test',[courseController::class,'index'] );
