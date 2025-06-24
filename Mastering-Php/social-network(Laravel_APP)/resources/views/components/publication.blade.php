<div class="card">

    <div class="card-body">
        {{-- image and profile name --}}
        <div class="image-profile text-start mb-5 bg-dark text-light p-2 position-relative">
            <img src="{{ asset('storage/' . $pub->profile->image )}}" alt="" class="img-fluid rounded-circle" style="width: 50px; height: 50px;">
            <h2 class="d-inline-block align-items-center">{{ $pub->profile->firstName }} {{ $pub->profile?->lastName }}</h2>
            <a href="{{ route('profiles.show', $pub->profile->id)}}" class="stretched-link"></a>
        </div>

        {{-- edit and delete --}}
        @can('update', $pub)
            <div class="links text-end mb-4">
                <a href="{{ route('publications.edit', $pub->id)}}" class="btn btn-outline-success w-25 mt-2">modifier</a>
        @endcan
        @can('delete', $pub)
                <form action="{{ route('publications.destroy', $pub->id )}}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger mt-2" onclick="return confirm('voulez vous vraiment supprimer cette publication ?')">Supprimer</button>
                </form>
            </div>
        @endcan

        <blockquote class="blockquote mb-0 text-center">
            <strong>{{ $pub->title }}</strong>
            <p class="mt-2 mb-4">{{ $pub->body }}</p>

            @if(!empty($pub->image))
                <footer class="blockquote-footer">
                    <img class="img-fluid" src="{{ asset('storage/publications/' . $pub->image )}}" alt="{{ $pub->title }}" style="height: 200px">
                </footer>
            @endif   
        </blockquote>
    </div>
</div>