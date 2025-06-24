<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Training</title>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    {{-- bootstrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    @once
        <footer class="container-fluid bg-dark text-light py-4 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center text-md-start mb-3">
                        <h5 class="mb-4">A propos de mois</h5>
                        <p>Je Suis Un developeur Backend Php | Laravel.</p>
                        <p>Et Un Stangaire De Mechanic</p>
                    </div>
                    <div class="col-md-4 text-center mb-3">
                        <h5 class="mb-4">Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-light">Acceuil</a></li>
                            <li><a href="#" class="text-light">Profile</a></li>
                            <li><a href="#" class="text-light">Informations</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-center text-md-end">
                        <h5 class="mb-4">Follow Us</h5>
                        <a href="#" class="text-light me-2">Facebook</a>
                        <a href="#" class="text-light me-2">Twitter</a>
                        <a href="#" class="text-light">Instagram</a>
                    </div>
                </div>
                <hr class="my-3">
                <div class="text-center">
                    <p class="mb-0">&copy; 2024 Mohamed Talibi. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
    @endonce
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>