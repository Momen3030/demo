@extends('layouts.master')
{{--@dd($post)--}}
@section('maindiv')
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{$post->body}}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
@stop
