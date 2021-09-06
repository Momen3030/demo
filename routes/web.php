<?php

use App\Http\Controllers\AritcleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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





//all posts
Route::get('/posts',[PostController::class,"index"]);

//id and return post of id
Route::get('/posts/show/{post}',[PostController::class,"show"]);

//show from insert data
Route::get('/posts/create',[PostController::class,"create"]);
//insert post in db
Route::post('/posts/submit',[PostController::class,"store"]);

// controller return one function
// use invokable controller
//Route::get('/home',HomeController::class);

//Route::get('/hello',[HomeController::class,'sayHi']); no meaning


/// resource controller
/*
index  ======> all post
show  ======> post id
create =====> view form insert data for post
store =====> insert post in db
edit ======> view from old data
update =====> updata post in database
destroy =======> delete post
use crud operation [create,select,update,delete]
*/


//Route::get('articles',[AritcleController::class,'index'])
//    ->name('articles.index');
//
//Route::get('articles/{article}',[AritcleController::class,'show'])
//    ->name('articles.show');
//
//Route::get('/articles/create',[AritcleController::class,'create'])->name('artiles.create');
//
Route::resource('articles',AritcleController::class);
//    ->middleware('auth');
/// put request update
//Route::put('/articles/{article}',[AritcleController::class,'update']);


Route::get('/blog/{user}',[\App\Http\Controllers\UserController::class,'userposts'])
    ->name('user.posts');


////table db in laravel  Model
///
/// Eluquent Model ORM
/// Post mode create instance
/// Post::all()
///ORM ====> object Relatian mapping [design pattern]
///// data maper=====>software layer spreate  data database inside momery object  object
///
/// datamaper=====>active record  software layer represented
///  bussinss logic inside model    ///relationships
///
////ORM
/// *datamaper
///   *active Recod

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('testauth',function (){
    return "i am auth";
})->middleware('auth');
