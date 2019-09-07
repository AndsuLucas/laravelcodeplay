@extends('layout.main')

@section('title', 'Todos os posts')
	 
@section('content')
	@if (!is_null($posts))
	<div class="container d-flex p-5 position-relative" style="flex-wrap: wrap;">
		@foreach ($posts as $post)
			<div class="p-1 m-1 border border-dark">
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">{{$post->title}}</h5>
						<p class="card-text">{{$post->body}}</p>
						<a href="/post/view/{{$post->id}}" class="btn btn-primary">Visualizar</a>
					</div>
				</div>
			</div>
		@endforeach
	</div>
	@endif
@endsection