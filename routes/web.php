<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Kevin Valerian",
        "email" => "kevinvalerian@gmail.com",
        "image" => "trip.jpg"
    ]);
});



Route::get('/blog', [PostController::class, "index"]);


//Halaman Single Posts
Route::get('blog/{slug}', [PostController::class, "show"]);