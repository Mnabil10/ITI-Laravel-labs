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

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form method="POST" action="{{route('posts.destroy', $postid)}}">
        @method("delete")
        @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>

