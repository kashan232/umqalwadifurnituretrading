<?php
$file = 'resources/views/frontend/index.blade.php';
$content = file_get_contents($file);

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
echo "Badge fixed on index.\n";
