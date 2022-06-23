@extends('layouts.main')

@section('container')
            <!-- Main Content-->
            <div class="container px-4 px-lg-5">

                <div class="row">
                    <div class="col md-6">
                        <form action="/">
                        <div class="input-group mb-3 rounded">
                            <input type="text" class="form-control" placeholder="Cari.." name="search" value="{{ request('search') }}">
                            <button class="btn btn-primary" type="button" id="button-addon2">Cari !</button>
                          </div>
                        </form>
                    </div>
                </div>
                @if (\Request::is('categories/*'))  
                <h2 class="text-center my-2">Daftar Post {{ $title }}</h2>
                @elseif (\Request::is('authors/*'))
                <h2 class="text-center my-2">Daftar Post {{ $title }}</h2>
                @else
                <h2 class="text-center my-2">Daftar Post Terbaru</h2>
                @endif
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 shadow-lg my-3">
                        <!-- Post preview-->
                        @if ($Posts->count())
                        <div class="card mb-3">
                            <img src="https://source.unsplash.com/random/200×200/?{{ $Posts[0]->category->name }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="/blog/{{ $Posts[0]->slug }}"><h2 class="card-title">{{ $Posts[0]->title }}</h2></a>
                              <p class="card-text">{{ $Posts[0]->excerpt }}</p>
                              <p class="card-text">Diposting oleh 
                                <a class="" href="/authors/{{ $Posts[0]->user->username }}">{{ $Posts[0]->user->name }}</a>
                                di kategori <a href="/categories/{{ $Posts[0]->category->slug }}">{{ $Posts[0]->category->name }}</a></p>
                              <p class="card-text"><small class="text-muted">Diposting {{ $Posts[0]->created_at->diffForHumans() }}</small></p>
                            </div>
                          </div>
                        
                        @foreach ($Posts->skip(1) as $post)
                        <div class="post-preview">
                            <img src="https://source.unsplash.com/random/200×200/?{{ $post->category->name }}" width="600" height="250" class="img-fluid" alt="...">
                            <a href="/blog/{{ $post->slug }}"> 
                                <h2 class="post-title">{{ $post->title }}</h2>
                                <h4 class="post-subtitle">{{ $post->excerpt }}</h4>
                            </a>
                            <p class="post-meta">
                                Diposting oleh 
                                <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a>
                                di kategori <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                               pada
                                {{ $post->created_at->diffForHumans() }}
                            </p>
                            
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                        @endforeach

                        <!-- Pager-->
                        <div class="d-flex justify-content-end">{{ $Posts->links() }}</div>
                        
                    </div>
                </div>
            </div>
            @else
                        <p class="text-center fw-bold fs-4 ">Tidak ada Post.</p>
                        @endif
        <!-- Footer-->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function Welcome(){
                Swal.fire({
          title: 'Selamat Datang di Blog Kami !',
          imageUrl: 'http://127.0.0.1:8000/assets/img/welcome.webp',
          imageWidth: 400,
          imageHeight: 200,
          imageAlt: 'Custom image',
        })
            }
        // window.onload = Welcome();
        window.addEventListener("load", function(){

        // Check localStorage to see if the splash screen 
        // has NOT already been displayed
        if(!localStorage.getItem("splash")){

        // Splash has not been displayed, so show it:
        Welcome();

        // Store a value in localStorage to denote that the splash screen
        // has now been displayed
        localStorage.setItem("splash", "true");
        }
});
        </script> 
@endsection

