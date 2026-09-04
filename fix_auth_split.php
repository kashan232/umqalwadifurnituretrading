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
        box-shadow: 0 25px 60px rgba(0,0,0,0.1) !important;
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
        padding: 40px;
        color: #fff;
    }
    .auth-left h2 {
        font-family: 'Orbitron', sans-serif;
        font-size: 28px;
        font-weight: 800;
        margin-bottom: 15px;
        color: #fff !important;
    }
    .auth-left p {
        font-size: 15px;
        line-height: 1.6;
        color: #e0f2eb !important;
        margin-bottom: 0 !important;
        text-align: left !important;
    }
    .auth-right {
        width: 55%;
        padding: 50px 40px;
    }
    .auth-right h2 {
        font-family: 'Orbitron', sans-serif !important;
        font-size: 28px !important;
        font-weight: 800 !important;
        color: #023a23 !important;
        text-align: left !important;
        margin-bottom: 5px !important;
    }
    .auth-right > p {
        text-align: left !important;
        margin-bottom: 30px !important;
        color: #888 !important;
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
            padding: 30px;
        }
    }
CSS;

function inject($path, $css) {
    $c = file_get_contents($path);
    
    if(strpos($c, 'auth-left') === false) {
        // Find everything inside <div class="login-form"> and wrap it
        $is_login = strpos($path, 'login') !== false;
        $title = $is_login ? 'Sign In' : 'Create Account';
        $desc = $is_login ? 'Please sign in to your account' : 'Register to checkout faster';
        
        $replacement = '
        <div class="auth-left">
            <h2>Welcome to UMQ AL WADI</h2>
            <p>Discover the finest premium furniture to elevate your space. Join our community today.</p>
        </div>
        <div class="auth-right">
            <h2>'.$title.'</h2>
            <p>'.$desc.'</p>
            <form class="form"';
            
        // We need to replace the original h2 and p, and the form start
        // Be careful not to replace breadcrumbs or other stuff
        $c = preg_replace('/<h2>.*?<\/h2>/s', '', $c, 1);
        $c = preg_replace('/<p>.*?<\/p>/s', '', $c, 1);
        $c = str_replace('<form class="form"', $replacement, $c);
        
        // Add closing div for auth-right
        $c = str_replace('<!--/ End Form -->', '<!--/ End Form --></div>', $c);
    }
    
    $c = preg_replace('/<style>.*?<\/style>/s', '<style>' . $css . '</style>', $c);
    file_put_contents($path, $c);
}

inject('resources/views/frontend/pages/login.blade.php', $css);
inject('resources/views/frontend/pages/register.blade.php', $css);
echo "Split layout applied to auth pages.\n";
