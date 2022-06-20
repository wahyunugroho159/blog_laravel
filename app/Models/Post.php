<?php

namespace App\Models;


class Post 
{
    private static $blog_post = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Penulis Pertama",
            "body" => "
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam cum voluptates fuga mollitia enim, velit rerum eos! Cupiditate nulla perspiciatis, magnam deleniti autem esse mollitia minima dolorem eligendi sed eum, consectetur velit praesentium a quod doloremque deserunt incidunt id distinctio ex? Reprehenderit illum aliquid rem nam enim aut soluta similique."
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Penulis Kedua",
            "body" => "
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam cum voluptates fuga mollitia enim, velit rerum eos! Cupiditate nulla perspiciatis, magnam deleniti autem esse mollitia minima dolorem eligendi sed eum, consectetur velit praesentium a quod doloremque deserunt incidunt id distinctio ex? Reprehenderit illum aliquid rem nam enim aut soluta similique."
        ]
    ];
       
    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post  = $p; 
        //     }
        // };
        return $posts->firstWhere('slug', $slug);
    }
}
