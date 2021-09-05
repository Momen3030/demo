@extends('layouts.master')

@section('maindiv')

{{--@dd($users)--}}
    <form action="{{route('articles.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label for="body">Content</label>
            <textarea class="form-control" rows="3" name="body"></textarea>
        </div>
        <div class="form-group">
            <label>Author</label>
            <select class="form-control" name="user_id">
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Add</button>
    </form>

@stop
