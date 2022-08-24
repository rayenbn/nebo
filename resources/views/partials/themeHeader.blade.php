<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
$global_settings = Controller::global_settings();
?>
<!--Header-->
<!-- Start Header Top Area  -->
<div class="header-top-news bg-image1">
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="inner">
						<div class="content">
							<span class="rn-badge">WARNING</span>
							<span class="news-text">This website contains nicotine and only suitable for those who are 21 years or older. Are you 21 or older?</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="icon-close">
		<button class="close-button bgsection-activation">
			<i class="feather-x"></i>
		</button>
	</div>
</div>
<!-- End Header Top Area  -->

<!-- Start Header Area  -->
<header class="rn-header header-default header-not-transparent header-sticky">
	<div class="container position-relative">
		<div class="row align-items-center row--0">
			<div class="col-lg-3 col-md-6 col-4">
				<div class="logo">
					<a href="index.html">
						<img class="logo-light" src="/storage/logo/{{ $global_settings->logo ?? ''}}"  alt="Nebo Logo">
						<img class="logo-dark" src="/storage/logo/{{ $global_settings->footer_logo ?? ''}}" alt="Nebo Logo">
					</a>
				</div>
			</div>
			<div class="col-lg-9 col-md-6 col-8 position-static">
				<div class="header-right">

					<nav class="mainmenu-nav d-none d-lg-block">
						<ul class="mainmenu">
							<li><a href="{{ url('/') }}">Home</a></li>
							<li class="has-droupdown has-menu-child-item"><a href="#">Products</a>
								<ul class="submenu">
									<li><a href="/brand-new">Mesh Coil NEBO-V series</a></li>
								</ul>
							</li>
							<li><a href="{{ route('blogs') }}">Nebo News</a></li>
							<!-- <li class="has-droupdown has-menu-child-item"><a href="#">Blog</a>
								<ul class="submenu">
									<li><a href="blog-details.html">Blog Details</a></li>
								</ul>
							</li> -->
							<li><a href="{{ route('contactus') }}">Contact</a></li>
						</ul>

					</nav>


					<!-- Start Mobile-Menu-Bar -->
					<div class="mobile-menu-bar ml--5 d-block d-lg-none">
						<div class="hamberger">
							<button class="hamberger-button">
								<i class="feather-menu"></i>
							</button>
						</div>
					</div>
					<!-- Start Mobile-Menu-Bar -->

					<div id="my_switcher" class="my_switcher">
						<ul>
							<li>
								<a href="javascript: void(0);" data-theme="light" class="setColor light">
									<img class="sun-image" src="{{ asset('theme/assets/images/icons/sun-01.svg') }}" alt="Sun images">
								</a>
							</li>
							<li>
								<a href="javascript: void(0);" data-theme="dark" class="setColor dark">
									<img class="Victor Image" src="{{ asset('theme/assets/images/icons/vector.svg') }}" alt="Vector Images">
								</a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
</header>
<!-- End Header Area  -->
<div class="popup-mobile-menu">
	<div class="inner">
		<div class="header-top">
			<div class="logo">
				<a href="index.html">
					<img class="logo-light" src="/storage/logo/{{ $global_settings->logo ?? ''}}" alt="Nebo Logo">
					<img class="logo-dark" src="/storage/logo/{{ $global_settings->footer_logo ?? ''}}" alt="Nebo Logo">
				</a>
			</div>
			<div class="close-menu">
				<button class="close-button">
					<i class="feather-x"></i>
				</button>
			</div>
		</div>
		<ul class="mainmenu">
			<li><a href="{{ url('/') }}">Home</a></li>
			<li class="has-droupdown has-menu-child-item"><a href="#">Products</a>
				<ul class="submenu">
					<li><a href="/brand-new">Mesh Coil NEBO-V series</a></li>
				</ul>
			</li>
			
			<li><a href="{{ route('blogs') }}">Blog</a></li>
			<!-- <li><a href="blog-details.html">Blog Details</a></li> -->
			<li><a href="{{ route('contactus') }}">Contact</a></li>
		</ul>

	</div>
</div>

<!--End Header-->