<?php
$file = 'app/Http/Controllers/FrontendController.php';
$content = file_get_contents($file);

$newMethods = <<<METHODS
    public function privacyPolicy(){
        return view('frontend.pages.privacy-policy');
    }
    public function shippingPolicy(){
        return view('frontend.pages.shipping-policy');
    }
    public function termsOfService(){
        return view('frontend.pages.terms');
    }
METHODS;

if (strpos($content, 'privacyPolicy') === false) {
    // Insert just before the last closing brace
    $content = preg_replace('/}\s*$/', "\n" . $newMethods . "\n}", $content);
    file_put_contents($file, $content);
    echo "Methods added to FrontendController.\n";
} else {
    echo "Methods already exist.\n";
}
