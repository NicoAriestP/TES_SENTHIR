@extends('layouts.main')

@section('container')
            <!-- Main Content-->
            <div class="container px-4 px-lg-5">
                <h2 class="text-center my-2">Daftar Post Terbaru</h2>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 shadow-lg my-3">
                        <!-- Post preview-->
                        @foreach ($Posts as $post)
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

                        <!-- Pager-->
                        {{ $Posts->links() }}
                    </div>
                </div>
            </div>
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

