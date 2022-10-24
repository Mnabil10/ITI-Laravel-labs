@extends('layouts.app')

@section('title')Post {{$post->id}} @endsection
@section('content')
<div class=" card shadow row container mb-5 ">
            <div class="w-100 bg-light  mt-2 border">
                Post info
            </div>
            <div class="w-100 bg-white border">
                <div class="100 bg-white mt-2 mb-2">
                Title: {{$post->title}}<br>
                Description: {{$post->description}}<br>
                </div>
            </div>
        </div>
        <div class="card shadow row container mb-5 ">
            <div class="w-100 bg-light  mt-2 border">
                Post Creator info
            </div>
            <div class="w-100 bg-white border">
                <div class="100 bg-white mt-2 mb-2">
                Name: {{$post->user->name}} <br>
                Email:{{$post->user->email}} <br>
                Created At : {{$post->user ?  $post->created_at->format('Y-m-d')  : 'Not Defined'}}
                </div>
            </div>
        </div>
        <div class="card shadow">
            <form action="{{route('comments.store',$post->id)}}" method="POST">
                @csrf
                <div class=" mb-3">
                    <label for="exampleInputEmail1" class="form-label"> <b>New Comment</b> </label>
                    <input name="comment" type="text" class="form-control" id="exampleInputEmail1"
                     aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-primary">Add Comment</button>
            </form>
            <table class="table mt-4">
	            <thead>
		            <tr>
			            <th scope="col">Comments</th>
		            </tr>
	            </thead>
	            <tbody>
		            @foreach ($comments as $comment)
		            <tr>
			            <td> {{$comment->body}}</td>
		            </tr>
		            @endforeach
	            </tbody>
            </table>
        </div>

@endsection

