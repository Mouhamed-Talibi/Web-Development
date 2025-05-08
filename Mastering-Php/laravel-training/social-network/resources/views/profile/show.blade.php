<x-master title="{{$profile->firstName}} {{$profile->lastName}}">
    <div class="container mt-5">
        <div class="row">
            <div class="card py-4">
                <img class="card-img-top rounded-circle mx-auto my-2" src="{{asset('storage/' . $profile->image )}}" style="width: 210px; height: 200px;" alt="Title" />
                <div class="card-body text-center">
                    <h4 class="card-title"># {{ $profile->id }} {{$profile->firstName}} {{$profile->lastName}}</h4>
                    <p class="card-text mt-3">Email : <a href="mailto:">{{$profile->email}}</a></p>
                    Creer en : <small>{{ $profile->created_at->format('D-m-Y') }} </small>
                    <p class="bg-success bg-opacity-75 text-light fw-bold p-3 w-50 mx-auto mt-4">
                        {{$profile->description }}
                    </p>
                </div>
            </div>
            
        </div>
    </div>
    {{-- publications --}}
    <div class="container py-5 pb-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <h2 class="text-start text-primary">Publications</h2>
                @foreach ($profile->publications as $pub)
                    <x-publication :canUpdate="Auth::user()->id == $pub->profile_id" :pub="$pub" />
                @endforeach
            </div>
        </div>
    </div>
</x-master>
