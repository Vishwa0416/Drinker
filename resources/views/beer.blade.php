@extends('layouts')
@section('title', 'Beers and Mixures')
@section('content')

<div class="container">
    <h3>Beers & Mixers:</h3>
    <div>


        <h3 class="text-center">Beers</h3>
        <div class="row d-flex flex-wrap">
            @foreach($mix->where('category', 'Beers') as $item)
                <div class="col-md-3 mb-4">
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
                </div>
            @endforeach
        </div>


        <div class="d-flex justify-content-center align-items-center">
            <a href="#" class="btn btn-outline-primary">See All</a>
        </div>

        <h3 class="text-center" style="margin-top: 40px">Mixures</h3>
        <div class="row d-flex flex-wrap">
            @foreach($mix->where('category', 'Mixures') as $item)
                <div class="col-md-3 mb-4">
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
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <a href="#" class="btn btn-outline-primary">See All</a>
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