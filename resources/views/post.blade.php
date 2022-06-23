
@extends('layouts.main')

@section('container')
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                {{-- tanda !! supaya tag html bekerja --}}
                <img src="https://source.unsplash.com/random/300×300/?{{ $post->category->name }}" class="img-fluid" alt="...">
                <article class="my-2">{!! $post->body !!}</article>
                
            </div>
        </div>
    </div>
</article>

<div class="d-grid gap-2">
    <a href="/" class="btn btn-secondary rounded mx-2 my-2">Kembali ke Home</a>
  </div>
    @endsection