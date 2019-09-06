@extends('layout.main')

@section('content')
<div class="">
	<form action="/post/update/{{$post->id}}" method="POST" accept-charset="utf-8">
		@csrf

		<input type="hidden" name="_method" value="PUT">
		<div class="form-group">
			<label for="title">Título</label>
			<input type="text" name="title" class="form-control" id="title" value={{$post->title}}>
		</div>
		<div class="form-group">
			<label for="body">Conteúdo</label>
			<textarea name="body" id="body" class="form-control" placeholder="Conteúdo do seu post" cols="100" maxlength="255">
				{{$post->body}}>
			</textarea>
		</div>
		<input type="submit" name="send" value="Enviar" class="btn btn-primary col-12">
	</form>
</div>
<script type="text/javascript">
	$old_text = document.querySelector("textarea").value;

	document.querySelector("textarea").value = $old_text.trim();
</script>
@endsection