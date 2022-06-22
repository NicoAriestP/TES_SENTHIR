<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categories', [
            "title" => "Post Category",
            "Categories" => DB::table('categories')
                        ->orderBy('name', 'desc')
                        ->paginate(10)
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function show($slug)
    // {
    //     return view('post', [
    //         "title" => "Single Post",
    //         "post" => post::find($slug)
    
    //     ]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function edit(Post $post)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Post $post)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Post $post)
    // {
    //     //
    // }
    public function about() {
    return view('about', [
        "title" => "Tentang",
        "name" => "Sandhika",
        "email" => "123",
        "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPg9wlBVJMo-TtMmC5c7io65B2ACO7_89lKw&usqp=CAU",
    ]);
}

}
