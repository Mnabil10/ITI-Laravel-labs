@extends('layouts.app')

@section('title') Update @endsection
@section('content')
        <form method="POST" action="{{route('posts.update', $postid)}}">
        @method("put")
        @csrf
        <div class="mb-3">
              <label class="form-label">Title</label>
              <input name="title" type="text" class="form-control"  >
              @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
            </div>

            <div class="mb-3">
                <label  class="form-label">Description</label>
                <textarea name="description" value = "" class="form-control"></textarea>
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Post Creator</label>
                <select name="post_creator" class="form-control">
                  @foreach ($allUsers as $user)
                    <option value="{{$user->id}}">{{ $user->name }}</option>
                  @endforeach
                </select>
              </div>

            <button type="submit" class="btn btn-primary">Update</button>
          </form>

@endsection
