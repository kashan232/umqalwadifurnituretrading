<?php
$file = 'resources/views/frontend/pages/product-grids.blade.php';
$content = file_get_contents($file);

// Find <div class="product-action-2"> and replace its <a> content
$content = str_replace(
    '<a title="Add to cart" href="{{route(\'add-to-cart\',$product->slug)}}">Add to cart</a>',
    '<a title="Add to cart" href="{{route(\'add-to-cart\',$product->slug)}}"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>',
    $content
);

file_put_contents($file, $content);
echo "HTML for Add to Cart fixed.\n";
