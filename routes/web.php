<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/blog',function (){
//    return view('welcome');
//   $name="ali";
   $names=["khaled","mostafa","zyaid","dina","bosina"];


    return $names;
});

Route::get('/iti/{index}',function ($index){

    return $index;
});

Route::get('/allposts',function (){
    $posts=[
        "post1"=>"post one content",
        "post2"=>"post two content",
        "post3"=>"post three content"
        ];

    return $posts;

});

Route::get("/allposts/{post}",function ($post){
    $posts=[
        "post1"=>"post one content",
        "post2"=>"post two content",
        "post3"=>"post three content"
    ];

    return $posts[$post];
});


//request pramams      http://127.0.0.1:8000/request?name=ali&email=ali@gmail.com

Route::get('/request',function (){
//    $name=request('name');
//    dd($name);
     $reqPrams= request()->all();  //all only need data
     dd($reqPrams);   //print data and stop execution
//    dump($reqPrams);  //print but not stop execuction
    return "done";
});



///create view     /////  views ------>  home.blade.php
///     ------> blade template webpage short and syntax php


Route::get('/blog',function (){
    $posts=[
        "post1"=>"post one content",
        "post2"=>"post two content",
        "post3"=>"post three content",
        "post4"=>10,

    ];
//    $posts=[];
//dd($posts);
    return  view('home',["postsData"=>$posts]);
});






Route::get('/posts',[App\Http\Controllers\PostController::class,"index"]);


Route::get('/posts/show/{post}',[App\Http\Controllers\PostController::class,"show"]);


Route::get('/posts/create',[App\Http\Controllers\PostController::class,"create"]);

Route::post('/posts/submit',[App\Http\Controllers\PostController::class,"store"]);







