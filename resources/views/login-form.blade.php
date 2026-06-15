<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIMU Portal</title>
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
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
        <h2>Welcomm</h2>
        <p>Sign in to your account</p>
    </div>

    <div class="form-group">
        <label>Email Address</label>
        <input type="text" id="email" placeholder="you@limu.edu.ly">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" id="password" placeholder="••••••••">
    </div>

   <p class="error-msg" id="error-msg">Invalid email or password!</p>

   <button type="button" onclick="checkLogin()" class="btn-login">
    Log In
</button>
</div>
<script>

function checkLogin() {

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (email && password) {

        if (
            email === 'hadeel_4455@limu.edu.ly' &&
            password === 'limu#2023limu#2018'
        ) {
            document.getElementById('error-msg').style.display = 'none';

        
            window.location.href = "{{ route('departments.index') }}";

        } else {
            document.getElementById('error-msg').style.display = 'block';
        }

    } else {
        document.getElementById('error-msg').style.display = 'block';
    }
}
</script>
</body>
</html>