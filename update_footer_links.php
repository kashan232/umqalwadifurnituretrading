<?php
$file = 'resources/views/frontend/layouts/footer.blade.php';
$content = file_get_contents($file);

$oldSupport = <<<HTML
					<div class="single-footer links">
						<h4>Support</h4>
						<ul>
							<li><a href="{{ route('home') }}#return-policy">Returns & Exchanges</a></li>
							<li><a href="{{ route('home') }}#faq">FAQs</a></li>
							<li><a href="{{ route('contact') }}">Contact Support</a></li>
							<li><a href="{{ route('about-us') }}">About Us</a></li>
						</ul>
					</div>
HTML;

$newSupport = <<<HTML
					<div class="single-footer links">
						<h4>Support</h4>
						<ul>
							<li><a href="{{ route('contact') }}">Contact Support</a></li>
							<li><a href="{{ route('about-us') }}">About Us</a></li>
							<li><a href="{{ route('home') }}#return-policy">Returns & Exchanges</a></li>
							<li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
							<li><a href="{{ route('shipping-policy') }}">Shipping Policy</a></li>
							<li><a href="{{ route('terms-of-service') }}">Terms of Service</a></li>
						</ul>
					</div>
HTML;

$content = str_replace($oldSupport, $newSupport, $content);
file_put_contents($file, $content);
echo "Footer updated with policy links.\n";
