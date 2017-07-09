<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }


    public function index()
    {
        $posts = Post::all();
    	return view('posts.index' , compact('posts'));
    }
    
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);
        //dd(request(['title', 'body']));
        // $post = new Post;
        // $post->title = request('title');
        // $post->body = request('body');
        // $post->save();
        

        auth()->user()->publish(
                new Post(request(['title','body']))
            );
        

        //Post::create(request()->all() );

        return redirect('/'); 

    }
}
