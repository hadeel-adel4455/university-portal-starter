<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | LIMU Portal</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
    
    </style>
</head>
<body>

<div class="login-box">
    <div class="login-logo">
        <div class="brand-mark">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 10 12 4 2 10l10 6 10-6Z"></path>
                <path d="M6 12v5c0 1.5 2.7 3 6 3s6-1.5 6-3v-5"></path>
            </svg>
        </div>
        <div class="login-logo-text">
            <h1>LIMU Portal</h1>
            <span>University Management</span>
        </div>
    </div>

    <div class="login-title">
        <h2>Welcome Back </h2>
        <p>Sign in to your account</p>
    </div>

    <div class="form-group">
        <label>Email Address</label>
        <input type="email" placeholder="you@limu.edu.ly">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" placeholder="••••••••">
    </div>

    <a href="#" class="forgot-link">Forgot password?</a>

    <a href="/register-form" class="login-btn" style="margin-top:10px; background:#f8faff; color:#1a3a6b; border:1px solid #1a3a6b;">
    Sign Up
</a>

    <a href="{{ route('departments.index') }}" class="login-btn">
    Log In
</a>


    <div class="login-footer">
        &copy; {{ date('Y') }} LIMU Portal &mdash; University Management System
    </div>
</div>

</body>
</html>