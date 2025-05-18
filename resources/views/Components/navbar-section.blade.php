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