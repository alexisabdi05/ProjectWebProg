<?php
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\userController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\courseDetailController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ColorPaletteController;
use App\Http\Controllers\searchController;
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

// Route::fallback(function () {
//     return '';
// });

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


// Route::get('/home', function () {
//     $user = NULL;
//     return view('home', compact('user'));
// });

Route::get('{id}/home/', function ($id) {
    $user = User::find($id);
    return view('home',  compact('user'));
})->name('home');

// Route::get('/{username}', function ($username) {
//     $user = Admin::where('username', '=', $request->username)->get();
//     return view('home',  compact('user'));
// });


Route::get('/courses', function () {
    return view('courses');
});


// Route::get('/ps', function () {
//     return view('photoshop');
// });


Route::get('{user}/categories', [categoryController::class, 'index']);
Route::get('{user}/categories/{id}', [courseController::class, 'index']);
// Route::get('{user}/search', [courseController::class, 'show']);
Route::get('{user}/courses/{id}', [courseDetailController::class, 'index']);
Route::post('/update-checkbox', [courseDetailController::class,'updateCheckbox']);

Route::get('/search', [SearchController::class, 'index'])->name('search.index');
Route::get('/search/result', [SearchController::class, 'liveSearch'])->name('live-search');


Route::get('/search-result', function(){
    return view('search');
});

Route::get('{id}/profile/', function ($id) {
    $user = User::find($id);
    return view('profile',  compact('user'));
});

// Route::get('/colorpaletteoutput', function () {
//     $colorPalette = NULL;
//     return view('coloroutput', compact('colorPalette'));
// });

// Route::get('/colorpalette', function () {
//     return view('color');
// });

// Route::get('/courses/', function ($id) {
//     $user = User::find($id);
//     return view('courses',  compact('user'));
// });

// Route::get('/ps/', function ($id) {
//     $user = User::find($id);
//     return view('photoshop',  compact('user'));
// });

// Route::get('/categories/', function ($id) {
//     $user = User::find($id);
//     return view('categories',  compact('user'));
// });

Route::get('{id}/colorpaletteoutput/', function ($id) {
    $user = User::find($id);
    return view('coloroputput',  compact('user'));
});

Route::get('{id}/colorpalette/', function ($id) {
    $user = User::find($id);
    $output = NULL;
    return view('color',  compact('user', 'output'));
});

// Route::post('/generate-color-palette', [ColorPaletteController::class, 'generateColorPalette']);


Route::post('/outputcolorgenerate', function (Request $request) {
    $output = $request->all();
    return redirect('/color');
});


Route::get('/test', function () {
    $colorPalette = NULL;
    return view('test', compact('colorPalette'));
});

// Route::fallback(function () {
//     // Mengembalikan respons kosong tanpa output apapun
//     return '';
// });

// routes/web.php

Route::get('/', function () {
    return view('test');
});

Route::post('/generate-color-palette', [ColorPaletteController::class, 'generateColorPalette']);


// Route::get('/achievement', function () {
//     return view('achievement');
// });
