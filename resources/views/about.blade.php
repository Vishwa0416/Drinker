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
    <br>
    <div class="text-section">
        <p>Welcome to Drinker!, your premier destination for the finest selection of spirits, wines, and
            beers. Established in 2023, we pride ourselves on offering a curated collection of both local and
            international brands, catering to the diverse tastes of our valued customers. Our mission is to provide a
            seamless shopping experience, whether you're seeking a rare vintage, a classic favorite, or the latest craft
            innovation. At Drinker, we believe in quality, variety, and exceptional customer service. Join
            us in celebrating the art of fine drinking and discover your next favorite bottle today.
            We offer you,
        <ul>
            <li>Vodkas</li>
            <li>Wines</li>
            <li>Taquilas</li>
            <li>Whiskeys</li>
            </p>
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

    .text-section {
        background-color: #f5f5f5;
        padding: 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
</style>

@endsection