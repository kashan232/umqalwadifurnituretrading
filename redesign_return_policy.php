<?php
$file = "resources/views/frontend/index.blade.php";
$content = file_get_contents($file);

$oldReturnPolicy = '<!-- Start Return Policy Area -->
<section id="return-policy" class="return-policy-area section" style="background-color: #fff; padding: 80px 0;">
    <div class="container">
        <div class="section-title text-center" style="margin-bottom: 50px;">
            <span style="color: #036b41; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px;">Peace of Mind</span>
            <h2 style="font-family: \'Orbitron\', sans-serif; font-size: 32px; font-weight: 800; color: #222; margin-top: 10px;">Our <span style="color: #036b41;">Return Policy</span></h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12 text-center">
                <div style="background: #f7f9fb; padding: 40px; border-radius: 12px; border-left: 5px solid #036b41; box-shadow: 0 5px 15px rgba(0,0,0,0.03);">
                    <i class="ti-reload" style="font-size: 40px; color: #036b41; margin-bottom: 20px; display: inline-block;"></i>
                    <h4 style="font-size: 22px; font-weight: 700; margin-bottom: 15px; color:#333;">14-Day Easy Returns</h4>
                    <p style="font-size: 16px; color: #555; line-height: 1.8; margin-bottom: 0;">
                        We want you to love your furniture. If you are not completely satisfied with your purchase, you can return it within <strong>14 days of delivery</strong>. Items must be in their original condition and packaging. A standard return shipping fee may apply depending on your location. Refund will be processed within 5-7 business days after inspection.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Return Policy Area -->';

$newReturnPolicy = '<!-- Start Return Policy Area -->
<section id="return-policy" class="return-policy-area section" style="background-color: #fff; padding: 90px 0; position: relative;">
    <div class="container">
        <div class="section-title text-center" style="margin-bottom: 60px;">
            <span style="color: #036b41; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px;">Peace of Mind</span>
            <h2 style="font-family: \'Orbitron\', sans-serif; font-size: 32px; font-weight: 800; color: #222; margin-top: 10px;">Hassle-Free <span style="color: #036b41;">Returns</span></h2>
        </div>
        <div class="row">
            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="return-step-card text-center" style="background: #fdfdfd; border: 1px solid #eee; padding: 40px 30px; border-radius: 15px; transition: all 0.3s ease; box-shadow: 0 10px 30px rgba(0,0,0,0.02); height: 100%; position: relative; overflow: hidden; margin-bottom:30px;">
                    <div style="width: 70px; height: 70px; background: rgba(3, 107, 65, 0.1); border-radius: 50%; display: flex; justify-content: center; align-items: center; margin: 0 auto 25px;">
                        <i class="ti-timer" style="font-size: 30px; color: #036b41;"></i>
                    </div>
                    <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 15px; color: #333; font-family: \'Orbitron\', sans-serif;">14 Days</h4>
                    <p style="font-size: 15px; color: #666; line-height: 1.6; margin-bottom: 0;">You have up to 14 days from the date of delivery to request a return if you change your mind.</p>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="return-step-card text-center" style="background: #036b41; padding: 40px 30px; border-radius: 15px; transition: all 0.3s ease; box-shadow: 0 15px 40px rgba(3, 107, 65, 0.2); height: 100%; position: relative; overflow: hidden; margin-bottom:30px; transform: scale(1.05); z-index: 2;">
                    <div style="width: 70px; height: 70px; background: rgba(255, 255, 255, 0.15); border-radius: 50%; display: flex; justify-content: center; align-items: center; margin: 0 auto 25px;">
                        <i class="ti-package" style="font-size: 30px; color: #fff;"></i>
                    </div>
                    <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 15px; color: #fff; font-family: \'Orbitron\', sans-serif;">Original Condition</h4>
                    <p style="font-size: 15px; color: rgba(255,255,255,0.9); line-height: 1.6; margin-bottom: 0;">Items must be unused, un-assembled, and in their original factory packaging to qualify.</p>
                </div>
            </div>
            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="return-step-card text-center" style="background: #fdfdfd; border: 1px solid #eee; padding: 40px 30px; border-radius: 15px; transition: all 0.3s ease; box-shadow: 0 10px 30px rgba(0,0,0,0.02); height: 100%; position: relative; overflow: hidden; margin-bottom:30px;">
                    <div style="width: 70px; height: 70px; background: rgba(3, 107, 65, 0.1); border-radius: 50%; display: flex; justify-content: center; align-items: center; margin: 0 auto 25px;">
                        <i class="ti-wallet" style="font-size: 30px; color: #036b41;"></i>
                    </div>
                    <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 15px; color: #333; font-family: \'Orbitron\', sans-serif;">Fast Refund</h4>
                    <p style="font-size: 15px; color: #666; line-height: 1.6; margin-bottom: 0;">Once we receive and inspect the item, your refund will be processed within 5-7 business days.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <a href="#faq" class="btn" style="background: #222; color: #fff; padding: 12px 35px; border-radius: 30px; font-weight: 600; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; display: inline-block; transition: all 0.3s ease; border: none;">Read Full Policy FAQs</a>
            </div>
        </div>
    </div>
</section>
<!-- Add some hover effects to the return cards -->
<style>
    .return-step-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.08) !important;
    }
    .return-step-card[style*="background: #036b41"]:hover {
        transform: scale(1.05) translateY(-10px) !important;
        box-shadow: 0 20px 40px rgba(3, 107, 65, 0.3) !important;
    }
</style>
<!-- End Return Policy Area -->';

// Try standard string replacement first
$result = str_replace($oldReturnPolicy, $newReturnPolicy, $content);

// If it fails due to whitespace issues, use regex
if($result === $content) {
    // Escape regex characters but make whitespace flexible
    $regexTarget = preg_quote($oldReturnPolicy, '/');
    $regexTarget = preg_replace('/\s+/', '\s*', $regexTarget);
    $result = preg_replace('/' . $regexTarget . '/', $newReturnPolicy, $content);
}

file_put_contents($file, $result);
echo "Return Policy redesigned successfully.\n";
