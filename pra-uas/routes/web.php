<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/authors', [UserController::class, 'getAllUser'])->name('listAuthorPage');

Route::get('/about/{author:username}', [UserController::class, 'getUserData']);

Route::get('/blog', [PostController::class, 'index'])->name('blogPage');

// halaman single posts
Route::get('/blog/{post:slug}', [PostController::class, 'getPost']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'getAllPostCategory']);

Route::get('/categories', [CategoryController::class, 'getAllCategory'])->name('listCategoryPage');

Route::get('/login', [UserController::class, 'loginPage'])->name('loginPage');

Route::get('/register', [UserController::class, 'registerPage'])->name('registerPage');
Route::post('/register', [UserController::class, 'storeAccount'])->name('createAccount');
