<?php
	use App\Http\Controllers\Controller;
	$global_settings = Controller::global_settings();
?>

<!doctype html>
<html lang="en">
<head>
	<title>{{ $global_settings->meta_title ?? "" }}</title>
	<!--meta info-->
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="digitafro.com">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('theme/assets/images/favicon.png') }}">
    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="{{ asset('theme/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/plugins/feature.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/plugins/magnify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/plugins/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/plugins/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/style.css') }}">

	@stack('head.scripts')
    @stack('head.styles')
</head> 

<body>
    <main class="page-wrapper">
        <!-- Start Header-->
		@include('partials.themeHeader')

		 <!-- Start Theme Style  -->
		 <div>
            <div class="rn-gradient-circle"></div>
            <div class="rn-gradient-circle theme-pink"></div>
        </div>
        <!-- End Theme Style  -->

		@yield('content')

		<!--Footer-->
		@include('partials.footer')
		<!--End Footer-->
	</main>

	<!-- All Scripts  -->
	<!-- Start Top To Bottom Area  -->
	<div class="rn-back-top">
		<i class="feather-arrow-up"></i>
	</div>
	<!-- End Top To Bottom Area  -->
	
	<div class="age-popup" id="age-popup">
        <img src="{{ asset('theme/assets/images/age-restriction.png') }}" width="50%">
        <h3 style="color: red;">YOUTH PEVENTION</h3> 
        <p>
        This product is not intended for sale or use to those <span style="color: red">under 21 years of age</span>. This Product contains nicotine. Nicotine is an addictive chemical.
        </p>
        <div style="display: flex;">
            <button class="popup-age-accepted" id="close">Yes</button>
            <a href="https://google.com">No, I'm younger than 21</a>
        </div>
    </div>


    <!-- form itself -->
<form  class="mfp-hide white-popup-block">
	<h1>Form</h1>
	<fieldset style="border:0;">
		<p>Lightbox has an option to automatically focus on the first input. It's strongly recommended to use <code>inline</code> popup type for lightboxes with form instead of <code>ajax</code> (to keep entered data if the user accidentally refreshed the page).</p>
		<ol>
			<li>
				<label for="name">Name</label>
				<input id="name" name="name" type="text" placeholder="Name" required="">
			</li>
			<li>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="example@domain.com" required="">
			</li>
			<li>
				<label for="phone">Phone</label>
				<input id="phone" name="phone" type="tel" placeholder="Eg. +447500000000" required="">
			</li>
			<li>
				<label for="textarea">Textarea</label><br>
				<textarea id="textarea">Try to resize me to see how popup CSS-based resizing works.</textarea>
			</li>
		</ol>
	</fieldset>
</form>

	{{--  <!-- <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form> --> --}}
	
	 <!-- JS============================================ -->
	 <script src="{{ asset('theme/assets/js/vendor/modernizr.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/waypoint.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/counterup.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/feather.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/sal.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/masonry.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/imageloaded.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/magnify.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/lightbox.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/easypie.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/text-type.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/jquery.style.swicher.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/jquery-one-page-nav.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('theme/assets/js/main.js') }}"></script>
    <script src="{{ asset('theme/assets/js/age-popup.js') }}"></script>
	
	@yield('scripts')
</body>
</html>