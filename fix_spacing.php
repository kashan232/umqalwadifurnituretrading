<?php

$css = <<<CSS
    /* Ultra Premium Split Layout for Auth Pages */
    .shop.login {
        background: #f4f7f6 !important;
        padding: 60px 0 !important;
        min-height: 100vh;
        display: flex;
        align-items: center;
    }
    .shop.login .container {
        max-width: 900px !important;
    }
    .shop.login .col-lg-6.offset-lg-3 {
        flex: 0 0 100%;
        max-width: 100%;
        margin-left: 0;
    }
    .shop.login .login-form {
        background: #fff !important;
        padding: 0 !important;
        border-radius: 20px !important;
        box-shadow: 0 25px 60px rgba(0,0,0,0.15) !important;
        border: none !important;
        display: flex !important;
        flex-direction: row !important;
        overflow: hidden;
    }
    .auth-left {
        width: 45%;
        background: linear-gradient(135deg, rgba(3, 107, 65, 0.9), rgba(2, 58, 35, 0.9)), url('https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80') center/cover;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 50px 40px;
        color: #fff;
    }
    .auth-left h2 {
        font-family: 'Orbitron', sans-serif !important;
        font-size: 32px !important;
        font-weight: 800 !important;
        margin-bottom: 25px !important;
        color: #fff !important;
        line-height: 1.4 !important; /* Fixed overlapping text */
        padding-bottom: 0 !important; /* removed space that was for the old green line */
    }
    .shop.login .login-form h2:before {
        display: none !important; /* Hide the weird green line */
    }
    .auth-left p {
        font-size: 16px !important;
        line-height: 1.8 !important;
        color: #e0f2eb !important;
        margin-bottom: 0 !important;
        text-align: left !important;
        font-weight: 400 !important;
    }
    .auth-right {
        width: 55%;
        padding: 50px 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .auth-right h2 {
        font-family: 'Orbitron', sans-serif !important;
        font-size: 28px !important;
        font-weight: 800 !important;
        color: #023a23 !important;
        text-align: left !important;
        margin-bottom: 10px !important;
        line-height: 1.3 !important;
        padding-bottom: 0 !important;
    }
    .auth-right > p {
        text-align: left !important;
        margin-bottom: 30px !important;
        color: #888 !important;
        font-size: 15px !important;
    }
    .shop.login .form {
        margin-top: 0 !important;
    }
    .shop.login .form .form-group input {
        height: 50px !important;
        border-radius: 8px !important;
        border: 2px solid #e1e8e5 !important;
        background: #fafcfb !important;
        padding: 0 15px !important;
    }
    .shop.login .form .form-group input:focus {
        border-color: #036b41 !important;
        background: #fff !important;
        box-shadow: none !important;
    }
    .shop.login .form .btn {
        height: 50px !important;
        border-radius: 8px !important;
        font-size: 15px !important;
        text-transform: uppercase !important;
        letter-spacing: 0.5px !important;
    }
    @media (max-width: 768px) {
        .shop.login .login-form {
            flex-direction: column !important;
        }
        .auth-left, .auth-right {
            width: 100%;
        }
        .auth-left {
            padding: 40px 30px;
        }
    }
CSS;

function updateCSS($path, $css) {
    $c = file_get_contents($path);
    $c = preg_replace('/<style>.*?<\/style>/s', '<style>' . $css . '</style>', $c);
    file_put_contents($path, $c);
}

updateCSS('resources/views/frontend/pages/login.blade.php', $css);
updateCSS('resources/views/frontend/pages/register.blade.php', $css);
echo "Spacing fixed.\n";