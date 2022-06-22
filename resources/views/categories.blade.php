@extends('layouts.main')

@section('container')
{{-- <h2>Post Categories</h2>
<hr>
@foreach ($categories as $category)
<ul>
	<li>
		<h2><a class="link-primary" style="text-decoration:none;" href="/categories/{{ $category->slug }}"> {{ $category->name }}</a></h2>
	</li>
</ul> --}}
<div class="container px-4 px-lg-5">
	<h2 class="text-center my-2">Daftar {{ $title }}</h2>
	<div class="row gx-4 gx-lg-5 justify-content-center">
		<div class="col-md-10 col-lg-8 col-xl-7 shadow-lg my-3 py-2">
			<!-- Post preview-->
			@foreach ($Categories as $category)
			<div class="card rounded my-1 shadow-md">
				{{-- <div class="card-header">
				  {{ $title }}
				</div> --}}
				<div class="card-body">
					<h4><a class="link-primary" style="text-decoration:none;" href="/categories/{{ $category->slug }}"> {{ $category->name }}</a></h4>
				</div>
			  </div>
			<!-- Divider-->
			@endforeach
			  {{ $Categories->links() }}
		</div>
	</div>
</div>
@endsection