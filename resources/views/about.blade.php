@extends('layouts.main')

@section('container')
<div class="container">
    <h1>Halaman Tentang</h1><br>
    <h4>{{ $name }}</h4>
    <h4>{{ $email }}</h4>
    <img src="{{ $img }}" alt="" class="img-thumbnail rounded-circle" >
</div>
@endsection
