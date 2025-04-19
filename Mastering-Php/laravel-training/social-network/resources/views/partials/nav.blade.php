@once
    <nav class="navbar navbar-expand-lg bg-dark text-light">
        <div class="container-fluid">
            <a class="navbar-brand text-light fw-bold text-light me-5" href="">Social Network</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fw--bold text-primary" aria-current="page" href="{{ route('home')}}">Acceuil</a>
                    </li>
                    {{-- auth --}}
                    @auth
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('profiles.profiles') }}">Tous les profiles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('profiles.create') }}">Creer un Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('infos.informations') }}">Informations</a>
                        </li>
                        <div class="dropdown">
                            <button class="btn btn-primary fw-bold dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->firstName }}
                                {{ auth()->user()->lastName }}
                            </button>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="{{ route('logout') }}">Deconnexion</a>
                                </li>
                            </ul>
                        @endauth
                    {{-- guest ( for visitors ) --}}
                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('loginForm') }}">Se connecter</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
@endonce