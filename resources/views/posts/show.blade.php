@extends('layouts.app')

@section('title') Show @endsection
@section('content')
<div class=" card shadow row container ">
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
        <div class="card shadow row container ">
            <div class="w-100 bg-light  mt-2 border">
                Post Creator info
            </div>
            <div class="w-100 bg-white border">
                <div class="100 bg-white mt-2 mb-2">
                Name: {{$user->name}} <br>
                Email:{{$user->email}} <br>
                Created At : {{$post->created_at}}
                </div>
            </div>
        </div>
@endsection

