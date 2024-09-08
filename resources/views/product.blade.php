@extends('layouts')
@section('title', 'Product Page')
@section('content')

<div class="container">
    <h3>Our Products:</h3>
    <div>
        <h2 class="category">Wines</h2>
        <div class="row">
            @foreach($shopItems->where('category', 'Wines') as $item)
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
                <div class="d-flex justify-content-center align-items-center"
                    style="height: 100%; width: 100%; margin: 20px;">
                    <a href="#" class="btn btn-outline-primary">See All</a>
                </div>
            @endforeach
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

<style>
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