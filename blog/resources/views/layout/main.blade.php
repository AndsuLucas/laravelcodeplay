<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<header>
			<nav class="navbar">
				<ul class="nav-list d-flex" style="list-style:none;">
					<li class="m-1"><a href="/post/register" title="">Escrever</a></li>
					<li class="m-1"><a href="/" title="">Ver artigos</a></li>
				</ul>
			</nav>
		</header><!-- /header -->
			<main class="container">
				@yield('content')
			</main>
			<footer>
				
			</footer>
		</body>
	</html>