@props(['profile']) 
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
            <img class="card-img-top" src="{{ asset('storage/' . $profile->image) }}" alt="{{$profile->lastName}}" />
            <div class="card-body">
                <h4 class="card-title">{{$profile->firstName}}</h4>
                <p class="card-text">{{$profile->lastName}}</p>
                Email : <small class="text-primary">{{$profile->email}}</small>
                <br>
                <p class="badge text-bg-success mt-2">{{$profile->age}} years</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('profile.show', $profile->id) }}" class="btn btn-primary">Voir profile</a>
                <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-success">Edit profile</a>
                <form action="{{ route('profiles.destroy', $profile->id)}}" method="POST" class="d-inline-block mt-2">
                    {{-- method --}}
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
