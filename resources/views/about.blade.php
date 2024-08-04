@extends('layouts')
@section('title', 'About Us')
@section('content')


<div class="container">
    <h3>About Us</h3>
    <div class="first-section">
        <video class="first-video" width="300" autoplay loop muted>
            <source src="{{ asset('videos/drinkervideo.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<style>
    .first-section {
        display: flex;
        justify-content: center;
    }

    .first-video {
        margin-top: 20px;
    }
</style>

@endsection