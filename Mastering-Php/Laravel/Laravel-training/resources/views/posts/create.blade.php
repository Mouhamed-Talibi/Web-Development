@extends('layouts.app')
@section('title')
    Post Creation
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="field input">
            <label for="tite"><b>Post Title</b></label>
            <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
        </div>
        <br><br>
        <div class="field input">
            <label for="description"><b>Post Description</b></label>
            <textarea name="description" id="description" cols="15" rows="5" class="form-control">
                value="{{old('description')}}"
            </textarea>
        </div>
        <br>
        <div class="field input">
            <label for="creator"><b>Post Creator</b></label>
            <input type="text" name="creator" id="" placeholder="write creator name" class="form-control" value="{{old('creator')}}">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection