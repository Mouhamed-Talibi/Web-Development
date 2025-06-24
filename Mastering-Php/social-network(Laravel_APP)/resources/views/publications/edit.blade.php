<x-master title="Editer publication">
    <div class="container justify-content-center d-flex mt-5 align-items-center">
        <div class="card shadow-lg border-0 rounded-4 p-4 w-100">
            <div class="card-body">
                <h2 class="text-center text-primary fw-bold">Editer une publication</h2>
                <hr class="mb-4">
                
                <form action="{{ route('publications.update', $publication->id) }}" method="POST" enctype="multipart/form-data">
                    {{-- csrf  --}}
                    @csrf
                    {{-- method --}}
                    @method('PUT')  

                    {{-- Check if there are any errors --}}
                    @if ($errors->any())
                        <x-alert type="danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }} <br>
                            @endforeach
                        </x-alert>
                    @endif

                    {{-- First Name --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Titre</label>
                        <input type="text" name="title" value="{{ old('title', $publication->title)}}" class="form-control shadow-sm">
                    </div>

                    {{-- Description --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Description</label>
                        <textarea name="body" class="form-control shadow-sm" rows="3"> {{ old('body', $publication->body) }}</textarea>
                    </div>

                    {{-- image --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Image</label>
                        <input type="file" name="image" class="form-control" id="">
                    </div>

                    {{-- displaying image --}}
                    <div class="mb-3">
                        <img src="{{ asset('storage/publications/' . $publication->image)}}" wisth="200px" height="200px" alt="">
                    </div>

                    {{-- Submit Button --}}
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary w-100 shadow-sm fw-bold">Modifier publication</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-master>
