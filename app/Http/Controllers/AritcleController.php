<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostValidationRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AritcleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth')->except(['index','show']);
     }

    public function index()
    {

//        $articles = DB::table('posts')->get();  //query builder
//        $articles=Post::where('id','>',12)->get();  //elquent model all recods match condations
//        $articles=Post::where('id','>',12)->first();  //elquent model one record match condations
//        dd($articles);
//        $articles=Post::all(); all posts
          $articles=Post::paginate(2);  // retun data with pagination number
        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
            return view('articles.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostValidationRequest $request)
    {
//        dd($request->all());
//        $request->validate([   //rules apply to input
//            'title'=>'required|min:3',
//             'body'=>'max:10'
//        ],[
//            'title.required'=>'please Write descriptive title',
//            'title.min'=>'title must be more than 3 letters'
//        ]);
        Post::create($request->all());
        return redirect(route('articles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $article)
    {
//        dd($article,$article->user->name);
//        $post =Post::findOrfail($article); not use find or fail old way
//        dd($article);
        return view('articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $article)
    {
//        dd($article);

        return view('articles.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostValidationRequest $request, Post $article)
    {
//        $request->validate([   //rules apply to input
//            'title'=>'required|min:3',
//            'body'=>'max:10'
//        ],[
//            'title.required'=>'please Write descriptive title',
//            'title.min'=>'title must be more than 3 letters'
//        ]);
        $article->update($request->all());
        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $article)
    {
//        return  "deleted";
        $article->delete();
        return redirect(route('articles.index'));
    }
}
