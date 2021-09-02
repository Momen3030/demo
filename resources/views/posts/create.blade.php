@extends('layouts.master')

@section('maindiv')


    <form action="/posts/submit" method="post">
        @csrf
{{--        //create unique token   fjsfasf33232423fsddas34we   caller(client)     serverside  from app --}}
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label for="body">Content</label>
            <textarea class="form-control" rows="3" name="body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Add</button>
    </form>

@stop
