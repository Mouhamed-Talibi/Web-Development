@extends('layouts.app')
@section('content')
    @section('title')
        Post
    @endsection

    <div class="card" style="width: 70%; margin: 0 auto;">
        <div class="card-header">
            Post Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Title: {{$post->title}}</h5>
            <p class="card-text">Description: {{$post->description}}</p>
        </div>
    </div>     
    <div class="card mt-4" style="width: 70%; margin: 0 auto;">
        <div class="card-header">
            Post Creator Infos
        </div>
        <div class="card-body">
            <h5 class="card-title">Name: {{$post->creator}}</h5>
            <p class="card-text">
                {{-- @dd($post->created_at) --}}
                CREATED AT : 
                    {{$post->created_at->format('d,M,Y')}}
                    {{-- {{$post->created_at->addDays(35)->format('D,M,Y')}} --}}
            </p>
        </div>
    </div>
    <div class="link">
        <a href="{{route('posts.index')}}" class="btn btn-primary">Home</a>
        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-warning">Edit</a>
    </div>
@endsection
