<x-master title="Se connecter">
    <div class="container mt-5 mb-5">
        <form action="{{ route('submitLogin')}}" class="border p-4 rounded shadow" method="POST">
            {{-- csrf --}}
            @csrf

            {{-- login heading --}}
            <h1 class="text-center fw-bold text-primary mb-3">Connexion</h1>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email')}}">
                {{-- error --}}
                @error('error')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary w-100">Connexion</button>
        </form>
    </div>
</x-master>
