@extends('layouts.app')

@section('title', 'service')


@section('content')

    <h1 class="fw-5 text-danger">Welcom To service pages</h1>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif

@endsection