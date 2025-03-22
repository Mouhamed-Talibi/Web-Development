@extends('layouts.app')
@section('title')
    Post Modifying
@endsection
@section('content')
    <form action="{{route('posts.update', $post->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="field input">
            <label for="tite"><b>Post Title</b></label>
            <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
        </div>
        <br><br>
        <div class="field input">
            <label for="description"><b>Post Description</b></label>
            <textarea name="description" id="description" cols="15" rows="5" class="form-control">
                {{$post->description}}
            </textarea>
        </div>
        <br>
        <div class="field input">
            <label for="creator"><b>Post Creator</b></label>
            <input type="text" name="creator" id="" class="form-control" value="{{$post->creator}}">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Edit Post</button>
    </form>
@endsection