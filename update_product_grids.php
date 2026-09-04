<?php
$file = 'resources/views/frontend/pages/product-grids.blade.php';
$content = file_get_contents($file);

// 1. Fix Breadcrumb home link
$content = str_replace('<a href="index1.html">Home', '<a href="{{route(\'home\')}}">Home', $content);

// 2. Fix the filter button color
$content = preg_replace('/background:\s*#F7941D;/', 'background: #036b41;', $content);
$content = preg_replace('/class="btn"\s*style="[^"]*"/i', 'class="btn" style="background:#036b41; color:#fff;"', $content);

// 3. Inject new styles
$css = <<<CSS
<style>
    /* Uniform Product Card Heights */
    .single-product {
        height: 100%;
        display: flex;
        flex-direction: column;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        border: 1px solid #f0f0f0;
        transition: all 0.3s ease;
        background: #fff;
        margin-bottom: 30px;
    }
    .single-product:hover {
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        transform: translateY(-5px);
    }
    .single-product .product-img {
        position: relative;
        width: 100%;
        padding-top: 100%; /* Square aspect ratio */
        background: #f9f9f9;
        overflow: hidden;
    }
    .single-product .product-img a {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }
    .single-product .product-img a img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: transform 0.5s ease;
    }
    .single-product:hover .product-img a img {
        transform: scale(1.08);
    }
    .single-product .product-content {
        padding: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .single-product .product-content h3 {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 10px;
        line-height: 1.4;
    }
    .single-product .product-content h3 a {
        color: #222;
        transition: color 0.3s ease;
    }
    .single-product .product-content h3 a:hover {
        color: #036b41;
    }
    .single-product .product-content .product-price {
        font-size: 15px;
        font-weight: 700;
        color: #036b41;
    }
    .single-product .product-content .product-price span.old {
        text-decoration: line-through;
        color: #999;
        font-weight: 400;
        margin-right: 8px;
    }
    
    /* Shop Sidebar Improvements */
    .shop-sidebar .single-widget {
        background: #fbfbfb;
        padding: 30px;
        border-radius: 8px;
        margin-bottom: 30px;
        border: 1px solid #eee;
    }
    .shop-sidebar .single-widget .title {
        font-size: 18px;
        font-weight: 700;
        color: #222;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 2px solid #036b41;
        text-transform: uppercase;
    }
    .shop-sidebar .categor-list li {
        margin-bottom: 10px;
    }
    .shop-sidebar .categor-list li a {
        color: #555;
        font-size: 15px;
        transition: all 0.3s ease;
        display: block;
    }
    .shop-sidebar .categor-list li a:hover {
        color: #036b41;
        padding-left: 5px;
    }
    .shop-sidebar .categor-list li ul {
        margin-left: 15px;
        margin-top: 10px;
        border-left: 2px solid #eee;
        padding-left: 15px;
    }
    
    /* Filter Price */
    .shop-sidebar .range .price-filter {
        display: block;
        margin-bottom: 20px;
    }
    .ui-slider-horizontal .ui-slider-range {
        background: #036b41 !important;
    }
    .ui-slider .ui-slider-handle {
        border-color: #036b41 !important;
        background: #fff !important;
    }
    .filter_button {
        background: #036b41 !important;
        color: #fff !important;
        padding: 10px 25px !important;
        border-radius: 4px !important;
        border: none !important;
        text-transform: uppercase !important;
        font-weight: 600 !important;
        letter-spacing: 1px !important;
        transition: all 0.3s ease !important;
    }
    .filter_button:hover {
        background: #023a23 !important;
    }

    /* Product Action Buttons */
    .product-img .button-head {
        background: #fff;
        display: flex;
        justify-content: space-between;
        padding: 10px 15px;
        position: absolute;
        bottom: -50px;
        left: 0;
        width: 100%;
        transition: all 0.4s ease;
        border-top: 1px solid #eee;
        z-index: 9;
    }
    .single-product:hover .button-head {
        bottom: 0;
    }
    .product-action a, .product-action-2 a {
        color: #333;
        font-size: 14px;
        font-weight: 600;
        margin-right: 15px;
        transition: all 0.3s ease;
    }
    .product-action a:hover, .product-action-2 a:hover {
        color: #036b41;
    }
    .product-action-2 a {
        color: #036b41;
        text-transform: uppercase;
    }
    .price-dec {
        position: absolute;
        top: 15px;
        left: 15px;
        background: #ea4335;
        color: #fff;
        padding: 5px 10px;
        border-radius: 3px;
        font-size: 12px;
        font-weight: 700;
        z-index: 2;
    }

    /* Top Bar Improvements */
    .shop-top {
        background: #fbfbfb;
        padding: 15px 20px;
        border-radius: 8px;
        border: 1px solid #eee;
        margin-bottom: 30px;
    }
    .shop-shorter select {
        padding: 8px 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        outline: none;
    }
</style>
CSS;

if (strpos($content, '/* Uniform Product Card Heights */') === false) {
    $content = str_replace('<style>', "<style>\n" . str_replace('<style>', '', str_replace('</style>', '', $css)), $content);
}

file_put_contents($file, $content);
echo "Product Grid styling updated.\n";
