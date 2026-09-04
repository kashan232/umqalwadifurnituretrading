<?php
$file = "resources/views/frontend/index.blade.php";
$content = file_get_contents($file);

function extractSection($content, $start, $end) {
    // We use /s to make . match newlines
    $pattern = "/" . preg_quote($start, '/') . ".*?" . preg_quote($end, '/') . "\r?\n/s";
    preg_match($pattern, $content, $matches);
    if (!empty($matches)) {
        return $matches[0];
    }
    return "";
}

$sections = [
    'small_banner' => ['<!-- Start Small Banner  -->', '<!-- End Small Banner -->'],
    'about_us' => ['<!-- Start About Us Section -->', '<!-- End About Us Section -->'],
    'product_area' => ['<!-- Start Product Area -->', '<!-- End Product Area -->'],
    'midium_banner' => ['<!-- Start Midium Banner  -->', '<!-- End Midium Banner -->'],
    'most_popular' => ['<!-- Start Most Popular -->', '<!-- End Most Popular Area -->'],
    'shop_services' => ['<!-- Start Shop Services Area -->', '<!-- End Shop Services Area -->'],
    'shop_home_list' => ['<!-- Start Shop Home List  -->', '<!-- End Shop Home List  -->'],
    'return_policy' => ['<!-- Start Return Policy Area -->', '<!-- End Return Policy Area -->'],
    'faqs' => ['<!-- Start FAQs Area -->', '<!-- End FAQs Area -->'],
    'contact' => ['<!-- Start Contact Area -->', '<!-- End Contact Area -->'],
];

$extracted = [];
foreach ($sections as $key => $markers) {
    $extracted[$key] = extractSection($content, $markers[0], $markers[1]);
    if(empty($extracted[$key])) {
        echo "Failed to extract: $key\n";
    }
    // Remove it from original content
    $content = str_replace($extracted[$key], "", $content);
}

// Ensure the new order is completely logical for a premium e-commerce site
$newOrder = [
    $extracted['small_banner'],     // 1. Categories directly under slider
    $extracted['shop_services'],    // 2. Trust factors (Why Choose Us, Free Shipping) early on
    $extracted['about_us'],         // 3. Brand Story
    $extracted['midium_banner'],    // 4. Promo Banners to break flow
    $extracted['most_popular'],     // 5. Featured Carousel
    $extracted['shop_home_list'],   // 6. New Arrivals
    $extracted['product_area'],     // 7. Full Tabbed Catalog (User can spend time here)
    $extracted['return_policy'],    // 8. Policy (Peace of mind before footer)
    $extracted['faqs'],             // 9. FAQs
    $extracted['contact']           // 10. Contact Us right before Footer/Newsletter
];

$newContentBlocks = implode("\n", $newOrder);

// Insert everything right before the newsletter include
$insertPoint = "@include('frontend.layouts.newsletter')";
if (strpos($content, $insertPoint) !== false) {
    $finalContent = str_replace($insertPoint, $newContentBlocks . "\n" . $insertPoint, $content);
    file_put_contents($file, $finalContent);
    echo "Reordered homepage successfully.\n";
} else {
    echo "Failed to find insertion point.\n";
}
