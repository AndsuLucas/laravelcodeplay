@extends('layout.main')


@section('content')
	<div class="container d-flex">
		<div class="container">
			<p>Deseja mesmo deletar o registro: <mark>{{$post->title}}</mark></p>
			<a href="/post/view/{{$post->id}}" title="">Voltar</a>
		</div>
		<div class="container">
			<form action="/post/delete/{{$post->id}}" method="POST" accept-charset="utf-8">
				@csrf
				@method('delete')
				<input type="Submit" name="delete" value="Deletar Registro" class="btn btn-danger">
			</form>
		</div>
	</div>
@endsection