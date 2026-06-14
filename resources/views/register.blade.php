<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | LIMU Portal</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #0a1628 0%, #1a3a6b 50%, #2155a3 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }

        .login-box {
            background: #fff;
            border-radius: 16px;
            padding: 48px 40px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }

        .login-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 28px;
            justify-content: center;
        }

        .brand-mark {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px; height: 48px;
            border-radius: 12px;
            background: linear-gradient(135deg, #0a1628, #1a3a6b);
            color: #fff;
        }

        .brand-mark svg { width: 26px; height: 26px; }

        .login-logo-text h1 {
            margin: 0;
            font-size: 1.4rem;
            font-weight: 700;
            color: #0a1628;
        }

        .login-logo-text span {
            font-size: 0.7rem;
            font-weight: 600;
            letter-spacing: 0.12em;
            color: #6b7688;
            text-transform: uppercase;
        }

        .login-title {
            text-align: center;
            margin-bottom: 24px;
        }

        .login-title h2 {
            margin: 0 0 6px;
            font-size: 1.3rem;
            color: #1f2733;
        }

        .login-title p {
            margin: 0;
            color: #6b7688;
            font-size: 0.9rem;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 6px;
            color: #1f2733;
        }

        .form-group input {
            width: 100%;
            padding: 11px 14px;
            border: 1px solid #e3e8f0;
            border-radius: 8px;
            font-size: 0.95rem;
            font-family: inherit;
            color: #1f2733;
            background: #f8faff;
            box-sizing: border-box;
            transition: border-color 0.15s, box-shadow 0.15s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #1a3a6b;
            box-shadow: 0 0 0 3px rgba(26,58,107,0.12);
            background: #fff;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #0a1628, #1a3a6b);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            font-family: inherit;
            cursor: pointer;
            margin-top: 8px;
            text-decoration: none;
            display: block;
            text-align: center;
            transition: background 0.15s;
            box-sizing: border-box;
        }

        .login-btn:hover {
            background: linear-gradient(135deg, #1a3a6b, #2155a3);
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 16px;
            color: #1a3a6b;
            font-size: 0.88rem;
            text-decoration: none;
            font-weight: 500;
        }

        .back-link:hover { text-decoration: underline; }

        .login-footer {
            text-align: center;
            margin-top: 20px;
            color: #6b7688;
            font-size: 0.82rem;
        }
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
        <h2>Sign Up</h2>
        <p>Fill in your details to register</p>
    </div>


    <div class="form-group">
        <label>Email Address</label>
        <input type="email" placeholder="you@limu.edu.ly">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" placeholder="••••••••">
    </div>

  

    <a href="{{ route('departments.index') }}" class="login-btn">
    Sign Up
</a>

<a href="{{ route('departments.index') }}" class="login-btn">
    Log In
</a>


    <a href="/" class="back-link">← Back to Welcome</a>

    <div class="login-footer">
        &copy; {{ date('Y') }} LIMU Portal &mdash; University Management System
    </div>
</div>

</body>
</html>