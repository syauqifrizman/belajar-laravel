<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function(){
   return view('about', [
    "title" => "About",
    "name" => "Syauqi Frizman",
    "email" => "syauqi@gmail.com",
    "image" => "syauqi.jpg"
   ]);
});

Route::get('/blog', function(){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Syauqi Frizman",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, debitis totam nulla corrupti similique natus quas ipsum neque, delectus nam culpa quae ipsam sapiente at dicta quibusdam sequi qui. Dolore necessitatibus, commodi asperiores beatae culpa quae corrupti facilis! Molestiae pariatur esse saepe, praesentium sit necessitatibus quod non temporibus nobis iure repellendus veritatis quis illum totam mollitia libero facere suscipit omnis, officiis maxime laboriosam sunt quidem iusto? Eveniet sequi provident repellendus vitae! Iure, rem veniam praesentium saepe et eius, assumenda eum ipsum sit ducimus itaque iusto! Nihil minus ex ab dolor quis modi atque nam ipsum rerum possimus. Qui, labore nobis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Uqisya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta placeat sint doloremque, voluptas accusamus vero officiis quo. Tempore nihil quia rem harum maiores id nobis sed similique consectetur expedita eos, cum nesciunt ipsum illum perspiciatis cupiditate voluptatibus laboriosam officia pariatur aspernatur facilis! Illo corrupti accusamus fuga animi atque porro ad ipsum perferendis. Voluptatum dolorum quis accusamus accusantium consequuntur maiores repellat."
        ],
    ];

    return view('blog', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single posts
Route::get('blog/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Syauqi Frizman",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, debitis totam nulla corrupti similique natus quas ipsum neque, delectus nam culpa quae ipsam sapiente at dicta quibusdam sequi qui. Dolore necessitatibus, commodi asperiores beatae culpa quae corrupti facilis! Molestiae pariatur esse saepe, praesentium sit necessitatibus quod non temporibus nobis iure repellendus veritatis quis illum totam mollitia libero facere suscipit omnis, officiis maxime laboriosam sunt quidem iusto? Eveniet sequi provident repellendus vitae! Iure, rem veniam praesentium saepe et eius, assumenda eum ipsum sit ducimus itaque iusto! Nihil minus ex ab dolor quis modi atque nam ipsum rerum possimus. Qui, labore nobis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Uqisya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta placeat sint doloremque, voluptas accusamus vero officiis quo. Tempore nihil quia rem harum maiores id nobis sed similique consectetur expedita eos, cum nesciunt ipsum illum perspiciatis cupiditate voluptatibus laboriosam officia pariatur aspernatur facilis! Illo corrupti accusamus fuga animi atque porro ad ipsum perferendis. Voluptatum dolorum quis accusamus accusantium consequuntur maiores repellat."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
