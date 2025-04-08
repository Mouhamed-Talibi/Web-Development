<x-master title="Créer un profil">
    <div class="container justify-content-center d-flex mt-5 align-items-center vh-100">
        <div class="card shadow-lg border-0 rounded-4 p-4 w-100">
            <div class="card-body">
                <h2 class="text-center text-primary fw-bold">Créer un Profil</h2>
                <hr class="mb-4">
                
                <form action="{{ route('profiles.store') }}" method="POST">
                    {{-- csrf  --}}
                    @csrf

                    {{-- Check if there are any errors --}}
                    @if ($errors->any())
                        <x-alert type="danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }} <br>
                            @endforeach
                        </x-alert>
                    @endif

                    {{-- First Name --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Prénom</label>
                        <input type="text" name="firstName" class="form-control shadow-sm">
                    </div>

                    {{-- Last Name --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nom</label>
                        <input type="text" name="lastName" class="form-control shadow-sm">
                    </div>

                    {{-- Age --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Âge</label>
                        <input type="number" name="age" class="form-control shadow-sm" placeholder="ex: 25">
                    </div>

                    {{-- Email --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" name="email" class="form-control shadow-sm" placeholder="example@gmail.com">
                    </div>

                    {{-- Password with Toggle Visibility --}}
                    <div class="mb-3 position-relative">
                        <label class="form-label fw-bold">Mot de passe</label>
                        <div class="input-group">
                            <input type="password" name="password" id="password" class="form-control shadow-sm" placeholder="Minimum 8 caractères">
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Description</label>
                        <textarea name="description" class="form-control shadow-sm" rows="3"></textarea>
                    </div>

                    {{-- Submit Button --}}
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary w-100 shadow-sm fw-bold">Créer Profil</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-master>
