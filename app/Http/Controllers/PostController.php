<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
//    public  $posts=[
//        ['title'=>'post one','body'=>'content post one'],
//        ['title'=>'post two','body'=>'content post two'],
//        ['title'=>'post three','body'=>'content post three'],
//    ];
    function index(){
         $posts=Post::all();
//         dd($posts);
        return view('posts.index',compact('posts'));
    }

    function show($id){
//         $post=$this->posts[$post];
        $post=Post::findOrfail($id);
//          dd($post);
        return view('posts.show',compact('post'));
    }

    function create(){
        return view('posts.create');
    }

    function store(){
//        dd($_POST);
//        $req=request()->all();
//        dd($req);
//        $title=request('title');
//        $body=request('body');
       $post=new Post();
       $post->title=request('title');
       $post->body=request('body');
        $post->save();
//         dd( $title,$body);

//        return 'data is resived !!!!';
        return redirect('/posts');
    }

}
