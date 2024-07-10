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
                <div class="card" style="width: 15rem; margin: auto;">
                    <img src="{{ asset('images/wine1.jpeg') }}" class="card-img-top" alt="Wines"
                        style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Banrock Station Shiraz 75Cl</h5>
                        <p class="card-text">A description of the wine can go here.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mb-4">
                <div class="card" style="width: 15rem; margin: auto;">
                    <img src="{{ asset('images/wine2.jpeg') }}" class="card-img-top" alt="Wines"
                        style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Bouchard Grand Conseiller Chardonnay 75Cl</h5>
                        <p class="card-text">A description of the wine can go here.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection