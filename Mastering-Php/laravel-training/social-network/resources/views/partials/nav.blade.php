<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nav Bar</title>

    {{-- bootstrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
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
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('profiles.profiles') }}">Tous les profiles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('profiles.create') }}">Creer un Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('infos.informations') }}">Informations</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    @endonce
</body>
</html>