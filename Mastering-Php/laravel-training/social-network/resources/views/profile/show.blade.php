<x-master title="{{$profile->firstName}} {{$profile->lastName}}">
    <div class="container">
        <div class="card shadow-sm my-5">
            <div class="card-header bg-primary text-white">
                <h1 class="text-center mb-0">Profile</h1>
            </div>
            <div class="card-body p-4">
                <div class="row profile-info">
                    <div class="col-md-8 mx-auto">
                        <div class="profile-item mb-4">
                            <label class="text-muted">First Name</label>
                            <h3 class="profile-value">{{ $profile->firstName }}</h3>
                        </div>

                        <div class="profile-item mb-4">
                            <label class="text-muted">Last Name</label>
                            <h3 class="profile-value">{{ $profile->lastName }}</h3>
                        </div>

                        <div class="profile-item mb-4">
                            <label class="text-muted">Age</label>
                            <h3 class="profile-value">{{ $profile->age }}</h3>
                        </div>

                        <div class="profile-item mb-4">
                            <label class="text-muted">Email</label>
                            <h3 class="profile-value">{{ $profile->email }}</h3>
                        </div>

                        <div class="profile-item mb-4">
                            <label class="text-muted">Description</label>
                            <h3 class="profile-value">{{ $profile->description }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
