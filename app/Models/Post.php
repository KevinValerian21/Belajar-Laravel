<?php

namespace App\Models;

class Post{
    private static $blog_posts = [
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

    public static function all(){
        return collect(self::$blog_posts);
    }


    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
