<x-master title="Mes publications">
    <h1 class="text-3xl mt-3 font-bold mb-4">Mes publications</h1>
    <div class="container bg-light bg-opacity-25 w-75 mx-auto mt-3 row g-3 py-4">
        @foreach ($publications as $pub)
            <x-publication :pub="$pub" />
        @endforeach
    </div>
    {{ $publications->links() }}
</x-master>
