<!DOCTYPE html>


<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Сайт на основе MVC</title>
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
	</head>
	<body>
		<header>
			<nav>
				<div>
					<ul id="menu">
						<a href="/">Главная</a>
						<a href="/portfolio">Портфолио</a>
						<a href="/contacts">Контакты</a>
						<a href="/services">Услуги</a>
					</ul>
				</div>
			</nav>
		</header>
		<div id="main">
		<h1>Сайт на основе MVC</h1>
		<article>
			<?php include 'application/views/'.$content_view; ?>
		</article>
		</div>
		<footer>
        <!-- Спецсимволы: неразрывный пробел и копирайт -->
        <span>&copy;&nbsp;Siebellab</span>
    </footer>
	</body>
</html>