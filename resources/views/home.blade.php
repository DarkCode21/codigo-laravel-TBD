@extends('layout')

@section('title','Home')

@section('content')
    <h2>Home</h2>

    @auth
        {{auth()->user()->name}}
    @endauth
@endsection