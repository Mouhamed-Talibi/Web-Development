@props(['profile']) 
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
            <img class="card-img-top" src="{{asset('imgs/man.jpg')}}" alt="Title" />
            <div class="card-body">
                <h4 class="card-title">{{$profile->firstName}}</h4>
                <p class="card-text">{{$profile->lastName}}</p>
                Email : <small class="text-primary">{{$profile->email}}</small>
                <br>
                <p class="badge text-bg-success mt-2">{{$profile->age}} years</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('profile.show', $profile->id) }}" class="stretched-link">Voir profile</a>
            </div>
        </div>
    </div>
