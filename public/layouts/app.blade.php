<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{{ config('app.name', 'Tymr') }}</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

		<!-- Bootstrap core CSS -->
		<link href="{{ theme_asset('css/bootstrap.min.css') }}" rel="stylesheet">
		
		<!-- Custom styles for this template -->
		<link href="{{ theme_asset('css/scrolling-nav.css') }}" rel="stylesheet">
		<!-- The below also works as it is vanilla Laravel -->
		<!--link href="{{ asset('themes/starter/css/scrolling-nav.css') }}" rel="stylesheet"-->

		@yield('aftercss')

		@yield('grecaptcha')

	</head>

	<body id="page-top">
	
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
			<div class="container">
				<a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#services">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		@component('partials.session')
		@endcomponent


		<header class="bg-primary text-white">
			<div class="container text-center">
				<h1>Bootstrap 4 Starter</h1>
				<p class="lead">A landing page template freshly redesigned for Bootstrap 4</p>
			</div>
		</header>

		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						@yield('content')
					</div>
				</div>
			</div>
		</section>

		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<h2>About this page</h2>
						<p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
						<ul>
							<li>Clickable nav links that smooth scroll to page sections</li>
							<li>Responsive behavior when clicking nav links perfect for a one page website</li>
							<li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
							<li>Minimal custom CSS so you are free to explore your own unique design options</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="services" class="bg-light">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<h2>Services we offer</h2>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<h2>Contact us</h2>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<footer class="py-5 bg-dark">
			<div class="container">
				<p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
			</div>
		</footer>
  
		<script src="{{ theme_asset('js/jquery.min.js') }}"></script>
		<script src="{{ theme_asset('js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ theme_asset('js/jquery.easing.min.js') }}"></script>
		<script src="{{ theme_asset('js/scrolling-nav.js') }}"></script>

		@yield('afterjs')

	</body>
</html>
