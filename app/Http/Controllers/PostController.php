<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index');
    }



    public function create()
    {
        $posts = Post::all();
        return view('create',compact('posts'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit',compact('post'));
    }


    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->descriptions = $request->input('descriptions');
        $post->save();

        return redirect()->route('post.index');
    }


    public function update(Request $request ,$id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->descriptions = $request->input('descriptions');
        $post->update();


        return redirect()->route('post.index');
    }



    public function delete(Request $request ,$id)
    {
        $post =Post::findOrFail($id);

        $post->delete();


        return redirect()->route('post.index');
    }
}
