@extends('layout.main')

@section('content')
	<div class="container d-flex p-5">
	@foreach ($posts as $post)
		<div class="p-1">
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
@endsection