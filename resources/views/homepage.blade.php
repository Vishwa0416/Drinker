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
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/wine1.jpeg') }}" class="card-img-top" alt="Wines"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Banrock Station Shiraz 75Cl - £7.50</h5>
                        <p class="card-text">The Banrock Station Shiraz is a rich and full-bodied red wine with strong
                            flavors of blackberry, coffee, and oak, along with a touch of clove and cinnamon. It has a
                            full-bodied taste, showcasing plum and blackberry notes, complemented by hints of clove and
                            aniseed spices. The alcohol by volume (ABV) of this wine is 13%.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/wine2.jpeg') }}" class="card-img-top" alt="Wines"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Bouchard Grand Conseiller Chardonnay 75Cl - £9.50</h5>
                        <p class="card-text">This wine smells light and fruity with hints of minerals, white flowers,
                            and peaches. It’s dry with a citrusy taste. It’s made in steel tanks without oak aging.
                            Great with seafood, chicken, and salads.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/wine3.jpeg') }}" class="card-img-top" alt="Wines"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Chateau Clarke 750ML - £9.50</h5>
                        <p class="card-text">This wine has a strong smell of ripe black currants mixed with cedar,
                            cloves, and violets. It tastes round and full, like baked plums, and it has a good balance
                            of chewy tannins and not too much acidity.</p>
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