@extends('layout.main')


@section('content')
	<div class="p-1">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">{{$post->title}}</h5>
					<hr>
					<p class="card-text">{{$post->body}}</p>
					
				</div>
			</div>
		</div>
@endsection
