@extends('layouts.app')

@section('title') Update @endsection
@section('content')
        <form method="POST" action="{{route('posts.update')}}">
        @method("put")
        @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Post Creator</label>
                <select class="form-control">
                    <option>Ahmed</option>
                </select>
              </div>

            <button type="submit" class="btn btn-primary">Update</button>
          </form>

@endsection
