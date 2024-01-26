<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Auth;

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

    public function getMyPost(){
        // dd(request('search'));
        $getUser = Auth::user();
        $getPosts = Post::with(['user', 'category'])->where('user_id', $getUser->id)->latest();

        if(request('search')){
            $getPosts->where('title', 'like', '%' . request('search') . '%');
        }

        return view('dashboard.index', [
            'title' => 'My Post',
            'posts' => $getPosts->get(),
        ]);
    }

    public function getDashboardPost(Post $post){
        return view('dashboard.post.detail', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    public function storePostPage(){
        return view('dashboard.post.create', [
            'title' => 'Create New Post',
            'categories' => Category::all()
        ]);
    }

    public function storePost(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:50',
            'slug' => 'required|min:5|:max:50',
            'content' => 'required|min:50|max:1000',
            'category' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        $excerpt = $this->getExcerpt($request->content);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $postData = [
            'title' => $validatedData['title'],
            'slug' => $validatedData['slug'],
            'excerpt' => $excerpt,
            'body' => $validatedData['content'],
            'category_id' => $validatedData['category'],
            'img_url' => $validatedData['image'],
            'user_id' => Auth::user()->id,
            'published_at' => Carbon::now(),
        ];

        Post::create($postData);

        return redirect()->route('getMyPost');
    }

    public function getExcerpt($content){
        $excerpt = [];
        $len = strlen($content);
        if($len > 250){
            $len = 250;
        }
        for ($i=0; $i < $len; $i++) {
            $excerpt[$i] = $content[$i];
        }
        return implode("", $excerpt);
    }

    public function deletePost(Post $post){
        Post::destroy($post->id);

        return redirect()->route('getMyPost')->with('success', 'success deleted post');
    }

    public function editPostPage(Post $post){
        return view('dashboard.post.edit', [
            'title' => 'Edit' . $post->title,
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    public function editPost(Post $post, Request $request){
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:50',
            'slug' => 'required|min:5|:max:50',
            'content' => 'required|min:50|max:1000',
            'category' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        $excerpt = $this->getExcerpt($request->content);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $postData = [
            'title' => $validatedData['title'],
            'slug' => $validatedData['slug'],
            'excerpt' => $excerpt,
            'body' => $validatedData['content'],
            'category_id' => $validatedData['category'],
            'img_url' => $validatedData['image'],
            'user_id' => Auth::user()->id,
        ];

        Post::where('id', $post->id)->update($postData);

        return redirect()->route('editPostPage', ['post' => $postData['slug']])->with('success', 'success updated post');
    }
}
