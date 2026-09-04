<?php

$login_path = 'resources/views/frontend/pages/login.blade.php';
$register_path = 'resources/views/frontend/pages/register.blade.php';

$auth_styles = '
<style>
    /* Premium Auth Pages Design */
    .shop.login.section {
        background: #f7f9fb;
        padding: 80px 0 !important;
    }
    .login-form {
        background: #fff;
        padding: 50px 40px;
        border-radius: 15px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.05);
        border-top: 5px solid #036b41;
    }
    .login-form h2 {
        font-family: \'Orbitron\', sans-serif;
        font-size: 32px;
        font-weight: 800;
        color: #023a23;
        text-align: center;
        text-transform: uppercase;
        margin-bottom: 10px;
        letter-spacing: 1px;
    }
    .login-form p {
        text-align: center;
        color: #666;
        margin-bottom: 30px;
        font-size: 15px;
    }
    .login-form .form-group label {
        font-weight: 600;
        color: #333;
        font-size: 14px;
        margin-bottom: 8px;
    }
    .login-form .form-group label span {
        color: #ea4335;
    }
    .login-form .form-group input {
        width: 100%;
        padding: 15px 20px;
        border: 1px solid #e5e5e5;
        border-radius: 8px;
        background: #fdfdfd;
        font-size: 14px;
        transition: all 0.3s ease;
    }
    .login-form .form-group input:focus {
        border-color: #036b41;
        background: #fff;
        box-shadow: 0 0 0 3px rgba(3, 107, 65, 0.1);
        outline: none;
    }
    .login-form .login-btn {
        display: flex;
        flex-direction: column;
        gap: 15px;
        margin-top: 15px;
    }
    .login-form .login-btn button[type="submit"] {
        width: 100%;
        background: #036b41;
        color: #fff;
        padding: 14px;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
        border: none;
        border-radius: 8px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(3, 107, 65, 0.2);
    }
    .login-form .login-btn button[type="submit"]:hover {
        background: #023a23;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(3, 107, 65, 0.3);
    }
    .login-form .login-btn a.btn {
        width: 100%;
        background: transparent;
        color: #036b41;
        padding: 12px;
        font-size: 15px;
        font-weight: 700;
        text-transform: uppercase;
        border: 2px solid #036b41;
        border-radius: 8px;
        text-align: center;
        transition: all 0.3s ease;
    }
    .login-form .login-btn a.btn:hover {
        background: #036b41;
        color: #fff;
    }
</style>
';

function updateFile($path, $auth_styles) {
    $content = file_get_contents($path);
    // Remove old inline <style> block from @push(\'styles\')
    $content = preg_replace('/<style>.*?<\/style>/s', $auth_styles, $content);
    file_put_contents($path, $content);
}

updateFile($login_path, $auth_styles);
updateFile($register_path, $auth_styles);

echo "Auth pages updated with premium design.\n";
