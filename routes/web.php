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
    return view ('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "name" => "Wahyu ",
        "email" => "wahyunugroho@student.undip.ac.id",
        "img" => "wahyu.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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
    return view ('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});
//halaman single post

Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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

    foreach($blog_posts as $post){
        if($post["slug"]===$slug){
            $new_post  = $post; 
        }
    };
    return view ('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});


