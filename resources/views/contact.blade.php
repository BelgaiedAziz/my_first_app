<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blood Donation Contact</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        
    <style scoped>
        .navbar {
        background: rgba(17, 24, 39, 1) !important;
        padding: 0.8rem 1rem;
        }

        .logo {
        color: white;
        font-size: 1.5rem;
        font-weight: bold;
        margin: 0;
        }

        .nav-link {
        color: white !important;
        font-weight: 400;
        padding: 0.5rem 1rem;
        transition: color 0.3s ease;
        margin: 0 20px;
        }

        .nav-link:hover,
        .nav-link:focus {
        color: #d32f2f !important;
        }

        .nav-link.active {
        color: #d32f2f !important;
        border-bottom: 2px solid #d32f2f;
        }

        .desktop-login {
        background-color: #d32f2f;
        border-color: #d32f2f;
        transition: all 0.3s ease;
        }

        .desktop-login:hover {
        background-color: #b71c1c;
        border-color: #b71c1c;
        }

        .mobile-login {
        color: #d32f2f !important;
        text-decoration: none;
        font-weight: 500;
        padding: 0.5rem 0;
        display: none;
        }

        @media (max-width: 992px) {
        .desktop-login {
            display: none;
        }
        .mobile-login {
            display: block;
        }

        .navbar-collapse {
            position: fixed;
            top: 0;
            right: 0;
            width: 250px;
            height: 100vh;
            background: rgba(17, 24, 39, 1);
            padding: 1rem;
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
            z-index: 1000;
            overflow-y: auto;
        }

        .navbar-collapse.show {
            transform: translateX(0);
        }

        .navbar-nav {
            flex-direction: column !important;
            margin-top: 3rem;
        }

        .nav-item {
            margin: 0.5rem 0;
        }

        .d-flex {
            margin-top: auto;
            margin-bottom: 2rem;
            justify-content: center;
        }

        .navbar-collapse::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .navbar-collapse.show::before {
            opacity: 1;
        }

        .navbar-toggler {
            position: absolute;
            top: 1rem;
            right: 1rem;
            z-index: 1001;
        }
        }

        @media (min-width: 992px) {
        .mobile-login {
            display: none;
        }
        .desktop-login {
            display: flex;
            align-items: center;
        }
        }

        .bi-person {
        margin-right: 5px;
        font-size: 1rem;
        }
    </style>

    </head>
    <body class="antialiased">
        <!-- Auth Links (Top Right - Keep this if you want dual login options) -->
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Admin Login</a>
            @endauth
        </div>
    @endif

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="{{ url('/') }}" class="navbar-brand">
                <h1 class="logo m-0">SangVie</h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/centres') }}" class="nav-link {{ request()->is('centres') ? 'active' : '' }}">Centres de don</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/apropos') }}" class="nav-link {{ request()->is('apropos') ? 'active' : '' }}">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                    </li>
                </ul>

                <div class="d-flex my-2 my-lg-0">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger rounded-pill px-3">
                                <i class="bi bi-box-arrow-right me-1"></i>
                                Déconnexion
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-danger rounded-pill px-3">
                            <i class="bi bi-person me-1"></i>
                            Connexion
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>


    <!-- Your Main Content Section -->
    <div class="main-content">
        @yield('content') <!-- This will be replaced by content from child views -->
        
    </div>

    </body>
</html>
