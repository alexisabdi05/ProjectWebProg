<?php
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\userController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\courseDetailController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ColorPaletteController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\GoogleAuthController;
use Laravel\Socialite\Facades\Socialite;
// use GuzzleHttp\Client;

// $client = new Client([
//     'verify' => false,
// ]);


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
Route::get('/signin', [userController::class, 'index'])->name('signin')->middleware('guest');
Route::post('/signin', [userController::class, 'validate']);
Route::get('/logout', [userController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('/signup', [userController::class, 'signup'])->name('signup')->middleware('guest');

Route::post('/MakeUser', [userController::class, 'make']);
// Route::post('/validateSignIn', [userController::class, 'validate']);


Route::get('/home', [userController::class, 'home'])->name('home')->middleware('auth');

Route::get('/courses', [userController::class, 'courses'])->middleware('auth');

Route::get('/colorpalette', [userController::class, 'colorpalette'])->middleware('auth');

Route::get('/achievement', [userController::class, 'achievement'])->middleware('auth');



Route::get('/categories', [categoryController::class, 'index'])->middleware('auth');
Route::get('/categories/{id}', [courseController::class, 'index'])->middleware('auth');
Route::get('/courses/{id}', [courseDetailController::class, 'index'])->middleware('auth');

// Route::get('/ps', function () {
//     return view('photoshop');
// });


// Route::get('{user}/categories', [categoryController::class, 'index']);
// Route::get('{user}/categories/{id}', [courseController::class, 'index']);
// Route::get('{user}/search', [courseController::class, 'show']);
// Route::get('/search-result', function(){
//     return view('search');
// });
// Route::get('{user}/courses/{id}', [courseDetailController::class, 'index']);
Route::post('/update-checkbox', [courseDetailController::class,'updateCheckbox']);

Route::get('/search', [SearchController::class, 'index'])->name('search.index')->middleware('auth');
Route::get('/search/result', [SearchController::class, 'liveSearch'])->name('live-search')->middleware('auth');
Route::get('/profile', [userController::class, 'profile'])->middleware('auth');



Route::get('/colorpaletteoutput', function () {
    $user = User::find();
    return view('coloroputput',  compact('user'));
});

Route::get('/', function () {
    return redirect('/signin');
});

Route::post('/generate-color-palette', [ColorPaletteController::class, 'generateColorPalette']);


Route::get('{id}/achievement/', function ($id) {
    $user = User::find($id);
    return view('achievement',  compact('user'));
});


Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');

Route::get('/auth/google/callback', [GoogleAuthController::class, 'callbackGoogle']);
