@extends('layouts')
@section('title', 'Beer Page')
@section('content')

<div class="container">
    <h3>About</h3>
    <video width="300" autoplay loop muted>
        <source src="{{ asset('videos/drinkervideo.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    @endsection