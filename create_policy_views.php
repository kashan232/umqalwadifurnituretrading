<?php
$privacy = <<<BLADE
@extends('frontend.layouts.master')
@section('title', 'UMQ AL WADI FURNITURE TRADING || Privacy Policy')
@section('main-content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="javascript:void(0);">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="policy-page section" style="padding: 80px 0; background: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-12">
                <div class="policy-content" style="background: #fbfbfb; padding: 50px; border-radius: 12px; border-top: 5px solid #036b41; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                    <h2 style="font-family: 'Orbitron', sans-serif; font-size: 32px; font-weight: 800; color: #222; margin-bottom: 30px;">Privacy Policy</h2>
                    
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">At UMQ AL WADI FURNITURE TRADING, we are committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website.</p>
                    
                    <h4 style="font-size: 20px; font-weight: 700; color: #333; margin: 30px 0 15px;">1. Information We Collect</h4>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">We may collect personal information such as your name, email address, phone number, and shipping address when you register for an account, place an order, or subscribe to our newsletter. We also collect non-personal data automatically, such as IP addresses and browser types, to improve user experience.</p>
                    
                    <h4 style="font-size: 20px; font-weight: 700; color: #333; margin: 30px 0 15px;">2. How We Use Your Information</h4>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">The information we collect is used to process transactions, deliver your furniture orders securely, send order confirmations, and respond to customer service requests. We may also use your email to send promotional updates, which you can opt out of at any time.</p>
                    
                    <h4 style="font-size: 20px; font-weight: 700; color: #333; margin: 30px 0 15px;">3. Data Security</h4>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">We use administrative, technical, and physical security measures to help protect your personal information. While we have taken reasonable steps to secure the personal information you provide to us, please be aware that despite our efforts, no security measures are perfect or impenetrable.</p>
                    
                    <h4 style="font-size: 20px; font-weight: 700; color: #333; margin: 30px 0 15px;">4. Sharing of Information</h4>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">We do not sell, trade, or rent your personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information with our business partners, trusted affiliates, and advertisers.</p>
                    
                    <h4 style="font-size: 20px; font-weight: 700; color: #333; margin: 30px 0 15px;">Contact Us</h4>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 0;">If you have questions or comments about this Privacy Policy, please contact us through our Contact Page or email us directly.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
BLADE;

$shipping = <<<BLADE
@extends('frontend.layouts.master')
@section('title', 'UMQ AL WADI FURNITURE TRADING || Shipping Policy')
@section('main-content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="javascript:void(0);">Shipping Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="policy-page section" style="padding: 80px 0; background: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-12">
                <div class="policy-content" style="background: #fbfbfb; padding: 50px; border-radius: 12px; border-top: 5px solid #036b41; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                    <h2 style="font-family: 'Orbitron', sans-serif; font-size: 32px; font-weight: 800; color: #222; margin-bottom: 30px;">Shipping Policy</h2>
                    
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">Thank you for visiting and shopping at UMQ AL WADI FURNITURE TRADING. Following are the terms and conditions that constitute our Shipping Policy.</p>
                    
                    <h4 style="font-size: 20px; font-weight: 700; color: #333; margin: 30px 0 15px;">1. Shipment Processing Time</h4>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">All orders are processed within 2-3 business days. Orders are not shipped or delivered on weekends or holidays. If we are experiencing a high volume of orders, shipments may be delayed by a few days. Please allow additional days in transit for delivery.</p>
                    
                    <h4 style="font-size: 20px; font-weight: 700; color: #333; margin: 30px 0 15px;">2. Shipping Rates & Delivery Estimates</h4>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 10px;">Shipping charges for your order will be calculated and displayed at checkout.</p>
                    <ul style="color: #555; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
                        <li><strong>Standard Delivery:</strong> Free on orders over Rs: 1000. Delivery typically takes 3-5 business days.</li>
                        <li><strong>Express Delivery:</strong> Available for select items at an additional cost. Delivery typically takes 1-2 business days.</li>
                    </ul>
                    
                    <h4 style="font-size: 20px; font-weight: 700; color: #333; margin: 30px 0 15px;">3. Shipment Confirmation & Order Tracking</h4>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">You will receive a Shipment Confirmation email once your order has shipped containing your tracking number(s). You can also track your order directly on our website using the "Track Order" page.</p>
                    
                    <h4 style="font-size: 20px; font-weight: 700; color: #333; margin: 30px 0 15px;">4. Damages</h4>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">UMQ AL WADI FURNITURE TRADING is not liable for any products damaged or lost during shipping. If you received your order damaged, please contact the shipment carrier to file a claim. Please save all packaging materials and damaged goods before filing a claim.</p>
                    
                    <h4 style="font-size: 20px; font-weight: 700; color: #333; margin: 30px 0 15px;">Contact Us</h4>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 0;">If you have any questions regarding your shipment or delivery schedule, please reach out to our support team.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
BLADE;

$terms = <<<BLADE
@extends('frontend.layouts.master')
@section('title', 'UMQ AL WADI FURNITURE TRADING || Terms of Service')
@section('main-content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="javascript:void(0);">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="policy-page section" style="padding: 80px 0; background: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-12">
                <div class="policy-content" style="background: #fbfbfb; padding: 50px; border-radius: 12px; border-top: 5px solid #036b41; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                    <h2 style="font-family: 'Orbitron', sans-serif; font-size: 32px; font-weight: 800; color: #222; margin-bottom: 30px;">Terms of Service</h2>
                    
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">Welcome to UMQ AL WADI FURNITURE TRADING. These terms and conditions outline the rules and regulations for the use of our website and the purchase of our premium furniture products.</p>
                    
                    <h4 style="font-size: 20px; font-weight: 700; color: #333; margin: 30px 0 15px;">1. Acceptance of Terms</h4>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">By accessing this website, we assume you accept these terms and conditions. Do not continue to use UMQ AL WADI FURNITURE TRADING if you do not agree to take all of the terms and conditions stated on this page.</p>
                    
                    <h4 style="font-size: 20px; font-weight: 700; color: #333; margin: 30px 0 15px;">2. Products and Pricing</h4>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">All products are subject to availability. We reserve the right to discontinue any product at any time. Prices for our products are subject to change without notice. We shall not be liable to you or to any third-party for any modification, price change, suspension, or discontinuance of the Service.</p>
                    
                    <h4 style="font-size: 20px; font-weight: 700; color: #333; margin: 30px 0 15px;">3. Returns and Exchanges</h4>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">Please review our Return Policy for details on refunds and exchanges. Note that our strict policy dictates a 7 working day return window, and products must be unassembled and in their original box.</p>
                    
                    <h4 style="font-size: 20px; font-weight: 700; color: #333; margin: 30px 0 15px;">4. User Accounts</h4>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">When you create an account with us, you must provide us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service.</p>
                    
                    <h4 style="font-size: 20px; font-weight: 700; color: #333; margin: 30px 0 15px;">5. Governing Law</h4>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">These terms and conditions are governed by and construed in accordance with the laws, and you irrevocably submit to the exclusive jurisdiction of the courts in that location.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
BLADE;

file_put_contents('resources/views/frontend/pages/privacy-policy.blade.php', $privacy);
file_put_contents('resources/views/frontend/pages/shipping-policy.blade.php', $shipping);
file_put_contents('resources/views/frontend/pages/terms.blade.php', $terms);
echo "Policy views created.\n";
