@extends('layouts.master')

@section('maindiv')
{{--    @dd($article)--}}
    <form action="{{route('articles.update',[$article])}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text"  value="{{$article->title}}" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label for="body">Content</label>
            <textarea class="form-control"  rows="3" name="body">{{$article->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Update</button>
    </form>

@stop
