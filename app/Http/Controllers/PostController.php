<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('pages.posts.index', compact('posts'));
    }
    public function create()
    {
        $posts = Post::all();
        return view('pages.posts.create', compact('posts'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('pages.posts.edit', compact('post'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'descriptions' => 'required|string',
        ]);
        $post = new Post();
        $post->title = $request->input('title');
        $post->descriptions = $request->input('descriptions');
        $post->save();

        return redirect()->route('post.index');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'descriptions' => 'required|string',
        ]);
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->descriptions = $request->input('descriptions');
        $post->save();
        return redirect()->route('post.index');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('pages.posts.show', ['post' => $post]);
    }
    public function delete(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->delete();


        return redirect()->route('post.index');
    }
}
