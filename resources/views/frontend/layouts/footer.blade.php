<!-- Start Footer Area -->
<style>
	/* Premium Footer Styling */
	.footer {
		background: #023a23; /* Deep rich brand green */
		color: #e0e0e0;
		padding-top: 0;
		font-family: 'Poppins', sans-serif;
	}
	.footer .single-footer h4 {
		color: #ffffff;
		font-family: 'Orbitron', sans-serif;
		font-size: 18px;
		margin-bottom: 25px;
		font-weight: 600;
		text-transform: uppercase;
		letter-spacing: 1px;
	}
	.footer .single-footer ul li {
		margin-bottom: 12px;
	}
	.footer .single-footer ul li a {
		color: #b0c4b9;
		transition: all 0.3s ease;
		text-decoration: none;
		font-size: 15px;
	}
	.footer .single-footer ul li a:hover {
		color: #ffffff;
		padding-left: 8px; /* Hover indent effect */
	}
	.footer .foot-white-text {
		color: #b0c4b9;
		line-height: 1.8;
		margin-top: 20px;
		font-size: 15px;
	}
	.footer .social {
		display: flex;
		gap: 15px;
		margin-top: 25px;
	}
	.footer .social a i {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		width: 40px;
		height: 40px;
		border-radius: 50%;
		background: rgba(255,255,255,0.08);
		color: #fff !important;
		transition: all 0.3s ease;
		font-size: 18px !important;
		padding: 0 !important;
	}
	.footer .social a:hover i {
		background: #036b41;
		transform: translateY(-5px);
		box-shadow: 0 5px 15px rgba(0,0,0,0.2);
	}
	.footer .contact ul li {
		color: #b0c4b9;
		margin-bottom: 15px;
		display: flex;
		align-items: flex-start;
		font-size: 15px;
		line-height: 1.6;
	}
	.footer .contact ul li i {
		margin-right: 15px;
		color: #fff;
		margin-top: 4px;
		font-size: 18px;
	}
	.footer .copyright {
		background: #012b1a; /* Darker bottom bar */
		padding: 25px 0;
		margin-top: 60px;
		border-top: 1px solid rgba(255,255,255,0.05);
	}
	.footer .copyright p {
		color: #8fa89b;
		margin: 0;
		font-size: 14px;
	}
	.developer-credit {
		text-align: right;
		color: #8fa89b;
		font-size: 13px;
		line-height: 1.6;
	}
	.developer-credit span {
		color: #fff;
		font-weight: 700;
		font-family: 'Orbitron', sans-serif;
		letter-spacing: 1px;
	}
	.developer-credit .dev-contact {
		display: inline-block;
		font-size: 13px;
		color: #012b1a;
		background: #25D366; /* WhatsApp Green */
		padding: 4px 12px;
		border-radius: 20px;
		margin-top: 8px;
		font-weight: 700;
		text-decoration: none;
		transition: all 0.3s ease;
	}
	.developer-credit .dev-contact:hover {
		background: #fff;
		transform: scale(1.05);
	}
	@media(max-width: 768px) {
		.developer-credit {
			text-align: center;
			margin-top: 20px;
			padding-top: 20px;
			border-top: 1px solid rgba(255,255,255,0.05);
		}
		.footer .copyright .left {
			text-align: center;
		}
	}
</style>

