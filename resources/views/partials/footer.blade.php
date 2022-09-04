<?php

use App\Http\Controllers\Controller;

$footer = Controller::footer();
$global_settings =Controller::global_settings();
// $categories =Controller::footer_categories();
?>
<!--Footer-->

<div class="footer-style-3">
	<div class="rn-callto-action rn-call-to-action style-8 content-wrapper">
		<div class="container">
			<div class="row row--0 align-items-center ">
				<div class="col-lg-12">
					<div class="inner">
						<div class="content text-center">
							<img class="w-md-25 radius mb-4" src="{{ asset('theme/assets/images/verification_card.png')}}" alt="Blog Images">
							<h2 class="title">Please enter the 16-digit security code</h2>
							<h6 class="subtitle mb-4">Locate the security label, like the one shown below, <br>on the package and  remove the scratch off coating to see the code.</h6>
							<form action="{{ url('verify-code') }}" method="post">
								{{ csrf_field() }}
								<div class="row justify-content-center">
									<div class="col-lg-4 col-md-12 col-12">
										<div class="rnform-group">
											<input type="text" name="code" minlength="16" placeholder="Place security code here">
										</div>
									</div>
								</div>
								<div class="call-to-btn text-center mt--10">
									<button class="btn-default btn-icon" type="submit">Verify</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright-area copyright-style-one variation-two">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4 col-md-7 col-sm-12 col-12">
					<div class="copyright-left">
						<ul class="ft-menu link-hover">
							<li><a href="/privacy-policy">Privacy Policy</a></li>
							<li><a href="/terms-and-condition">Terms And Condition</a></li>
							<li><a href="{{ route('contactus') }}">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-5 mt_sm--20">
					<div class="copyright-center text-center">
						<ul class="social-icon social-default color-lessdark justify-content-center">
							@if (isset($footer->youtube))
							<li data-sal="slide-up" data-sal-duration="400" data-sal-delay="500">
									<a href="{{ $footer->youtube }}">
									<i class="feather-youtube"></i>
								</a>
							</li>
							@endif
							@if (isset($footer->fb))
							<li data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">
									<a href="{{ $footer->fb }}">
									<i class="feather-facebook"></i>
								</a>
							</li>
							@endif
							@if (isset($footer->ig))
							<li data-sal="slide-up" data-sal-duration="400" data-sal-delay="400">
									<a href="{{ $footer->ig }}">
									<i class="feather-instagram"></i>
								</a>
							</li>
							@endif
							@if (isset($footer->twitter))
							<li data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">
									<a href="{{ $footer->twitter }}">
									<i class="feather-twitter"></i>
								</a>
							</li>
							@endif
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 col-12 mt_md--20 mt_sm--20">
					<div class="copyright-right text-center text-lg-right">
						<p class="copyright-text">Copyright All rights reserved © 2022 Nebo.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End Footer-->