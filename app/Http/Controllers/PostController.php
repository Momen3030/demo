<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public  $posts=[
        ['title'=>'post one','body'=>'content post one'],
        ['title'=>'post two','body'=>'content post two'],
        ['title'=>'post three','body'=>'content post three'],
    ];
    function index(){
         $posts=$this->posts;

        return view('posts',compact('posts'));
    }

    function show($post){

        return $this->posts[$post];
    }
}
