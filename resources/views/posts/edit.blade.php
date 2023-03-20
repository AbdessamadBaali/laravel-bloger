@extends('layouts.app')

@section('title', 'posts')

@section('content')

    <h1 class="text-muted fs-1">Edit Post</h1>
    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        {{-- {{ method_field('PUT') }} --}}

        <div class="form-group my-3">
            <label for="id" class="label-control fs-4">Post Id Update :</label>
            <input type="text" class="form-control" name="id" id="id" value="{{$post->id}}">
        </div>
        <div class="form-group my-3">
            <label for="title" class="label-control fs-4">Title :</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}">
        </div>
        <div class="form-group my-3">
            <label class="label-control fs-4">Body :</label>
            <textarea name="body"class="form-control" id="article-ckeditor"  cols="30" rows="10" value=" {!! $post->body !!} "></textarea>
        </div>
        <input type="submit" class="btn btn-primary" name="update" value="update">
        <div id="editor"></div>
    </form>


@endsection