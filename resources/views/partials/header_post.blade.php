<header class="masthead" style="background-image: url('http://127.0.0.1:8000/assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>{{ $post->title }}</h1>
                    <h2 class="subheading">{{ $post->excerpt }}</h2>
                    <span class="meta">
                        Diposting oleh
                        <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a>
                        di kategori <a class="link-header" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                        pada
                        @php
                        $input = $post->created_at;
                        $date = strtotime($input);
                        echo date('D/M/Y h:i', $date);
                    @endphp
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>