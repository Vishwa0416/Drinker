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
       <b> Welcome to Drinker!</b>
<br>
At Drinker, we bring the world of fine spirits, wines, and beers to your fingertips. Since our founding in 2023, we've been dedicated to offering an unparalleled selection of beverages, handpicked to suit every taste and occasion. From rare vintages and iconic favorites to the latest craft innovations, Drinker caters to both seasoned connoisseurs and casual enthusiasts alike.
<br>
<b>Our Mission</b>
Drinker is more than a store; it’s a destination for discovery. We believe that each bottle tells a story, and our mission is to connect our customers with drinks that reflect quality, craftsmanship, and individuality. Our aim is to create a seamless, enjoyable shopping experience, ensuring that finding the perfect bottle is as delightful as savoring it.

What We Offer
We are passionate about variety and quality. Our catalog includes:
<lu>
    <li>Vodkas: From smooth, subtle sips to bold, artisanal flavors.</li>
    <li>Wines: A global selection of reds, whites, rosés, and sparkling wines, carefully curated to meet every palate.</li>
    <li>Tequilas: Featuring classic and premium blends, from aged añejos to fresh blancos.</li>
    <li>Whiskeys: A world tour of whisk(e)ys, including single malts, blends, bourbons, and rare selections.</li>
    <li>Beers: A lineup of local brews, craft favorites, and international classics for the perfect pour.</li>
    <li>Mixers: The ideal companions for creating unique cocktails at home or simply enhancing your drink experience.</li>
</lu>
Our Values
Quality Selection: We work with trusted suppliers and renowned brands to ensure that every bottle on our shelves meets our high standards.
Exceptional Service: Our knowledgeable team is here to guide you, answer questions, and provide personalized recommendations for every taste.
Celebrating Culture: We believe that drinks have a unique way of bringing people together, and we celebrate the traditions and cultures they represent.
Why Choose Drinker?
Whether you’re on a journey to discover something new or searching for a beloved classic, Drinker offers an accessible, elevated shopping experience. Our team stays ahead of trends, continually updating our selection with both well-loved staples and exciting, emerging brands.

Join us in celebrating the art and joy of fine drinking. Cheers to discovering your next favorite bottle with Drinker!
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