@extends('layout.main')

@section('content')
<div class="">
	<form action="/post/create" method="POST" accept-charset="utf-8">
		@csrf
		<div class="form-group">
			<label for="title">Título</label>
			<input type="text" name="title" placeholder="Título do seu post" class="form-control" id="title">
		</div>
		<div class="form-group">
			<label for="body">Conteúdo</label>
			<textarea name="body" id="body" class="form-control" placeholder="Conteúdo do seu post" cols="100" maxlength="255">
				
			</textarea>
		</div>
		<input type="submit" name="send" value="Enviar" class="btn btn-primary col-12">
	</form>
</div>
@endsection