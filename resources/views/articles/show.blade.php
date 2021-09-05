@extends('layouts.master')
{{--@dd($post)--}}
@section('maindiv')
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$article->title}}</h5>
        <h3 class="card-text">{{$article->body}}</h3>
        <p> {{$article->slug}} </p>
        <a href="{{route('articles.index')}}" class="btn btn-primary">All Articles</a>
    </div>
</div>
@stop
