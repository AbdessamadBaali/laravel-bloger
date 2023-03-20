@extends('layouts.app')

@section('title', 'post')

@section('content')
        <a href="/posts">Go Back</a>
        <h1 class="text-muted fs-1 text-capitalize">{{$post->title}}</h1>
        <div>
            {!!$post->body !!}
        </div>
        <hr>
        <small>written on  {{$post->created_at}}</small>
        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-success btn-left">Edit</a>
        <form action="/posts/{{$post->id}}" method="POST" class="btn btn-rightr">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
@endsection