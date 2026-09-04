<?php
\    /* Ultra Premium Split Layout for Auth Pages */
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
    .shop.login .login-form {
        background: #fff !important;
        padding: 0 !important;
        border-radius: 20px !important;
        box-shadow: 0 25px 60px rgba(0,0,0,0.1) !important;
        border: none !important;
        display: flex;
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
    }
    .auth-right {
        width: 55%;
        padding: 50px 40px;
    }
    .shop.login .login-form h2 {
        font-family: 'Orbitron', sans-serif !important;
        font-size: 28px !important;
        font-weight: 800 !important;
        color: #023a23 !important;
        text-align: left !important;
        margin-bottom: 5px !important;
    }
    .shop.login .login-form > p {
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
        text-transform: none !important;
        letter-spacing: 0.5px !important;
    } = <<<CSS
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
    .shop.login .login-form {
        background: #fff !important;
        padding: 0 !important;
        border-radius: 20px !important;
        box-shadow: 0 25px 60px rgba(0,0,0,0.1) !important;
        border: none !important;
        display: flex;
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
    }
    .auth-right {
        width: 55%;
        padding: 50px 40px;
    }
    .shop.login .login-form h2 {
        font-family: 'Orbitron', sans-serif !important;
        font-size: 28px !important;
        font-weight: 800 !important;
        color: #023a23 !important;
        text-align: left !important;
        margin-bottom: 5px !important;
    }
    .shop.login .login-form > p {
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
        text-transform: none !important;
        letter-spacing: 0.5px !important;
    }
CSS;

function inject(\) {
    \ = file_get_contents(\);
    
    // Add the split divs if not already there
    if(strpos(\, 'auth-left') === false) {
        // Find the start of the form
        \ = '<form class="form"';
        // Wrap the whole right side content in auth-right, and prepend auth-left
        \ = '
        <div class="auth-left">
            <h2>Welcome to UMQ AL WADI</h2>
            <p>Discover the finest premium furniture to elevate your space. Join our community today.</p>
        </div>
        <div class="auth-right">
            <h2>'.(strpos(\, 'login') !== false ? 'Sign In' : 'Create Account').'</h2>
            <p>'.(strpos(\, 'login') !== false ? 'Please sign in to your account' : 'Register to checkout faster').'</p>
            <form class="form"';
        
        // Remove old h2 and p
        \ = preg_replace('/<h2>.*?<\/h2>/s', '', \, 1);
        \ = preg_replace('/<p>.*?<\/p>/s', '', \, 1);
        
        \ = str_replace('<form class="form"', \, \);
        
        // Close auth-right div before the closing login-form div
        \ = str_replace('<!--/ End Form -->', '<!--/ End Form --></div>', \);
    }
    
    \ = preg_replace('/<style>.*?<\/style>/s', '<style>' . \    /* Ultra Premium Split Layout for Auth Pages */
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
    .shop.login .login-form {
        background: #fff !important;
        padding: 0 !important;
        border-radius: 20px !important;
        box-shadow: 0 25px 60px rgba(0,0,0,0.1) !important;
        border: none !important;
        display: flex;
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
    }
    .auth-right {
        width: 55%;
        padding: 50px 40px;
    }
    .shop.login .login-form h2 {
        font-family: 'Orbitron', sans-serif !important;
        font-size: 28px !important;
        font-weight: 800 !important;
        color: #023a23 !important;
        text-align: left !important;
        margin-bottom: 5px !important;
    }
    .shop.login .login-form > p {
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
        text-transform: none !important;
        letter-spacing: 0.5px !important;
    } . '</style>', \);
    file_put_contents(\, \);
}
inject('resources/views/frontend/pages/login.blade.php');
inject('resources/views/frontend/pages/register.blade.php');
echo "Split layout applied to auth pages.";