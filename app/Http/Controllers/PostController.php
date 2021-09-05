<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    function index(){
         $posts=Post::all();
        return view('posts.index',compact('posts'));
    }

    function show($id){
        $post=Post::findOrfail($id);
        return view('posts.show',compact('post'));
    }

    function create(){
        return view('posts.create');
    }

    function store(){
       $post=new Post();
       $post->title=request('title');
       $post->body=request('body');
        $post->save();
        return redirect('/posts');
    }

}
