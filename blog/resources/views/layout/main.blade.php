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
                    <lu><a href="">ok</a></lu>

                </ul>
                @gues
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
