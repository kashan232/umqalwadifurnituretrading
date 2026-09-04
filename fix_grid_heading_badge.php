<?php
$file = 'resources/views/frontend/pages/product-grids.blade.php';
$content = file_get_contents($file);

// 1. Add "Our Products" heading before the shop-top bar
$headingHtml = <<<HTML
<div class="row">
                            <div class="col-12">
                                <div class="section-title" style="margin-bottom: 25px; text-align: left;">
                                    <h2 style="font-family: 'Orbitron', sans-serif; font-size: 32px; font-weight: 800; color: #111; border-bottom: 3px solid #036b41; display: inline-block; padding-bottom: 5px;">Our <span style="color: #036b41;">Products</span></h2>
                                </div>
                            </div>
                        </div>
HTML;

if (strpos($content, 'Our <span style="color: #036b41;">Products</span>') === false) {
    $content = str_replace('<div class="shop-top">', $headingHtml . "\n                                <div class=\"shop-top\">", $content);
}

// 2. Fix the discount badge (price-dec) in the CSS block
$oldCss = <<<CSS
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
CSS;

$newCss = <<<CSS
    .single-product .product-img .price-dec {
        position: absolute !important;
        top: 15px !important;
        left: 15px !important;
        background: #ea4335 !important;
        color: #fff !important;
        padding: 6px 14px !important;
        border-radius: 20px !important;
        font-size: 12px !important;
        font-weight: 700 !important;
        z-index: 2 !important;
        width: auto !important;
        max-width: fit-content !important;
        display: inline-block !important;
        box-shadow: 0 4px 10px rgba(234, 67, 53, 0.3) !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
    }
CSS;

$content = str_replace($oldCss, $newCss, $content);
file_put_contents($file, $content);
echo "Heading added and discount badge fixed.\n";
