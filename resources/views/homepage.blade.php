@extends('layouts')
@section('title', 'Home Page')
@section('content')

<div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/Home.png') }}" class="d-block w-100" alt="Home Image 1" style="height: 650px; width:400px;">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/image2.png') }}" class="d-block w-100" alt="Home Image 2" style="height: 650px; width:400px;">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/image3.png') }}" class="d-block w-100" alt="Home Image 3" style="height: 650px; width:400px;">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container">

    <h1>Shop Items</h1>
    <h2 class="category">Wines</h2>
    <div class="row">
        @foreach($shopItems->where('category', 'Wines') as $index => $item)
            <div class="col-md-3">
                @if($index === 0)
                    <!-- Only the first item will link to the Banrock page -->
                    <a href="{{ route('banrock') }}" style="text-decoration: none; color: inherit;">
                @endif
                    <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                        <div class="card mb-4">
                            <img src="{{ $item->image }}" alt="{{ $item->name }}" class="card-img-top"
                                style="height: 250px; margin:auto;">
                            <div class="card-body position-relative" style="overflow: hidden;">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                <div class="fade-effect"></div>
                            </div>
                        </div>
                    </div>
                    @if($index === 0)
                        </a>
                    @endif
            </div>
        @endforeach
        <div class="d-flex justify-content-center align-items-center" style="height: 100%; width: 100%; margin: 20px;">
            <a href="#" class="btn btn-outline-primary">See All</a>
        </div>
    </div>

    <h2 class="category">Vodka</h2>
    <div class="row">
        @foreach($shopItems->where('category', 'Vodka') as $item)
            <div class="col-md-3">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <div class="card mb-4">
                        <img src="{{ $item->image }}" alt="{{ $item->name }}" class="card-img-top"
                            style="height: 250px; margin:auto;">
                        <div class="card-body position-relative" style="overflow: hidden;">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <div class="fade-effect"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center" style="height: 100%; width: 100%; margin: 20px;">
                <a href="#" class="btn btn-outline-primary">See All</a>
            </div>
        @endforeach
    </div>
    <h2 class="category">Whiskey</h2>
    <div class="row">
        @foreach($shopItems->where('category', 'Whiskey') as $item)
            <div class="col-md-3">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <div class="card mb-4">
                        <img src="{{ $item->image }}" alt="{{ $item->name }}" class="card-img-top"
                            style="height: 250px; margin:auto;">
                        <div class="card-body position-relative" style="overflow: hidden;">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <div class="fade-effect"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center" style="height: 100%; width: 100%; margin: 20px;">
                <a href="#" class="btn btn-outline-primary">See All</a>
            </div>
        @endforeach
    </div>
    <h2 class="category">Taquila</h2>
    <div class="row">
        @foreach($shopItems->where('category', 'Taquila') as $item)
            <div class="col-md-3">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <div class="card mb-4">
                        <img src="{{ $item->image }}" alt="{{ $item->name }}" class="card-img-top"
                            style="height: 250px; margin:auto;">
                        <div class="card-body position-relative" style="overflow: hidden;">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <div class="fade-effect"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center" style="height: 100%; width: 100%; margin: 20px;">
                <a href="#" class="btn btn-outline-primary">See All</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
</div>


<style>
    .home-image {
        width: 100vw;
        height: 100vh;
        object-fit: cover;
    }

    .category {
        text-align: center;
        margin: 20px;
    }

    .card-body {
        max-height: 120px;
        position: relative;
    }

    .card-body .fade-effect {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 50px;
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
        pointer-events: none;
    }
</style>