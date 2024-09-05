@extends('layouts')
@section('title', 'Home Page')
@section('content')

<div class="container">
    <h1>Shop Items</h1>
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
        @endforeach
    </div>

    <div class="d-flex justify-content-center align-items-center" style="height: 100%; width: 100%; margin: 20px;">
        <a href="#" class="btn btn-outline-primary">See All</a>
    </div>
</div>

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