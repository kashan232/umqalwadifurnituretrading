<?php
$file = "resources/views/frontend/index.blade.php";
$content = file_get_contents($file);

$targetPattern = "/<section class=\"midium-banner\">\s*<div class=\"container\">\s*<div class=\"row\">/s";
$replacement = "<section class=\"midium-banner\">\n    <div class=\"container\">\n        <div class=\"row\">\n            <div class=\"col-12\">\n                <div class=\"section-title text-center\" style=\"margin-bottom: 50px;\">\n                    <span style=\"color: #036b41; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px;\">Exclusive Collection</span>\n                    <h2 style=\"font-family: 'Orbitron', sans-serif; font-size: 32px; font-weight: 800; color: #222; margin-top: 10px;\">Featured <span style=\"color: #036b41;\">Items</span></h2>\n                </div>\n            </div>\n        </div>\n        <div class=\"row\">";

$content = preg_replace($targetPattern, $replacement, $content);
file_put_contents($file, $content);
echo "Replaced heading.\n";
