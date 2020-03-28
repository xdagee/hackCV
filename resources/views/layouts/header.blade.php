<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
        <meta name="keywords" content="">
		<title>HackCV - a COVID-19 Reporting Platform.</title>
		<!-- Favicon -->
        <link href="{{asset('assets/images/favicon.png')}}" rel="shortcut icon">
		<!-- CSS -->
		<link href="{{asset('assets/plugins/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/plugins/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/plugins/owl-carousel/owl.theme.default.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/plugins/magnific-popup/magnific-popup.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">
		<!-- Fonts/Icons -->
		<link href="{{asset('assets/plugins/font-awesome/css/all.css')}}" rel="stylesheet">
		<link href="{{asset('assets/plugins/themify/themify-icons.min.css')}}" rel="stylesheet">
	</head>
	<body data-preloader="2">
		
		<header>
			<nav class="navbar navbar-dark navbar-absolute navbar-fixed">
				<div class="container">
					<a class="navbar-brand" href="{{url('/')}}">
						<h5>hackCV</h5>
					</a>
					<ul class="nav">
						<li class="nav-item nav-dropdown">
							<a class="nav-link" href="{{url('get-involved')}}">Get Involved</a>
						</li>
						<!-- dropdown link 2 -->
						<li class="nav-item nav-dropdown">
							<a class="nav-link" href="{{url('our-team')}}">Our Team</a>
						</li>
						<!-- dropdown link 3 -->
						<li class="nav-item nav-dropdown">
						<a class="nav-link" href="{{url('faq')}}">FAQ</a>
						</li>
						<!-- dropdown link 4 -->
						<li class="nav-item nav-dropdown">
							<a class="nav-link" href="{{url('blog')}}">Blog</a>
						</li>
					</ul><!-- end nav -->
					<!-- Nav Toggle button -->
					<button class="nav-toggle-btn">
			            <span class="lines"></span>
			        </button><!-- toggle button will show when screen resolution is less than 992px -->
				</div><!-- end container -->
			</nav>
		</header>