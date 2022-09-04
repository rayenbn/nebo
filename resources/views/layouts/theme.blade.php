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
        <!-- <img src="{{ asset('theme/assets/images/age-restriction.png') }}" width="50%">
        <h3 style="color: red;">YOUTH PEVENTION</h3>  -->
        <p>To use the Nebo website you must be aged 21 years or over. Please verify your age before entering the site.</p>
		<p>We use cookies to improve our website and your experience browsing it. By continuing to browse our website you accept our Cookie Policy.</p>
        <div style="display: flex;">
            <!-- <button class="popup-age-accepted" id="close">Yes</button>
            <a href="https://google.com">No, I'm younger than 21</a> -->
			<a class="btn-small round" href="https://bing.com">under 21</a>
			<button class="btn-small round popup-age-accepted" id="close">21+</button>
        </div>
		<p style="color: #2ca66d; font-size: 12px;margin-top: 20px">WARNING: This product contains nicotine. Nicotine is an addictive chemical.</p>
    </div>

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