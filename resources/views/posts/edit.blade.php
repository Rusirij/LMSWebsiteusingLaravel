@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST">
        @csrf
        <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" value="{{$post->title}}" class="form-control" id="title" name="title" placeholder="Enter title">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" value="{{$post->body}}" id="body" name="body" rows="15" placeholder="Enter body"></textarea>
        </div>
            
        <input type="hidden" name="_method" value="PUT">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
