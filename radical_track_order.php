<?php
$file = 'resources/views/frontend/pages/order-track.blade.php';
$content = <<<'EOD'
@extends('frontend.layouts.master')

@section('title','UMQ AL WADI FURNITURE TRADING || Track Your Order')

@section('main-content')

<!-- Tracking Hero Section -->
<section class="tracking-hero">
    <div class="tracking-overlay"></div>
    <div class="container relative-z">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2>Track Your Order</h2>
                <p>Enter your Order ID below to check the real-time status of your shipment.</p>
                
                <div class="tracking-search-box mt-5">
                    <form action="{{route('product.track.order')}}" method="post" class="d-flex align-items-center">
                        @csrf
                        <i class="ti-search search-icon"></i>
                        <input type="text" name="order_number" placeholder="Enter your Order Number (e.g. ORD-2TM9ULTION)" required>
                        <button type="submit">Track</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@if(session('order_details'))
@php
    $order = session('order_details');
    $status = $order->status;
@endphp
<section class="tracking-results py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="tracking-result-card">
                    <div class="order-info-card mb-5">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h4>Order: <span>{{ $order->order_number }}</span></h4>
                                <p><i class="ti-calendar"></i> Placed on {{ $order->created_at->format('M d, Y') }}</p>
                            </div>
                            <div class="col-md-6 text-md-right">
                                <h4>Rs:{{ number_format($order->total_amount, 2) }}</h4>
                                <p><i class="ti-credit-card"></i> {{ strtoupper($order->payment_method) }} ({{ ucfirst($order->payment_status) }})</p>
                            </div>
                        </div>
                    </div>

                    @if($status == 'cancel')
                        <div class="alert alert-danger text-center" style="border-radius: 12px; font-weight: 700; padding: 30px;">
                            <i class="ti-close" style="font-size: 32px; display: block; margin-bottom: 15px;"></i>
                            We're sorry, but this order has been cancelled.
                        </div>
                    @else
                        <div class="track-timeline">
                            <ul class="progressbar">
                                <li class="{{ in_array($status, ['new', 'process', 'delivered']) ? 'active' : '' }}">
                                    <div class="icon-wrap"><i class="ti-receipt"></i></div>
                                    <p>Order Placed</p>
                                </li>
                                <li class="{{ in_array($status, ['process', 'delivered']) ? 'active' : '' }}">
                                    <div class="icon-wrap"><i class="ti-package"></i></div>
                                    <p>Processing</p>
                                </li>
                                <li class="{{ in_array($status, ['delivered']) ? 'active' : '' }}">
                                    <div class="icon-wrap"><i class="ti-truck"></i></div>
                                    <p>Out for Delivery</p>
                                </li>
                                <li class="{{ $status == 'delivered' ? 'active' : '' }}">
                                    <div class="icon-wrap"><i class="ti-check-box"></i></div>
                                    <p>Delivered</p>
                                </li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endsection

@push('styles')
<style>
    /* Tracking Hero */
    .tracking-hero {
        position: relative;
        padding: 120px 0;
        background: url('https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80') center/cover;
    }
    .tracking-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: rgba(2, 58, 35, 0.85); /* brand green dark */
    }
    .relative-z {
        position: relative;
        z-index: 2;
    }
    .tracking-hero h2 {
        font-family: 'Orbitron', sans-serif;
        color: #fff;
        font-size: 42px;
        font-weight: 800;
        text-transform: uppercase;
        margin-bottom: 15px;
        letter-spacing: 2px;
    }
    .tracking-hero p {
        color: #e0f2eb;
        font-size: 16px;
    }
    .tracking-search-box form {
        background: #fff;
        padding: 10px;
        border-radius: 50px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.2);
    }
    .tracking-search-box .search-icon {
        font-size: 20px;
        color: #036b41;
        padding: 0 20px;
    }
    .tracking-search-box input {
        flex: 1;
        border: none;
        height: 50px;
        font-size: 16px;
        color: #333;
        outline: none;
        background: transparent;
    }
    .tracking-search-box button {
        background: #036b41;
        color: #fff;
        border: none;
        height: 50px;
        padding: 0 40px;
        border-radius: 50px;
        font-size: 15px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }
    .tracking-search-box button:hover {
        background: #023a23;
    }

    /* Tracking Results */
    .tracking-results {
        background: #f4f7f6;
    }
    .tracking-result-card {
        background: #fff;
        border-radius: 20px;
        padding: 50px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.05);
    }
    .order-info-card {
        background: #fdfdfd;
        border-left: 5px solid #036b41;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.03);
    }
    .order-info-card h4 {
        font-family: 'Orbitron', sans-serif;
        color: #023a23;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 10px;
    }
    .order-info-card h4 span {
        color: #036b41;
    }
    .order-info-card p {
        color: #666;
        margin: 0;
        font-size: 15px;
    }
    .order-info-card p i {
        color: #036b41;
        margin-right: 5px;
    }

    /* Timeline */
    .track-timeline {
        padding-top: 30px;
    }
    .progressbar {
        padding: 0;
        display: flex;
        justify-content: space-between;
        position: relative;
    }
    .progressbar li {
        list-style-type: none;
        width: 25%;
        text-align: center;
        position: relative;
        z-index: 2;
    }
    .progressbar li p {
        margin-top: 20px;
        color: #999;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .icon-wrap {
        width: 70px;
        height: 70px;
        margin: 0 auto;
        background: #fff;
        border: 3px solid #eee;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: #ccc;
        transition: all 0.4s ease;
    }
    .progressbar li::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 4px;
        background: #eee;
        top: 33px;
        left: -50%;
        z-index: -1;
    }
    .progressbar li:first-child::after {
        content: none;
    }
    
    /* Active State */
    .progressbar li.active .icon-wrap {
        background: #036b41;
        border-color: #036b41;
        color: #fff;
        box-shadow: 0 0 0 8px rgba(3, 107, 65, 0.15);
    }
    .progressbar li.active p {
        color: #036b41;
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
echo "Order track radically redesigned.\n";
