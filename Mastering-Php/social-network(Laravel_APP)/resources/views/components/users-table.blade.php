@props(['users'])

{{-- if not empty users --}}
@empty($users)
    <div class="alert alert-danger text-center mt-5" role="alert">
        There is not available users for the moment
    </div>
@else
    <table class="table tabel-striped mt-5 text-center">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            {{-- display all users --}}
            @foreach ( $users as $user )
                <tr>
                    <td>{{ $user['id']}}</td>
                    <td>{{ $user['name']}}</td>
                    <td>{{ $user['email']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endempty