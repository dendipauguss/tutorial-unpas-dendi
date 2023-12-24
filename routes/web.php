<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;

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
    return view('front-end.home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('front-end.about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Dendi Paugus Sukmaya",
        "email" => "dendipauguss1111@gmail.com",
        "image" => "dendi-img.jpg",
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

// Halaman Single Post

// Route Model Binding || || ||
//                     vv vv vv
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('front-end.categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/admin', function () {
    return view('admin.dashboard', [
        'active' => 'dashboard'
    ]);

})->middleware('auth');

Route::get('/dashboard', function () {
    return view('admin.dashboard');

})->middleware('auth');

Route::get('/dashboard/posts/createSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Hak Akses Menggunakan Middleware
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
// Route::get('/categories/{category:slug}', function (Category $category)
// {
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

// Route::get('/author/{author:username}', function (User $author)
// {
//     return view('posts', [
//         'title' => "Post by Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author'),
//         'user' => $author->name
//     ]);
// });