@extends('layouts')
@section('title', 'Product Page')
@section('content')

<div class="container">
    <h1>Products</h1>
    <p>You can see our products here.</p>
    <div>
        <h3 class="text-center">Wines</h3>
        <br>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/wine1.jpeg') }}" class="card-img-top" alt="Banrock Wine"
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
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/wine2.jpeg') }}" class="card-img-top" alt="Bouchard Grand Wine"
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
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/wine3.jpeg') }}" class="card-img-top" alt="Chateau Clarke Wine"
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
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/wine4.png') }}" class="card-img-top" alt="Torres Mas La Plana Wine"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Torres Mas La Plana 750ML - £19.50</h5>
                        <p class="card-text">Torres Mas la Plana is a deep, dense cherry colour, with a touch of
                            mahogany. It has a wonderfully intense bouquet typical of this vineyard with hints of
                            blackberries, cherries, truffles, spices such as clove, liquorice, black and white pepper.
                            There is an incense-like quality developed during ageing in wood. Full, elegant and
                            pronounced aftertaste, befitting a wine of this quality.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection