<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'University Portal') | LIMU Portal</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { display: block; background: #f0f6ff; }

        /* ===== Topbar ===== */
        .topbar {
            position: fixed;
            top: 0; left: 0; right: 0;
            height: 64px;
            background: linear-gradient(135deg, #0a1628, #1a3a6b);
            display: flex;
            align-items: center;
            padding: 0 24px;
            z-index: 200;
            box-shadow: 0 2px 15px rgba(0,0,0,0.3);
        }
        .topbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: #fff;
            font-weight: 700;
            font-size: 1.15rem;
        }
        .brand-mark {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px; height: 36px;
            border-radius: 8px;
            background: rgba(255,255,255,0.2);
            color: #fff;
        }
        .brand-mark svg { width: 20px; height: 20px; }
        .topbar-brand-sub {
            display: block;
            font-size: 0.65rem;
            font-weight: 600;
            letter-spacing: 0.12em;
            color: rgba(255,255,255,0.6);
            text-transform: uppercase;
        }

        /* ===== Navbar ===== */
        .navbar {
            position: fixed;
            top: 64px; left: 0; right: 0;
            height: 56px;
            background: linear-gradient(135deg, #1a3a6b, #2155a3);
            display: flex;
            align-items: center;
            padding: 0 24px;
            gap: 4px;
            z-index: 190;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        .navbar a {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 8px;
            color: rgba(255,255,255,0.8);
            font-weight: 500;
            font-size: 0.9rem;
            text-decoration: none;
            transition: background 0.15s, color 0.15s;
        }
        .navbar a svg {
            width: 16px; height: 16px;
            flex-shrink: 0;
        }
        .navbar a:hover {
            background: rgba(255,255,255,0.15);
            color: #fff;
        }
        .navbar a.active {
            background: rgba(255,255,255,0.25);
            color: #fff;
            border-bottom: 2px solid #5ba3f5;
        }

        /* ===== Layout ===== */
        .app-body {
            padding-top: 120px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .main-content {
            flex: 1 0 auto;
        }
        .main-content > .container {
            padding-top: 32px;
            padding-bottom: 48px;
            max-width: 1100px;
        }

        /* ===== Footer ===== */
        .site-footer {
            background: linear-gradient(135deg, #0a1628, #1a3a6b);
            color: rgba(255,255,255,0.6);
            border-top: none;
            padding: 18px 0;
            text-align: center;
            font-size: 0.85rem;
        }

        /* ===== Cards ===== */
        .card {
            background: #fff;
            border: none;
            box-shadow: 0 2px 15px rgba(10,22,40,0.08);
        }
        .card-header {
            background: linear-gradient(135deg, #1a3a6b, #2155a3);
            color: #fff;
            border-bottom: none;
            border-radius: 12px 12px 0 0;
        }

        /* ===== Buttons ===== */
        .btn-primary {
            background: linear-gradient(135deg, #1a3a6b, #2a6dd9);
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #2155a3, #3d82f0);
        }

        /* ===== Mobile ===== */
        .menu-toggle {
            display: none;
            background: rgba(255,255,255,0.15);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 8px;
            width: 38px; height: 38px;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #fff;
            margin-left: auto;
        }
        .menu-toggle svg { width: 20px; height: 20px; }

        @media (max-width: 768px) {
            .menu-toggle { display: flex; }
            .navbar {
                flex-direction: column;
                height: auto;
                top: 64px;
                padding: 8px;
                display: none;
            }
            .navbar.is-open { display: flex; }
            .app-body { padding-top: 64px; }
        }
    </style>
</head>
<body>

{{-- ===== Topbar ===== --}}
<header class="topbar">
    <a href="{{ route('departments.index') }}" class="topbar-brand">
        <span class="brand-mark">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 10 12 4 2 10l10 6 10-6Z"></path>
                <path d="M6 12v5c0 1.5 2.7 3 6 3s6-1.5 6-3v-5"></path>
            </svg>
        </span>
        <span>
            LIMU Portal
            <span class="topbar-brand-sub">University Management</span>
        </span>
    </a>
    <button type="button" class="menu-toggle" id="navToggle">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </button>
</header>

{{-- ===== Navbar ===== --}}
<nav class="navbar" id="mainNav">
    <a href="{{ route('departments.index') }}" class="{{ request()->routeIs('departments.*') ? 'active' : '' }}">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 21h18"></path>
            <path d="M5 21V7l8-4 8 4v14"></path>
            <path d="M9 21v-6h6v6"></path>
        </svg>
        Departments
    </a>
    <a href="{{ route('students.index') }}" class="{{ request()->routeIs('students.*') ? 'active' : '' }}">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 10 12 4 2 10l10 6 10-6Z"></path>
            <path d="M6 12v5c0 1.5 2.7 3 6 3s6-1.5 6-3v-5"></path>
        </svg>
        Students
    </a>
    <a href="{{ route('courses.index') }}" class="{{ request()->routeIs('courses.*') ? 'active' : '' }}">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"></path>
        </svg>
        Courses
    </a>
    <a href="{{ route('professors.index') }}" class="{{ request()->routeIs('professors.*') ? 'active' : '' }}">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="8" r="4"></circle>
            <path d="M4 21c0-4 3.5-6 8-6s8 2 8 6"></path>
        </svg>
        Professors
    </a>
    <a href="{{ route('enrollments.index') }}" class="{{ request()->routeIs('enrollments.*') ? 'active' : '' }}">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="4" y="3" width="16" height="18" rx="2"></rect>
            <path d="M9 1v4M15 1v4"></path>
            <path d="M8 11h8M8 15h5"></path>
        </svg>
        Enrollments
    </a>
</nav>

{{-- ===== Content ===== --}}
<div class="app-body">
    <main class="main-content">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    <footer class="site-footer">
        <div class="container">
            &copy; {{ date('Y') }} LIMU Portal &mdash; University Management System
        </div>
    </footer>
</div>

<script>
    const navToggle = document.getElementById('navToggle');
    const mainNav = document.getElementById('mainNav');
    navToggle.addEventListener('click', () => {
        mainNav.classList.toggle('is-open');
    });
</script>

</body>
</html>