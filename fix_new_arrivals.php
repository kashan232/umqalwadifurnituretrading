<?php
$file = "resources/views/frontend/index.blade.php";
$content = file_get_contents($file);

// 1. Fix the New Arrivals layout to use Owl Carousel Slider
$oldNewArrivalsStart = '<div class="row">
                    @php
                    $product_lists=DB::table(\'products\')->where(\'status\',\'active\')->orderBy(\'id\',\'DESC\')->limit(6)->get();
                    @endphp
                    @foreach($product_lists as $product)
                    <div class="col-sm-12 col-md-6 col-lg-4">';
$newNewArrivalsStart = '<div class="row">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                            @php
                            // Fetch top 10 latest products for the slider
                            $product_lists=DB::table(\'products\')->where(\'status\',\'active\')->orderBy(\'id\',\'DESC\')->limit(10)->get();
                            @endphp
                            @foreach($product_lists as $product)';
$content = str_replace($oldNewArrivalsStart, $newNewArrivalsStart, $content);

// 2. Remove the closing </div> for the col-lg-4
$oldNewArrivalsEnd = '</div>
                    @endforeach
                </div>';
$newNewArrivalsEnd = '    @endforeach
                        </div>
                    </div>
                </div>';
// Because $oldNewArrivalsEnd is generic, let's use regex for safety on the exact section
// Let's actually just do a regex replace on the whole New Arrivals block

$pattern = '/<!-- Start Shop Home List  -->.*?<!-- End Shop Home List  -->/s';
preg_match($pattern, $content, $matches);
if (!empty($matches)) {
    $shopHomeList = $matches[0];
    // Replace the opening structure
    $shopHomeList = preg_replace(
        '/<div class="row">\s*@php\s*\$product_lists=DB::table\(\'products\'\)->where\(\'status\',\'active\'\)->orderBy\(\'id\',\'DESC\'\)->limit\(6\)->get\(\);\s*@endphp\s*@foreach\(\$product_lists as \$product\)\s*<div class="col-sm-12 col-md-6 col-lg-4">/s',
        '<div class="row">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                            @php
                            $product_lists=DB::table(\'products\')->where(\'status\',\'active\')->orderBy(\'id\',\'DESC\')->limit(12)->get();
                            @endphp
                            @foreach($product_lists as $product)',
        $shopHomeList
    );
    // Replace the closing structure
    $shopHomeList = preg_replace(
        '/<\/div>\s*<!-- End Single List  -->\s*<\/div>\s*@endforeach\s*<\/div>/s',
        '<!-- End Single List  -->
                            @endforeach
                        </div>
                    </div>
                </div>',
        $shopHomeList
    );
    
    $content = str_replace($matches[0], $shopHomeList, $content);
}

// 3. Robust Height CSS for ALL Product Cards
$robustCSS = '
    /* Fix Card Heights and Image Contain */
    .single-product {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background: #fff;
    }
    .single-product .product-img {
        position: relative;
        width: 100%;
        height: 300px; /* Fixed height for all images */
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    .single-product .product-img a {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .single-product .product-img img {
        max-width: 100%;
        max-height: 100%;
        width: auto !important;
        height: auto !important;
        object-fit: contain;
    }
    .single-product .product-content {
        padding-top: 15px;
    }
';

$content = str_replace('</style>', $robustCSS . "\n</style>", $content);

file_put_contents($file, $content);
echo "New Arrivals Slider and Card Heights fixed.\n";
