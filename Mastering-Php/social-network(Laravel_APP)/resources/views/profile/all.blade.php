<x-master title="Profiles">

    <h1 class="text-center mt-5">Welcome To Profiles</h1>
    <hr class="w-50 mx-auto text-primary">

    {{-- using bootstrap cards --}}
    <div class="container row mx-auto mt-5 mb-5">
        @foreach ($profiles as $profile)
            <x-profile-card :profile="$profile"/>
        @endforeach
    </div>

    {{-- using pagination links --}}
    {{-- {{ $profiles->links() }} --}}
</x-master>