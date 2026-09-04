<?php
$file = 'resources/views/frontend/pages/about-us.blade.php';
$content = <<<'EOD'
@extends('frontend.layouts.master')

@section('title','UMQ AL WADI FURNITURE TRADING ||  About Us')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="{{route('about-us')}}">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Start About Us Section -->
    <section class="about-us-section section" style="background-color: #fbfbfb; padding: 100px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="about-content" style="padding-right: 30px;">
                        <span style="color: #036b41; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px;">Discover Our Story</span>
                        <h2 style="font-family: 'Orbitron', sans-serif; font-size: 38px; font-weight: 800; margin: 15px 0 25px; color: #222; line-height: 1.3;">Welcome to <br> <span style="color: #036b41;">UMQ AL WADI</span></h2>
                        <p style="font-size: 16px; color: #555; line-height: 1.8; margin-bottom: 20px;">
                            We are passionate about transforming ordinary spaces into inspiring environments. With a commitment to quality craftsmanship and modern design, our curated collection of premium home furniture, ergonomic office setups, and high-performance gaming chairs is tailored to elevate your lifestyle and workspace.
                        </p>
                        <p style="font-size: 16px; color: #555; line-height: 1.8; margin-bottom: 35px;">
                            Our mission is to provide exceptional value and unparalleled comfort. Every piece in our store is selected with extreme care to ensure durability, standout style, and absolute satisfaction for our customers. We believe that your furniture should be as unique and ambitious as you are.
                        </p>
                        <a href="{{route('contact')}}" class="btn ws-btn" style="background-color: #036b41; color: #fff; padding: 14px 35px; border-radius: 4px; text-transform: uppercase; font-weight: 600; letter-spacing: 1.5px; transition: all 0.3s ease; display: inline-block;">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 mt-5 mt-lg-0">
                    <div class="about-image position-relative" style="padding-left: 20px;">
                        <!-- Real Store Image (Portrait) -->
                        <img src="{{asset('about_us_store.jpg')}}" alt="UMQ AL WADI Store" style="width: 100%; aspect-ratio: 3/4; object-fit: cover; border-radius: 12px; box-shadow: 0 15px 40px rgba(0,0,0,0.15);">
                        
                        <!-- Decorative Badge -->
                        <div class="experience-badge" style="position: absolute; bottom: -30px; left: -10px; background: #036b41; color: white; padding: 25px 30px; border-radius: 8px; box-shadow: 0 10px 20px rgba(3, 107, 65, 0.4); text-align: center; border: 3px solid #fff;">
                            <h3 style="font-size: 36px; font-weight: 800; color: #fff; margin: 0;">100%</h3>
                            <span style="font-size: 13px; text-transform: uppercase; letter-spacing: 1px; font-weight: 600;">Quality<br>Guaranteed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->

	<!-- Start Vision & Mission (Extra Section for Dedicated Page) -->
	<section class="vision-mission section" style="padding: 80px 0; background: #fff;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12 mb-4 mb-lg-0">
					<div class="vision-box" style="background: #f4f7f6; padding: 40px; border-radius: 12px; border-left: 5px solid #036b41; height: 100%;">
						<h3 style="font-family: 'Orbitron', sans-serif; color: #023a23; font-weight: 800; margin-bottom: 20px; font-size: 24px;"><i class="ti-eye" style="color: #036b41; margin-right: 10px;"></i> Our Vision</h3>
						<p style="color: #666; line-height: 1.8; font-size: 15px; margin: 0;">To be the leading premium furniture brand in the region, recognized for our commitment to sustainable design, exceptional comfort, and a relentless focus on creating inspiring living and working environments.</p>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="mission-box" style="background: #f4f7f6; padding: 40px; border-radius: 12px; border-left: 5px solid #036b41; height: 100%;">
						<h3 style="font-family: 'Orbitron', sans-serif; color: #023a23; font-weight: 800; margin-bottom: 20px; font-size: 24px;"><i class="ti-target" style="color: #036b41; margin-right: 10px;"></i> Our Mission</h3>
						<p style="color: #666; line-height: 1.8; font-size: 15px; margin: 0;">To curate and deliver high-quality, stylish, and ergonomic furniture that exceeds customer expectations. We strive to provide a seamless shopping experience and unparalleled customer support every step of the way.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Vision & Mission -->

	<!-- Start Shop Services Area -->
	<section class="shop-services section" style="background-color: #fbfbfb; padding: 60px 0;">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service" style="text-align: center; padding: 20px;">
						<i class="ti-rocket" style="font-size: 32px; color: #036b41; margin-bottom: 15px; display: block;"></i>
						<h4 style="font-size: 16px; font-weight: 700; color: #333; margin-bottom: 5px; text-transform: uppercase;">Free Shipping</h4>
						<p style="font-size: 13px; color: #777;">Orders over Rs:1000</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service" style="text-align: center; padding: 20px;">
						<i class="ti-reload" style="font-size: 32px; color: #036b41; margin-bottom: 15px; display: block;"></i>
						<h4 style="font-size: 16px; font-weight: 700; color: #333; margin-bottom: 5px; text-transform: uppercase;">Free Return</h4>
						<p style="font-size: 13px; color: #777;">Within 14 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service" style="text-align: center; padding: 20px;">
						<i class="ti-lock" style="font-size: 32px; color: #036b41; margin-bottom: 15px; display: block;"></i>
						<h4 style="font-size: 16px; font-weight: 700; color: #333; margin-bottom: 5px; text-transform: uppercase;">Secure Payment</h4>
						<p style="font-size: 13px; color: #777;">100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service" style="text-align: center; padding: 20px;">
						<i class="ti-tag" style="font-size: 32px; color: #036b41; margin-bottom: 15px; display: block;"></i>
						<h4 style="font-size: 16px; font-weight: 700; color: #333; margin-bottom: 5px; text-transform: uppercase;">Best Price</h4>
						<p style="font-size: 13px; color: #777;">Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->

@endsection
EOD;
file_put_contents($file, $content);
echo "About Us page updated successfully.\n";
