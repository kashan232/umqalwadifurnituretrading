<?php
$file = "resources/views/frontend/index.blade.php";
$content = file_get_contents($file);

// 1. Fix Featured Products Title
$oldFeaturedTitle = '<div class="section-title">
                    <h2>Featured Products</h2>
                </div>';
$newFeaturedTitle = '<div class="section-title text-center" style="margin-bottom: 50px;">
                    <span style="color: #036b41; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px;">Top Picks</span>
                    <h2 style="font-family: \'Orbitron\', sans-serif; font-size: 32px; font-weight: 800; color: #222; margin-top: 10px;">Featured <span style="color: #036b41;">Products</span></h2>
                </div>';
$content = str_replace($oldFeaturedTitle, $newFeaturedTitle, $content);

// 2. Fix Featured Products Price HTML to match Our Products
$oldFeaturedPrice = '<span class="old">Rs:{{number_format($product->price,2)}}</span>
                                @php
                                $after_discount=($product->price-($product->price*$product->discount)/100)
                                @endphp
                                <span>Rs:{{number_format($after_discount,2)}}</span>';
$newFeaturedPrice = '@php
                                    $after_discount=($product->price-($product->price*$product->discount)/100);
                                @endphp
                                <span>Rs:{{number_format($after_discount,2)}}</span>
                                @if($product->discount>0)
                                    <del style="padding-left:4%;">Rs:{{number_format($product->price,2)}}</del>
                                @endif';
$content = str_replace($oldFeaturedPrice, $newFeaturedPrice, $content);

// 3. Fix New Arrivals Title
$oldNewArrivalsTitle = '<div class="shop-section-title">
                            <h1>New Arrivals </h1>
                        </div>';
$newNewArrivalsTitle = '<div class="section-title text-center" style="margin-bottom: 50px;">
                            <span style="color: #036b41; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px;">Just In</span>
                            <h2 style="font-family: \'Orbitron\', sans-serif; font-size: 32px; font-weight: 800; color: #222; margin-top: 10px;">New <span style="color: #036b41;">Arrivals</span></h2>
                        </div>';
$content = str_replace($oldNewArrivalsTitle, $newNewArrivalsTitle, $content);

// 4. Replace New Arrivals single-list with single-product
$oldSingleList = '<div class="single-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="list-image overlay">
                                        @php
                                        $photo=explode(\',\',$product->photo);
                                        // dd($photo);
                                        @endphp
                                        <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                        <a href="{{route(\'add-to-cart\',$product->slug)}}" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 no-padding">
                                    <div class="content">
                                        <h4 class="title"><a href="#">{{$product->title}}</a></h4>
                                        @php
                                        $after_discount=($product->price-($product->price*$product->discount)/100)
                                        @endphp
                                        <p class="price with-discount">Rs:{{number_format($after_discount,2)}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>';

$newSingleProduct = '<div class="single-product">
                            <div class="product-img">
                                <a href="{{route(\'product-detail\',$product->slug)}}">
                                    @php
                                        $photo=explode(\',\',$product->photo);
                                    @endphp
                                    <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                    <img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class="ti-eye"></i><span>Quick Shop</span></a>
                                        <a title="Wishlist" href="{{route(\'add-to-wishlist\',$product->slug)}}"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <a title="Add to cart" href="{{route(\'add-to-cart\',$product->slug)}}"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="{{route(\'product-detail\',$product->slug)}}">{{$product->title}}</a></h3>
                                <div class="product-price">
                                    @php
                                        $after_discount=($product->price-($product->price*$product->discount)/100);
                                    @endphp
                                    <span>Rs:{{number_format($after_discount,2)}}</span>
                                    @if($product->discount>0)
                                        <del style="padding-left:4%;">Rs:{{number_format($product->price,2)}}</del>
                                    @endif
                                </div>
                            </div>
                        </div>';
                        
$content = str_replace($oldSingleList, $newSingleProduct, $content);

file_put_contents($file, $content);
echo "Updated sections.\n";
