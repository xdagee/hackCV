@extends('layouts.master')

@section('content')
    <!-- Scroll to top button -->
		<div class="scrolltotop">
			<a class="button-circle button-circle-sm button-circle-dark" href="HackCV#"><i class="ti-arrow-up"></i></a>
		</div>
        <!-- end Scroll to top button -->
        
        <!-- Home section -->
		<div class="section-2xl bg-image parallax" style="background-image: url({{asset('assets/images/hackcv-bg.png')}})">
			<div class="bg-black-01">
				<div class="container text-center">
					<div class="row">
						<div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2">
							<h4 class="font-weight-light margin-bottom-20">Hello Ghana!</h4>
							<h1 class="font-weight-normal line-height-160">To increase the early detection of COVID-19, We're opening this platform to help Ghanaians across the country to report cases on Coronavirus.</h1>
							<a class="button button-lg button-radius button-dark margin-top-30 scrolldown" href="{{url('start')}}">Start Here</a>
						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
		</div>
        <!-- end Home section -->
        
        <!-- About section -->
		<div id="about" class="section border-top">
			<div class="container">
				<div class="row align-items-center col-spacing-50">
					<div class="col-12 col-lg-6">
						<img class="box-shadow" src="{{asset('assets/images/hackcv-coporate.png')}}" alt="">
					</div>
					<div class="col-12 col-lg-6">
						<h2 class="font-weight-normal line-height-160">We Are HackCV</h2>
						<p>We are a team of software engineers who are passionate about our work, using our slills with technology to help reduce the pandemic crisis facing our country.</p>
					<a class="button button-lg button-radius button-border-1px button-outline-dark margin-top-30" href="{{url('our-team')}}">Learn More</a>
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
		</div>
        <!-- end About section -->
        
        <!-- Services section -->
		<div class="section padding-top-0">
			<div class="container">
				<div class="row icon-5xl">
					<!-- Icon text box 1 -->
					<div class="col-12 col-md-4">
						<i class="ti-star text-dark"></i>
						<h5 class="font-weight-normal margin-top-20">About COVID-19</h5>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
					</div>
					<!-- Icon text box 2 -->
					<div class="col-12 col-md-4">
						<i class="ti-ruler-pencil text-dark"></i>
						<h5 class="font-weight-normal margin-top-20">What to Do</h5>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
					</div>
					<!-- Icon text box 3 -->
					<div class="col-12 col-md-4">
						<i class="ti-camera text-dark"></i>
						<h5 class="font-weight-normal margin-top-20">How to be Tested</h5>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
		</div>
        <!-- end Services section -->

        <!-- Parallax section -->
		<div class="section-xl bg-image parallax" style="background-image: url({{asset('assets/images/hackcv-bg.png')}})">
			<div class="bg-black-03">
				<div class="container text-center">
					<a class="button-circle button-circle-xl button-circle-outline-white icon-xl button-hover-scale popup-youtube" href="hackCV#" data-youtube-src="https://www.youtube.com/embed/wunAKrlDVkI?autoplay=1&rel=0">
						<i class="ti-control-play"></i>
					</a>
				</div><!-- end container -->
			</div>
		</div>
        <!-- end Parallax section -->
        
        <!-- Clients section -->
		<div class="section border-top">
			<div class="container">
				<div class="owl-carousel" data-owl-dots="false" data-owl-margin="30" data-owl-autoplay="true" data-owl-xs="1" data-owl-sm="2" data-owl-md="3" data-owl-lg="4" data-owl-xl="6">
					<div class="client-box">
						<a href="#"><img src="{{asset('assets/images/client-1.png')}}" alt=""></a>
					</div>
					<div class="client-box">
						<a href="#"><img src="{{asset('assets/images/client-2.png')}}" alt=""></a>
					</div>
					<div class="client-box">
						<a href="#"><img src="{{asset('assets/images/client-3.png')}}" alt=""></a>
					</div>
					<div class="client-box">
						<a href="#"><img src="{{asset('assets/images/client-4.png')}}" alt=""></a>
					</div>
					<div class="client-box">
						<a href="#"><img src="{{asset('assets/images/client-5.png')}}" alt=""></a>
					</div>
					<div class="client-box">
						<a href="#"><img src="{{asset('assets/images/client-6.png')}}" alt=""></a>
					</div>
				</div><!-- end owl-carousel -->
			</div><!-- end container -->
		</div>
		<!-- end Clients section -->

		<!-- put your content here -->
@endsection