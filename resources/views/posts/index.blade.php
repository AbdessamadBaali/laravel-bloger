@extends('layouts.app')

@section('title', 'posts')

@section('content')

        <h1 class="text-muted fs-1">Posts</h1>
        @if(count($posts) > 0)
            <div class="d-flex flex-wrap ms-5">
                @foreach($posts as $post)
                    <div class="border p-4 m-2 shadow">
                        <h3 class="text-capitalize"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>written on  {{$post->created_at}}</small>
                    </div>
                @endforeach
            </div>
            {{-- {{$posts->links()}} --}}

        @else
            <p>No Posts Found</p>
        @endif
@endsection