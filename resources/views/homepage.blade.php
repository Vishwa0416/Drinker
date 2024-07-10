@extends('layouts')
@section('title', 'Home Page')
@section('content')

<div class="container">
    <h1>Drinker!</h1>
    <p>Make your own drinks as you wish!</p>
    <div>
        <h3 class="text-center">Wines</h3>
        <br>
        <div class="row">
            <div class="col-sm-12 col-md-6 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/wine1.jpeg') }}" class="card-img-top" alt="Wines"
                        style="height: 250px; object-fit: cover;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Banrock Station Shiraz 75Cl - £7.50</h5>
                        <p class="card-text">A description of the wine can go here. A description of the wine can go
                            here. A description of the wine can go here. A description of the wine can go here.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/wine2.jpeg') }}" class="card-img-top" alt="Wines"
                        style="height: 250px; object-fit: cover;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Bouchard Grand Conseiller Chardonnay 75Cl - £9.50</h5>
                        <p class="card-text">A description of the wine can go here. A description of the wine can go
                            here. A description of the wine can go here. A description of the wine can go here.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
        </div>
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