@extends('layouts.main')

@section('container')
{{-- <h2>Daftar Post: {{ $category }}</h2>
<hr> --}}
{{-- @foreach ($posts as $post)
    <article class="mb-5">
        <h2><a class="link-primary" style="text-decoration:none;" href="/blog/{{ $post->id }}"> {{ $post->title }}</a></h2>
        <h5>By:{{ $post->author }} Kategori {{ $post->category->name }}</h5>
        <p>{{ $post->excerpt }}</p>
    </article>
    <hr> --}}
    <div class="container px-4 px-lg-5">
        <h2 class="text-center my-2">Daftar Post : {{ $category }}</h2>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7 shadow-lg my-3">
                <!-- Post preview-->
                @foreach ($posts as $post)
                <div class="post-preview">
                    <a href="/blog/{{ $post->id }}"> 
                        <h2 class="post-title">{{ $post->title }}</h2>
                        <h3 class="post-subtitle">{{ $post->excerpt }}</h3>
                    </a>
                    <p class="post-meta">
                        Diposting oleh
                        <a href="#!">{{ $post->author }}</a>
                        pada
                        @php
                            $input = $post->created_at;
                            $date = strtotime($input);
                            echo date('D/M/Y h:i', $date);
                        @endphp
                    </p>
                    
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                @endforeach

                {{-- {{ $Posts->links() }} --}}
            </div>
        </div>
    </div>
@endsection
