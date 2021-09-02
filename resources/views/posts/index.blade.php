@extends('layouts.master')

@section('maindiv')
<h1> All posts </h1>
{{--@dd($posts)--}}

   <table class="table table-hover">
       <tr>
           <th>title</th>
           <th>description</th>
           <th> operations </th>
       </tr>
       @foreach($posts as $post)
           <tr>
               <td> {{ $post->title}} </td>
               <td> {{ $post->body}}
               </td>
               <td> <a class="btn btn-primary" href="/posts/show/{{$post->id}}"> Show </a> </td>
               <td> <a class="btn btn-warning"> Eidt </a> </td>
               <td> <a class="btn btn-danger"> Delete </a> </td>

           </tr>
       @endforeach
   </table>
@stop

@section('add')
    <a class="btn btn-warning" href="/posts/create"> Add Post</a>
@stop
