@extends('layouts.app')
@section('content')
    @section('title')
        All Posts
    @endsection
    <div class="text-center">
        <a href="{{route('posts.create')}}" class="btn btn-primary">Create Post</a>
    </div>

    <table class="table table-striped mt-5">
        <thead> 
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Creator</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($all_posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->creator}}</td>
                <td>{{$post->description}}</td>
                <td>
                    <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">View</a>
                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-warning">Edit</a>
                    <form action="{{route('posts.destroy', $post->id)}}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure you wanna delete this post ?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
