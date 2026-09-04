<?php
$file = 'resources/views/frontend/pages/order-track.blade.php';
$content = <<<'EOD'
@extends('frontend.layouts.master')

@section('title','UMQ AL WADI FURNITURE TRADING ||  Order Track Page')

@section('main-content')
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="javascript:void(0);">Order Track</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<section class="tracking_box_area section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="tracking-card">
                    <div class="tracking-header">
                        <h2>Track Your Order</h2>
                        <p>To track your order please enter your Order ID in the box below and press the "Track Order" button. This was given to you on your receipt and in the confirmation email.</p>
                    </div>
                    
                    <form class="tracking_form" action="{{route('product.track.order')}}" method="post" novalidate="novalidate">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="order_number" placeholder="Enter your order number (e.g. ORD-12345)" required>
                        </div>
                        <div class="form-group text-center mt-4">
                            <button type="submit" class="btn track-btn">Track Order</button>
                        </div>
                    </form>

                    @if(session('order_details'))
                        @php
                            $order = session('order_details');
                            $status = $order->status;
                        @endphp
                        <div class="tracking-result mt-5">
                            <hr style="border-top: 1px dashed #ccc; margin-bottom: 40px;">
                            
                            <div class="order-info-card mb-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Order ID: <span>{{ $order->order_number }}</span></h5>
                                        <p>Date: {{ $order->created_at->format('d M Y') }}</p>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <h5>Amount: <span>Rs: {{ number_format($order->total_amount, 2) }}</span></h5>
                                        <p>Payment: {{ strtoupper($order->payment_method) }}</p>
                                    </div>
                                </div>
                            </div>

                            @if($status == 'cancel')
                                <div class="alert alert-danger text-center mt-4" style="border-radius: 8px; font-weight: 600;">
                                    This order has been cancelled.
                                </div>
                            @else
                                <div class="track-timeline mt-5">
                                    <ul class="progressbar">
                                        <li class="{{ in_array($status, ['new', 'process', 'delivered']) ? 'active' : '' }}">
                                            <div class="icon"><i class="ti-receipt"></i></div>
                                            <p>Placed</p>
                                        </li>
                                        <li class="{{ in_array($status, ['process', 'delivered']) ? 'active' : '' }}">
                                            <div class="icon"><i class="ti-package"></i></div>
                                            <p>Processing</p>
                                        </li>
                                        <li class="{{ $status == 'delivered' ? 'active' : '' }}">
                                            <div class="icon"><i class="ti-check-box"></i></div>
                                            <p>Delivered</p>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .tracking_box_area {
        background-color: #f6f7fb;
        padding: 60px 0;
    }
    .tracking-card {
        background: #fff;
        padding: 50px;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        border-top: 4px solid #036b41;
    }
    .tracking-header {
        text-align: center;
        margin-bottom: 35px;
    }
    .tracking-header h2 {
        font-family: 'Orbitron', sans-serif;
        color: #333;
        font-size: 28px;
        font-weight: 800;
        text-transform: uppercase;
        margin-bottom: 10px;
    }
    .tracking-header p {
        color: #666;
        font-size: 15px;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 auto;
    }
    .tracking_form .form-group input {
        width: 100%;
        height: 50px;
        padding: 0 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background: #f9f9f9;
        font-size: 15px;
        color: #333;
        text-align: center;
        transition: all 0.3s ease;
    }
    .tracking_form .form-group input:focus {
        border-color: #036b41;
        background: #fff;
        box-shadow: 0 0 5px rgba(3, 107, 65, 0.2);
        outline: none;
    }
    .track-btn {
        background: #036b41;
        color: #fff;
        padding: 12px 35px;
        font-size: 15px;
        font-weight: 700;
        text-transform: uppercase;
        border-radius: 5px;
        border: none;
        transition: all 0.3s ease;
    }
    .track-btn:hover {
        background: #023a23;
        color: #fff;
        transform: translateY(-2px);
    }
    
    /* Order Info */
    .order-info-card {
        background: #fafafa;
        border: 1px solid #eee;
        padding: 20px;
        border-radius: 8px;
    }
    .order-info-card h5 {
        color: #333;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 5px;
    }
    .order-info-card h5 span {
        color: #036b41;
        font-weight: 700;
    }
    .order-info-card p {
        color: #777;
        font-size: 14px;
        margin: 0;
    }

    /* Timeline */
    .track-timeline {
        width: 100%;
        margin-top: 30px;
    }
    .progressbar {
        counter-reset: step;
        padding: 0;
        display: flex;
        justify-content: space-between;
        position: relative;
    }
    .progressbar li {
        list-style-type: none;
        width: 33.33%;
        text-align: center;
        position: relative;
        z-index: 2;
    }
    .progressbar li p {
        margin-top: 15px;
        color: #888;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
    }
    .progressbar li .icon {
        width: 50px;
        height: 50px;
        line-height: 46px;
        margin: 0 auto;
        background: #fff;
        border: 2px solid #ddd;
        border-radius: 50%;
        font-size: 20px;
        color: #aaa;
        transition: all 0.3s ease;
    }
    .progressbar li::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 3px;
        background: #ddd;
        top: 25px;
        left: -50%;
        z-index: -1;
    }
    .progressbar li:first-child::after {
        content: none;
    }
    
    /* Active State */
    .progressbar li.active .icon {
        background: #036b41;
        border-color: #036b41;
        color: #fff;
    }
    .progressbar li.active p {
        color: #036b41;
    }
    .progressbar li.active + li::after {
        background: #ddd;
    }
    .progressbar li.active::after {
        background: #036b41;
    }
</style>
@endpush
EOD;
file_put_contents($file, $content);
echo "Order track page redesigned cleanly.\n";
