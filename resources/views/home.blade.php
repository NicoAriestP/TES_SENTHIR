@extends('layouts.main')

@section('container')
    <header class="masthead" style="background-image: url('http://127.0.0.1:8000/assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>{{ $title }}</h1>
                        <span class="subheading">Blog yang berisi info-info menarik untuk Anda!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
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
                                Posted by
                                <a href="#!">{{ $post->author }}</a>
                                at
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
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#Tidak ada akun instagram">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://web.facebook.com/nico.a.putra.5895/">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://github.com/NicoAriestP">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div style="font-family: 'Times New Roman', Times, serif" class="small text-center text-muted fst-italic">Copyright &copy; Nico AP 2022</div>
                    </div>
                </div>
            </div>
        </footer>
@endsection
