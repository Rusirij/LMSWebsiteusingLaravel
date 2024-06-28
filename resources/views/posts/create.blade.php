@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form action="{{ action('App\Http\Controllers\PostsController@store') }}" method="POST">
        @csrf
        <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" id="body" name="body" rows="15" placeholder="Enter body"></textarea>
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
