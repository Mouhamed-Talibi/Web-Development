@props(['type'])

    <div class="alert alert-{{$type}} text-center border border-dark mt-5" role="alert">
        {{$slot}}
    </div>