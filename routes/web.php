<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\category;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function(){
    $posts = Post::latest();
    if(request('search')){
        $posts->where('title','like', '%' . request('search') . '%')
              ->orWhere('body','like', '%' . request('search') . '%');
    }
    return view('home', [
        "title" => "Home",
        "Posts" => $posts->paginate(5)->withQueryString(),
    ]);
});
Route::get('/about', [PostController::class,'about']);

//halaman single post
Route::get('/blog/{post:slug}',[PostController::class, 'show']);
Route::get('/categories/{category:slug}', function(Category $category){
    return view('home',[
        'title' => 'Kategori: '.$category->name,
        'Posts' => $category->posts->load('category','user'),
        'category' => $category->name,
    ]);
});
Route::get('/categories', [CategoryController::class,'index']);
Route::get('/login', function(){
    return view('login');
});
Route::get('/authors/{author:username}', function(User $author){
    return view('home',[
        'title' => 'Author: '.$author->name,
        'Posts' => $author->posts->load('category','user'),
    ]);
});