@extends('layouts.main')

@section('container')
<h2>Post Categories</h2>
<hr>
@foreach ($categories as $category)
<ul>
	<li>
		<h2><a class="link-primary" style="text-decoration:none;" href="/categories/{{ $category->slug }}"> {{ $category->name }}</a></h2>
	</li>
</ul>
    
@endforeach
@endsection