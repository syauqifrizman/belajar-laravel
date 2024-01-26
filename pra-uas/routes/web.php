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

Route::get('/about/{author:username}', [UserController::class, 'getUserData'])->name('getAuthorInfo');

Route::get('/blog', [PostController::class, 'index'])->name('blogPage');

// halaman single posts
Route::get('/blog/{post:slug}', [PostController::class, 'getPost'])->name('getPost');

Route::get('/categories/{category:slug}', [CategoryController::class, 'getAllPostCategory'])->name('getAllPostCategory');

Route::get('/categories', [CategoryController::class, 'getAllCategory'])->name('listCategoryPage');

Route::get('/login', [UserController::class, 'loginPage'])->name('loginPage')->middleware('guest');
Route::post('/login', [UserController::class, 'loginAccount'])->name('loginAccount');
Route::post('/logout', [UserController::class, 'logoutAccount'])->name('logoutAccount')->middleware('auth');

Route::get('/register', [UserController::class, 'registerPage'])->name('registerPage')->middleware('guest');
Route::post('/register', [UserController::class, 'storeAccount'])->name('createAccount');

// Route::get('/dashboard', [UserController::class, 'dashboardPage'])->name('dashboardPage')->middleware('auth');

Route::get('/dashboard/blog', [PostController::class, 'getMyPost'])->name('getMyPost')->middleware('auth');

Route::get('/dashboard/blog/create', [PostController::class, 'storePostPage'])->name('createPostPage')->middleware('auth');
Route::post('/dashboard/blog/create', [PostController::class, 'storePost'])->name('createPost')->middleware('auth');

Route::get('/dashboard/blog/{post:slug}/edit', [PostController::class, 'editPostPage'])->name('editPostPage')->middleware('auth');
Route::put('/dashboard/blog/{post:slug}/edit', [PostController::class, 'editPost'])->name('editPost')->middleware('auth');

Route::get('/dashboard/blog/{post:slug}', [PostController::class, 'getDashboardPost'])->name('getDashboardPost')->middleware('auth');
Route::delete('/dashboard/blog/{post:slug}', [PostController::class, 'deletePost'])->name('deletePost')->middleware('auth');


