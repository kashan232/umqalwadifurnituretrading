<?php
$file = 'resources/views/frontend/pages/product-grids.blade.php';
$content = file_get_contents($file);

$oldCss = <<<CSS
    .product-action a, .product-action-2 a {
        color: #333;
        font-size: 14px;
        font-weight: 600;
        margin-right: 15px;
        transition: all 0.3s ease;
    }
CSS;

$newCss = <<<CSS
    .product-action a, .product-action-2 a {
        color: #333;
        font-size: 18px;
        font-weight: 600;
        margin-right: 15px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background: #f4f4f4;
    }
    .product-action a:hover, .product-action-2 a:hover {
        background: #036b41;
        color: #fff !important;
    }
    .product-action a span, .product-action-2 a span {
        display: none !important;
    }
    .product-action a i, .product-action-2 a i {
        margin: 0;
        padding: 0;
    }
CSS;

$content = str_replace($oldCss, $newCss, $content);
file_put_contents($file, $content);
echo "Icons CSS fixed on grids.\n";
