@extends('layouts.app')

@section('title') Update @endsection
@section('content')
        <form method="POST" action="{{route('posts.delete', $postid)}}">
        @method("delete")
        @csrf
        <div class="card shadow" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Delete Post</h5>
                <p class="card-text">Are You sure you wan't to delete this post</p>
                <button type="submit" class="btn btn-primary">Delete</button>
            </div>
        </div>
          </form>

@endsection