<footer class="footer">
	<!-- Footer Top -->
	<div class="footer-top" style="padding: 60px 0 40px 0;">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-12 mb-4 mb-lg-0">
					<!-- Single Widget -->
					<div class="single-footer about text-white">
						<div class="logo">
							<a href="{{route('home')}}"><img src="{{asset('logo_white.png')}}" style="width: 220px;" alt="Logo"></a>
						</div>
						@php
						$settings = DB::table('settings')->first();
						@endphp
						<p class="text foot-white-text">{!! $settings->description !!}</p>

						<!-- Social Media Icons -->
						<div class="social">
							<a href="https://wa.me/{{ preg_replace('/\D/', '', $settings->phone) }}" target="_blank">
								<i class="bi bi-whatsapp"></i>
							</a>
							<a href="https://www.facebook.com/profile.php?id=61577716630042&mibextid=XvxkBK8d3ZMQiiMC" target="_blank">
								<i class="bi bi-facebook"></i>
							</a>
							<a href="https://www.instagram.com/UMQ AL WADI FURNITURE TRADING.pk/" target="_blank">
								<i class="bi bi-instagram"></i>
							</a>
						</div>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-lg-2 col-md-6 col-12 mb-4 mb-lg-0">
					<!-- Single Widget -->
					<div class="single-footer links">
						<h4>Shop</h4>
						<ul>
							<li><a href="{{route('product-grids')}}">All Products</a></li>
							<li><a href="#">Office Chairs</a></li>
							<li><a href="#">Gaming Chairs</a></li>
							<li><a href="#">New Arrivals</a></li>
							<li><a href="#">Best Sellers</a></li>
						</ul>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-lg-2 col-md-6 col-12 mb-4 mb-lg-0">
					<!-- Single Widget -->
					<div class="single-footer links">
						<h4>Support</h4>
						<ul>
							<li><a href="{{ route('contact') }}">Contact Support</a></li>
							<li><a href="{{ route('about-us') }}">About Us</a></li>
							<li><a href="{{ route('home') }}#return-policy">Returns & Exchanges</a></li>
							<li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
							<li><a href="{{ route('shipping-policy') }}">Shipping Policy</a></li>
							<li><a href="{{ route('terms-of-service') }}">Terms of Service</a></li>
						</ul>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-footer contact-widget">
						<h4>Get In Touch</h4>
						<!-- Single Widget -->
						<div class="contact">
							<ul>
								<li><i class="ti-location-pin"></i> <span>{!! strip_tags($settings->address) !!}</span></li>
								<li><i class="ti-mobile"></i> <span>{!! strip_tags($settings->phone) !!}</span></li>
								<li><i class="ti-email"></i> <span>{!! strip_tags($settings->email) !!}</span></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<!-- End Single Widget -->
				</div>
			</div>
		</div>
	</div>
	<!-- End Footer Top -->
	
	<!-- Copyright & Developer Credit -->
	<div class="copyright">
		<div class="container">
			<div class="inner">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="left">
							<p>Copyright © {{date('Y')}} <a href="{{route('home')}}" style="color: #fff; font-weight:600; text-decoration: none;">UMQ AL WADI FURNITURE TRADING</a>. All Rights Reserved.</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="developer-credit">
							Developed by <span>KASHAN SHAIKH</span> <br>
							Web Design & Software Development Services <br>
							<a href="https://wa.me/923173859647" target="_blank" class="dev-contact">
								<i class="bi bi-whatsapp"></i> +92 317-3859647
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- /End Footer Area -->

<!-- Jquery -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- Color JS -->
<script src="{{asset('frontend/js/colors.js')}}"></script>
<!-- Slicknav JS -->
<script src="{{asset('frontend/js/slicknav.min.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
<!-- Magnific Popup JS -->
<script src="{{asset('frontend/js/magnific-popup.js')}}"></script>
<!-- Waypoints JS -->
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
<!-- Countdown JS -->
<script src="{{asset('frontend/js/finalcountdown.min.js')}}"></script>
<!-- Nice Select JS -->
<script src="{{asset('frontend/js/nicesellect.js')}}"></script>
<!-- Flex Slider JS -->
<script src="{{asset('frontend/js/flex-slider.js')}}"></script>
<!-- ScrollUp JS -->
<script src="{{asset('frontend/js/scrollup.js')}}"></script>
<!-- Onepage Nav JS -->
<script src="{{asset('frontend/js/onepage-nav.min.js')}}"></script>
{{-- Isotope --}}
<script src="{{asset('frontend/js/isotope/isotope.pkgd.min.js')}}"></script>
<!-- Easing JS -->
<script src="{{asset('frontend/js/easing.js')}}"></script>

<!-- Active JS -->
<script src="{{asset('frontend/js/active.js')}}"></script>


@stack('scripts')
<script>
	setTimeout(function() {
		$('.alert').slideUp();
	}, 5000);
	$(function() {
		// ------------------------------------------------------- //
		// Multi Level dropdowns
		// ------------------------------------------------------ //
		$("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
			event.preventDefault();
			event.stopPropagation();

			$(this).siblings().toggleClass("show");


			if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
			}
			$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				$('.dropdown-submenu .show').removeClass("show");
			});

		});
	});
</script>