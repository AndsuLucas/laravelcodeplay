<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>@yield('title')</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<header>
			<nav class="navbar justify-content-between">
				<ul class="nav-list d-flex" style="list-style:none;">
					<li class="m-1"><a href="/post/register" title="">Escrever</a></li>
					<li class="m-1"><a href="/" title="">Ver artigos</a></li>
				</ul>
				<ul class="nav-list d-flex mr-5">
					@guest
						<li class="m-1" style="list-style:none;"><a href="/register" title="">Registrar-se</a></li>
						<li class="m-1" style="list-style:none;"><a href="/login" title="">Login</a></li>
					@else
						<form action="/logout" method="POST" accept-charset="utf-8" >
							<input class="btn btn-outline-danger"type="submit" name="logout" value="Sair">
						</form>
					@endguest
				</ul>
				
			</nav>
			</header><!-- /header -->
			<main class="container">
				<div class="container">
					@yield('message')
				</div>
				@yield('content')
			</main>
			<footer>
			</footer>
		</body>
	</html>