@extends('layout.main')
@section('content')
	<div class="col-10 m-auto">
		<div class="container d-flex justify-content-between">
			<a href="/post/update/{{$post->id}}" title="">Editar registro.</a>
			<a href="/post/delete/{{$post->id}}" title="" class="text-danger">Deletar registro.</a>
		</div>
		<div class="p-1">
			<div class="card" style="width: 100%; ">
				<div class="card-body">
					<h1 class="card-title">{{$post->title}}</h1>
					<p class><small>{{$post->created_at}}</small></p>

					<hr>
					<p class="card-text">{{$post->body}}</p>
					
				</div>
			</div>
		</div>
	</div>
@endsection