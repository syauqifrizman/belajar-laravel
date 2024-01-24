<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::get('/blog', [PostController::class, 'index']);

// halaman single posts
Route::get('blog/{post:slug}', [PostController::class, 'getPost']);

Route::get('categories/{category:slug}', [CategoryController::class, 'getAllPostCategory']);

Route::get('/categories', [CategoryController::class, 'getAllCategory']);
