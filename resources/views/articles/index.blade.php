@extends('layouts.master')

@section('maindiv')
<h1> All Articles </h1>
{{--@dd($articles)--}}
   <table class="table table-dark">
       <tr>
           <th>title</th>
           <th>description</th>
           <th> operations </th>
       </tr>
       @foreach($articles as $article)
           <tr>
               <td> {{ $article->title}} </td>
               <td> {{ $article->body}}
               </td>
{{--               <td> <a class="btn btn-primary" href="/articles/{{$article->id}}"> Show </a> </td>--}}
               <td> <a class="btn btn-primary" href="{{route('articles.show',[$article])}}"> Show </a> </td>
               <td> <a class="btn btn-warning" href="{{route('articles.edit',[$article])}}"> Edit </a> </td>
               <td>
{{--                   <a class="btn btn-danger" href="{{route('articles.destroy',[$article])}}"> Delete </a> --}}
                   <form action="{{route('articles.destroy',$article)}}" method="post">
                       @csrf
                       @method('delete')
                       <button type="submit" class="btn btn-danger">Delete</button>
                   </form>
               </td>

           </tr>
       @endforeach
   </table>
    {{$articles->links('pagination::bootstrap-4')}}
@stop

@section('add')
    <a class="btn btn-warning" href="{{route('articles.create')}}"> Add Post</a>
@stop
