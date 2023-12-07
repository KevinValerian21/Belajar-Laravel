<?php

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



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Kevin Valerian",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit. Quia libero expedita magnam officia eveniet doloribus 
                        eaque, asperiores ducimus voluptas. Hic, eius alias magnam 
                        minima a tempora maiores deleniti molestiae expedita possimus 
                        distinctio! Aliquam error nostrum facilis sequi mollitia 
                        excepturi laborum. Itaque in unde beatae aspernatur enim iste 
                        nisi recusandae harum ipsa veritatis sequi libero dolore quod, 
                        nam quidem quae pariatur voluptates officia iusto voluptatum 
                        tempora? Voluptate, voluptatibus ex eum, quaerat ipsa delectus 
                        consequuntur at consequatur nisi veniam beatae! Beatae, eligendi?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jason",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit. Quia libero expedita magnam officia eveniet doloribus 
                        eaque, asperiores ducimus voluptas. Hic, eius alias magnam 
                        minima a tempora maiores deleniti molestiae expedita possimus 
                        distinctio! Aliquam error nostrum facilis sequi mollitia 
                        excepturi laborum. Itaque in unde beatae aspernatur enim iste 
                        nisi recusandae harum ipsa veritatis sequi libero dolore quod, 
                        nam quidem quae pariatur voluptates officia iusto voluptatum 
                        tempora? Voluptate, voluptatibus ex eum, quaerat ipsa delectus 
                        consequuntur at consequatur nisi veniam beatae! Beatae, eligendi?Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit. Quia libero expedita magnam officia eveniet doloribus 
                        eaque, asperiores ducimus voluptas. Hic, eius alias magnam 
                        minima a tempora maiores deleniti molestiae expedita possimus 
                        distinctio! Aliquam error nostrum facilis sequi mollitia 
                        excepturi laborum. Itaque in unde beatae aspernatur enim iste 
                        nisi recusandae harum ipsa veritatis sequi libero dolore quod, 
                        nam quidem quae pariatur voluptates officia iusto voluptatum 
                        tempora? Voluptate, voluptatibus ex eum, quaerat ipsa delectus 
                        consequuntur at consequatur nisi veniam beatae! Beatae, eligendi?"
        ],
    ];
    return view('blog', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});


//Halaman Single Posts
Route::get('posts/{slug}', function($slug){
    return view('blog');
});