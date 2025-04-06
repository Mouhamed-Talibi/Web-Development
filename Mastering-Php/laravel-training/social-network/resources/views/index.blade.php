<x-master title="Acceuil">
        {{-- calling userstable component --}}
        <x-users-table :users="$users" />

        {{-- calling alert component --}}
        <x-alert type="primary">
            <strong>This is an alert <h1>Success</h1> from alert component</strong>
        </x-alert>
        <x-alert type="danger">
            <strong>This is an alert <h1>Danger</h1> from alert component</strong>
        </x-alert>
</x-master>
