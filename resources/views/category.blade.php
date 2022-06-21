@extends('layouts.main')

@section('container')
<h2>Post Category: {{ $category }}</h2>
<hr>
@foreach ($posts as $post)
    <article class="mb-5">
        <h2><a class="link-primary" style="text-decoration:none;" href="/blog/{{ $post->id }}"> {{ $post->title }}</a></h2>
        <h5>By:{{ $post->author }} Kategori {{ $post->category->name }}</h5>
        <p>{{ $post->excerpt }}</p>
    </article>
    <hr>
    
@endforeach
@endsection
