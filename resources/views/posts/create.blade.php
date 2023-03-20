@extends('layouts.app')

@section('title', 'posts')

@section('content')

    <h1 class="text-muted fs-1">Create Posts</h1>
    <form action="/posts" method="POST">
        @csrf
        <div class="form-group my-3">
            <label for="title" class="label-control fs-4">Title :</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="title">
        </div>
        <div class="form-group my-3">
            <label class="label-control fs-4">Body :</label>
            <textarea name="body"class="form-control" id="article-ckeditor" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" name="store" value="Create">
        <div id="editor"></div>
    </form>


@endsection