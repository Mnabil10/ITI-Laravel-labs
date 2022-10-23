<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

        $allPosts = Post::paginate(5);


        return view('posts.index', [
          'posts' => $allPosts
        ]);
    }

    public function create()
    {
        $allUsers = User::all();

        return view('posts.create',[
            'allUsers' => $allUsers
        ]);
    }

    public function show($postid)
    {


        $post = Post::find($postid);
        $userid = $post->user_id;
        $user = User::find($userid) ;
        return view('posts.show',[
            'post' => $post
        ],['postid'=>$postid,
            'user'=>$user]);
    }

    public function store()
    {

        $data = request()->all();



        Post::create([
            'title' => request()->title,
            'description' => $data['description'],
            'user_id' => $data['post_creator'],
        ]);
        return to_route('posts.index');
    }

    public function edit($postid)
    {
        $allUsers = User::all();



        return view('posts.edit',[
            'allUsers' => $allUsers
        ],['postid'=>$postid]);
    }
    public function update(Request $request, $id)
    {
        request()->all();
        $requiredPost = Post::find($id);
        $requiredPost->title = request()->title;
        $requiredPost->description = request()->description;
        $requiredPost->user_id = request()->post_creator;
        $requiredPost->save();
        return to_route('posts.index');
    }


    public function destroy($postid)
    {
        $post = post::find($postid);
        $post->delete();
        return to_route('posts.index');
    }
}
