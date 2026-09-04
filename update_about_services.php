<?php
$file = 'resources/views/frontend/pages/about-us.blade.php';
$content = file_get_contents($file);

// Replace the old Shop Services section
$old_services = '<!-- Start Shop Services Area -->
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
	<!-- End Shop Services Area -->';

$new_services = <<<HTML
<!-- Start Shop Services Area -->
<section class="shop-services section home" style="background-color: #f7f9fb; padding: 100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center" style="margin-bottom: 60px;">
                    <span style="color: #036b41; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px; display:block; margin-bottom: 10px;">Our Core Values</span>
                    <h2 style="font-family: 'Orbitron', sans-serif; font-size: 36px; font-weight: 800; color: #111; margin-top: 5px;">Why Choose <span style="color: #036b41;">Us</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="service-card text-center">
                    <div class="service-icon-box">
                        <i class="ti-rocket"></i>
                    </div>
                    <h4>Free Shipping</h4>
                    <p>On all orders over Rs: 1000</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="service-card text-center">
                    <div class="service-icon-box">
                        <i class="ti-reload"></i>
                    </div>
                    <h4>Free Return</h4>
                    <p>Within 14 days returns</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="service-card text-center">
                    <div class="service-icon-box">
                        <i class="ti-lock"></i>
                    </div>
                    <h4>Secure Payment</h4>
                    <p>100% secure payment</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="service-card text-center">
                    <div class="service-icon-box">
                        <i class="ti-tag"></i>
                    </div>
                    <h4>Best Price</h4>
                    <p>Guaranteed best prices</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Services Area -->
HTML;

$content = str_replace($old_services, $new_services, $content);

// Append the styles if not present
$css = <<<CSS
<style>
    /* Service Cards Styling (From Home Page) */
    .service-card {
        background: #ffffff;
        padding: 40px 30px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        transition: all 0.4s ease;
        border: 1px solid #f0f0f0;
        position: relative;
        overflow: hidden;
        z-index: 1;
        height: 100%;
    }
    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(3, 107, 65, 0.15);
        border-color: #036b41;
    }
    .service-icon-box {
        width: 85px;
        height: 85px;
        background: #eaf3ee;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        transition: all 0.4s ease;
    }
    .service-card:hover .service-icon-box {
        background: #036b41;
        transform: scale(1.1);
    }
    .service-icon-box i {
        font-size: 38px;
        color: #036b41;
        transition: all 0.4s ease;
    }
    .service-card:hover .service-icon-box i {
        color: #ffffff;
    }
    .service-card h4 {
        font-size: 20px;
        font-weight: 700;
        color: #222;
        margin-bottom: 12px;
        text-transform: capitalize;
    }
    .service-card p {
        font-size: 15px;
        color: #666;
        line-height: 1.6;
        margin: 0;
    }
    .service-card::before {
        content: "";
        position: absolute;
        top: -30px;
        right: -30px;
        width: 120px;
        height: 120px;
        background: rgba(3, 107, 65, 0.03);
        border-radius: 50%;
        z-index: -1;
        transition: all 0.4s ease;
    }
    .service-card:hover::before {
        transform: scale(3);
        background: rgba(3, 107, 65, 0.05);
    }
</style>
CSS;

if (strpos($content, '@push(\'styles\')') === false) {
    $content = str_replace('@endsection', "@endsection\n\n@push('styles')\n$css\n@endpush", $content);
} else {
    $content = preg_replace('/@push\(\'styles\'\)/', "@push('styles')\n$css", $content);
}

file_put_contents($file, $content);
echo "About Us services updated to match home page.\n";
