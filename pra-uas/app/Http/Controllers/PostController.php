<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class PostController extends Controller
{
    public function index(){
        // dd(request('search'));
       $posts = Post::with(['user', 'category'])->latest();

       if(request('search')){
        $posts->where('title', 'like', '%' . request('search') . '%');
       }

        return view('blog', [
            "title" => "Posts",
            // "posts" => Post::all()
            "posts" => $posts->get(),
        ]);
    }

    public function getPost(Post $post){
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
