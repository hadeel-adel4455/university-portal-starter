<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up · University Portal</title>
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
        .auth-alt { margin-top: 16px; text-align: center; font-size: 0.9rem; color: var(--muted); }
    </style>
</head>
<body>
    <div class="auth-wrap">
        <div class="auth-card">
            <div class="auth-head">
                <h1>🎓 Create your account</h1>
                <p>Join the University Portal</p>
            </div>

            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="auth-error">{{ $errors->first() }}</div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Full name</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}"
                                   class="form-control" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}"
                                   class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm password</label>
                            <input id="password_confirmation" type="password" name="password_confirmation"
                                   class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%;">Sign up</button>
                    </form>
                </div>
            </div>

            <p class="auth-alt">Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
        </div>
    </div>
</body>
</html>
