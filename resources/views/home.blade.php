@extends('layouts.master')
@section('maindiv')
   <h1> Home </h1>
   <table class="table">
    <tr>
        <th>index</th>
        <th> key </th>
        <th> value </th>
    </tr>
       @foreach($postsData as $key =>$val)
           <tr>
               <td> {{$loop->index}}</td>
               <td> {{$key}} </td>
               <td> {{$val}} </td>

           </tr>
       @endforeach

   </table>
@stop


@section('warningcontent')
    <h3> Test content  </h3>
    <h3> Test content  </h3>
    <h3> Test content  </h3>
    <h3> Test content  </h3>
@stop


@section('testcontent')
    <h3> Test content  </h3>
    <h3> Test content  </h3>

@stop

