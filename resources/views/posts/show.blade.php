@extends('layouts.app')

@section('content')
    <a href="/public/posts" class="btn btn-default">Go Back</a>
    <h1> {{$post->title}} </h1>
    <p>{{$post->body}}</p>

    <hr>
    <small>Written on {{$post->created_at}}</small>

   
    <hr>
    <a href="/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

    <!-- Delete Form -->
    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
</form>
@endsection