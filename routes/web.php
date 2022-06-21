<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\Models\category;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index']);
Route::get('/about', [PostController::class,'about']);
Route::get('/blog', [PostController::class, 'index']);

//halaman single post
Route::get('/blog/{slug}',[PostController::class, 'show']);
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category',[
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Category',
        'categories' => Category::all()
    ]);
});