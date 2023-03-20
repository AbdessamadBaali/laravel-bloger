@extends('layouts.app')

@section('title', 'index')


@section('content')
    <div class="bg-secondary bg-opacity-25  text-center container p-5 m-4">
        <h1 class="text-muted">Welcom To Baalidev</h1>
        <p class="text-muted">This is the laravel application from the laravel from scratch</p>
        <p>
            <a class="btn btn-primary" href="/login" role="button">login</a>
            <a class="btn btn-success" href="/register" role="button">register</a>
        </p>

    </div>

@endsection