<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('blog', [
            "title" => "Posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get(),
        ]);
    }

    public function getPost(Post $post){
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
