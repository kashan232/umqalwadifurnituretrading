<?php
$file = 'routes/web.php';
$content = file_get_contents($file);

$newRoutes = <<<ROUTES
    Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('/shipping-policy', [FrontendController::class, 'shippingPolicy'])->name('shipping-policy');
    Route::get('/terms-of-service', [FrontendController::class, 'termsOfService'])->name('terms-of-service');
ROUTES;

if (strpos($content, '/privacy-policy') === false) {
    $content = str_replace("Route::get('/FAQs', [FrontendController::class, 'FAQs'])->name('FAQs');", "Route::get('/FAQs', [FrontendController::class, 'FAQs'])->name('FAQs');\n" . $newRoutes, $content);
    file_put_contents($file, $content);
    echo "Routes added.\n";
} else {
    echo "Routes already exist.\n";
}
