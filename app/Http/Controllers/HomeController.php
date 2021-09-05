<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $posts=[
            "post1"=>"post one content",
            "post2"=>"post two content",
            "post3"=>"post three content",
            "post4"=>10,

        ];
        return  view('home',["postsData"=>$posts]);
    }

//    public function sayHi(){
//        return "hi";
//    }


}
