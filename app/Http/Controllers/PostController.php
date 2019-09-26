<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('index',compact('posts'));
    }
    public function create() {
        return view('create');
    }
    public function store(CreatePostRequest $request) {
        $post = new Post();
        $post->number = $request->number;
        $post->save();
        return redirect()->route('index');
    }
}
