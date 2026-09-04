<?php
$file = 'resources/views/frontend/pages/order-track.blade.php';
$content = <<<'EOD'
@extends('frontend.layouts.master')

@section('title','UMQ AL WADI FURNITURE TRADING || Track Your Order')

@section('main-content')
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="javascript:void(0);">Track Order</a></li>
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
                        <p>Enter your Order ID below to check the current status of your shipment.</p>
                    </div>
                    
                    <div class="tracking-body">
                        <form class="tracking_form" action="{{route('product.track.order')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Order Number</label>
                                <input type="text" class="form-control" name="order_number" placeholder="e.g. ORD-2TM9ULTION" required>
                            </div>
                            <div class="form-group text-center mt-4">
                                <button type="submit" class="btn track-btn">Track Order</button>
                            </div>
                        </form>
                    </div>

                    @if(session('order_details'))
                        @php
                            $order = session('order_details');
                            $status = $order->status;
                        @endphp
                        <div class="tracking-result mt-5">
                            <div class="order-info-card">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Order ID:</strong> {{ $order->order_number }}</p>
                                        <p><strong>Date:</strong> {{ $order->created_at->format('M d, Y') }}</p>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <p><strong>Total Amount:</strong> Rs:{{ number_format($order->total_amount, 2) }}</p>
                                        <p><strong>Payment:</strong> {{ strtoupper($order->payment_method) }} ({{ $order->payment_status }})</p>
                                    </div>
                                </div>
                            </div>

                            @if($status == 'cancel')
                                <div class="alert alert-danger text-center mt-4" style="border-radius: 10px; font-weight: 700;">
                                    <i class="ti-close" style="font-size: 24px; display: block; margin-bottom: 10px;"></i>
                                    This order has been cancelled.
                                </div>
                            @else
                                <div class="track-timeline mt-5">
                                    <ul class="progressbar">
                                        <li class="{{ in_array($status, ['new', 'process', 'delivered']) ? 'active' : '' }}">
                                            <i class="ti-receipt"></i>
                                            <p>Order Placed</p>
                                        </li>
                                        <li class="{{ in_array($status, ['process', 'delivered']) ? 'active' : '' }}">
                                            <i class="ti-package"></i>
                                            <p>Processing</p>
                                        </li>
                                        <li class="{{ in_array($status, ['delivered']) ? 'active' : '' }}">
                                            <i class="ti-truck"></i>
                                            <p>Out for Delivery</p>
                                        </li>
                                        <li class="{{ $status == 'delivered' ? 'active' : '' }}">
                                            <i class="ti-check-box"></i>
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
        background-color: #f7f9fb;
        padding: 80px 0;
    }
    .tracking-card {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.08);
        padding: 50px;
        border: 1px solid rgba(0,0,0,0.03);
    }
    .tracking-header {
        text-align: center;
        margin-bottom: 40px;
    }
    .tracking-header h2 {
        font-family: 'Orbitron', sans-serif;
        color: #036b41;
        font-size: 32px;
        font-weight: 800;
        text-transform: uppercase;
        margin-bottom: 15px;
        letter-spacing: 1px;
    }
    .tracking-header p {
        color: #666;
        font-size: 15px;
    }
    .tracking_form .form-group label {
        font-weight: 700;
        color: #222;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
    }
    .tracking_form .form-control {
        height: 60px;
        border: 2px solid #eee;
        border-radius: 12px;
        padding: 0 25px;
        font-size: 16px;
        font-weight: 600;
        color: #333;
        background: #fdfdfd;
        text-align: center;
        transition: all 0.3s ease;
    }
    .tracking_form .form-control:focus {
        border-color: #036b41;
        background: #fff;
        box-shadow: 0 0 0 4px rgba(3, 107, 65, 0.1);
        outline: none;
    }
    .track-btn {
        background: #036b41;
        color: #fff;
        padding: 15px 40px;
        font-size: 16px;
        font-weight: 800;
        text-transform: uppercase;
        border-radius: 12px;
        letter-spacing: 1px;
        border: none;
        box-shadow: 0 5px 15px rgba(3, 107, 65, 0.3);
        transition: all 0.3s ease;
    }
    .track-btn:hover {
        background: #023a23;
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(3, 107, 65, 0.4);
    }
    
    /* Order Info Card */
    .order-info-card {
        background: #f0f7f4;
        border: 1px dashed #036b41;
        border-radius: 12px;
        padding: 25px;
    }
    .order-info-card p {
        margin-bottom: 5px;
        color: #333;
        font-size: 15px;
    }
    .order-info-card p strong {
        color: #036b41;
    }

    /* Tracking Timeline Progress Bar */
    .track-timeline {
        width: 100%;
        margin-top: 60px;
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
        width: 25%;
        text-align: center;
        font-size: 14px;
        font-weight: 700;
        color: #ccc;
        position: relative;
        z-index: 2;
    }
    .progressbar li p {
        margin-top: 15px;
        color: #999;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .progressbar li i {
        display: block;
        width: 50px;
        height: 50px;
        line-height: 46px;
        background: #fff;
        border: 2px solid #eee;
        border-radius: 50%;
        margin: 0 auto;
        font-size: 20px;
        color: #ccc;
        transition: all 0.3s ease;
    }
    .progressbar li::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 4px;
        background: #eee;
        top: 23px;
        left: -50%;
        z-index: -1;
    }
    .progressbar li:first-child::after {
        content: none;
    }
    .progressbar li.active {
        color: #036b41;
    }
    .progressbar li.active p {
        color: #036b41;
    }
    .progressbar li.active i {
        background: #036b41;
        border-color: #036b41;
        color: #fff;
        box-shadow: 0 0 0 5px rgba(3, 107, 65, 0.2);
    }
    .progressbar li.active + li::after {
        background: #eee;
    }
    .progressbar li.active::after {
        background: #036b41;
    }
</style>
@endpush
EOD;

file_put_contents($file, $content);
echo "Order track page redesigned beautifully.\n";
