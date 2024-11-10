@extends('layouts')
@section('title', 'Product Page')
@section('content')

<div class="container">
    <h3>Our Products:</h3>

    <!-- Wines Section -->
    <div>
        <h2 class="category text-center">Wines</h2>
        <div class="row d-flex flex-wrap">
            @foreach($shopItems->where('category', 'Wines') as $index => $item)
                <div class="col-md-3 mb-4">
                    <!-- If it's the first item, link to the Banrock page -->
                    @if($index === 0)
                        <a href="{{ route('banrock') }}" style="text-decoration: none; color: inherit;">
                    @endif
                    
                    <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                        <div class="card">
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
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <a href="#" class="btn btn-outline-primary">See All</a>
        </div>
    </div>

    <!-- Repeat for Vodka, Whiskey, and Tequila Sections (unchanged) -->

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
