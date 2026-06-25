<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign in · University Portal</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .auth-wrap { min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 24px; }
        .auth-card { width: 100%; max-width: 380px; }
        .auth-head { text-align: center; margin-bottom: 18px; }
        .auth-head h1 { margin: 0 0 4px; font-size: 1.5rem; }
        .auth-head p { margin: 0; color: var(--muted); }
        .auth-error { background: #fde8e6; border: 1px solid #f3b7b1; color: #a52f25; border-radius: 10px; padding: 10px 14px; margin-bottom: 16px; }
        .auth-demo { margin-top: 16px; text-align: center; font-size: 0.85rem; color: var(--muted); }
        .remember { display: flex; align-items: center; gap: 8px; }
        .remember input { width: auto; }
        .remember label { margin: 0; font-weight: 500; }
    </style>
</head>
<body>
    <div class="auth-wrap">
        <div class="auth-card">
            <div class="auth-head">
                <h1>🎓 University Portal</h1>
                <p>Sign in to continue</p>
            </div>

            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="auth-error">{{ $errors->first() }}</div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}"
                                   class="form-control" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" class="form-control" required>
                        </div>

                        <div class="form-group remember">
                            <input id="remember" type="checkbox" name="remember" value="1">
                            <label for="remember">Remember me</label>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%;">Sign in</button>
                    </form>
                </div>
            </div>

            <p style="margin-top: 16px; text-align: center; font-size: 0.9rem; color: var(--muted);">
                No account yet? <a href="{{ route('register') }}">Sign up</a>
            </p>
            <p class="auth-demo">Demo account — <strong>admin@uni.edu</strong> / <strong>password</strong></p>
        </div>
    </div>
</body>
</html>
