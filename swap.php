<?php
$file = "resources/views/frontend/index.blade.php";
$content = file_get_contents($file);

$homeListPattern = "/<!-- Start Shop Home List  -->.*?<!-- End Shop Home List  -->\r?\n/s";
$servicesPattern = "/<!-- Start Shop Services Area -->.*?<!-- End Shop Services Area -->\r?\n/s";

preg_match($homeListPattern, $content, $homeListMatches);
preg_match($servicesPattern, $content, $servicesMatches);

if(!empty($homeListMatches) && !empty($servicesMatches)) {
    // Remove both from original content
    $content = str_replace($homeListMatches[0], "", $content);
    $content = str_replace($servicesMatches[0], "", $content);
    
    // Insert them in new order after End Most Popular Area
    $insertPoint = "<!-- End Most Popular Area -->\r\n";
    if(strpos($content, "<!-- End Most Popular Area -->\n") !== false) {
        $insertPoint = "<!-- End Most Popular Area -->\n";
    }
    
    $newSections = "\n" . $servicesMatches[0] . "\n" . $homeListMatches[0];
    $content = str_replace($insertPoint, $insertPoint . $newSections, $content);
    
    file_put_contents($file, $content);
    echo "Successfully swapped sections.\n";
} else {
    echo "Failed to match sections.\n";
}
