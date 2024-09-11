@extends('layouts')
@section('title', 'Beers and Mixures')
@section('content')

<div class="container">
    <h3>Beers & Mixers:</h3>
    <div>

        <br>
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

        <h3 class="text-center">Mixures</h3>
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

    <div>
        <h3 class="text-center">Whiskey</h3>
        <br>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/whiskey.jpeg') }}" class="card-img-top" alt="Jack Daniel's Whiskey"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Jack Daniel's Black 1000ML - £10.50</h5>
                        <p class="card-text">This is the whiskey made like our fathers made it a long time ago. It’s
                            called Jack Daniel’s Old No. 7 Brand Old-Time Tennessee Sour Mash Whiskey, and it’s
                            different from bourbon. Jack Daniel’s is special because it’s made smooth by dripping it
                            slowly through 10 feet of charcoal made from sugar maple.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/whiskey2.jpeg') }}" class="card-img-top" alt="Gold Label"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Johnnie Walker Gold Label 700ML - £24.99</h5>
                        <p class="card-text">Johnnie Walker Gold Label is one of the world’s most iconic whiskies.
                            Showing flavours of maple syrup, spices and malt on the nose which is then followed by a dry
                            smokiness and a sweet creamy vanilla mouthfeel. The inherent richness evolves on the finish
                            with a raisiny, sweet sherry flavour.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/whiskey3.jpg') }}" class="card-img-top" alt="Double Black"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Johnnie Walker Double Black 750ML - £21.50</h5>
                        <p class="card-text">An interesting twist on Johnnie Walker Black Label, Double Black was rolled
                            out for general release in 2011 after a successful launch in travel retail. Double Black
                            adds to the normal Black Label profile by including more Islay whisky and casks that have
                            been heavily charred, giving a more intense flavour with a greater emphasis on smoke while
                            keeping true to the sophisticated Johnnie Walker style.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/whiskey4.jpg') }}" class="card-img-top" alt="Canadian Club"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Canadian Club 5 Years 750ML - £14.50</h5>
                        <p class="card-text">In the glass, Canadian Club has a deep gold color. The nose is very grainy,
                            with the mid-bodied scent of sweet barley. The flavor is thickly sweet, with a hint of a
                            spicy bite. The finish is sweet, smooth, and with a bit of spiciness.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h3 class="text-center">Taquila</h3>
        <br>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/taq1.jpg') }}" class="card-img-top" alt="Taquila 1"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Artisan Mezcal Monte Luna 750ML - £17.50</h5>
                        <p class="card-text">Bruxo No. 5 is made by mezcalero Candido Reyes, AKA Tio Conejo (Uncle
                            Rabbit). Other releases of this are also made by Cesareo “Hero” Rodriguez. The wild agave
                            Tobala are very small, meaning that it takes a great amount of Tobala to produce small
                            quantities of mezcal.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/taq2.jpg') }}" class="card-img-top" alt="Taq 2"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Taquila Rose Strawberry Cream Liqueur 700ML - £18.50</h5>
                        <p class="card-text">The original strawberry cream liqueur was the first drink to mix tequila
                            with strawberry cream instead of Irish whiskey. It was a unique and delicious idea. Even
                            after more than 20 years, Tequila Rose is still the world’s most popular strawberry cream
                            liqueur, and it inspired other similar cream liqueurs.

                            When the bottle turns pink, it’s ready to drink, so you don’t need to guess when it’s
                            chilled perfectly.

                            Tequila Rose is a smooth mix of creamy strawberry and tequila, which can be enjoyed whether
                            you like sweet or exciting drinks. It has an elegant design with black glass to keep it
                            fresh and silver roses and pink strawberries for a beautiful look. It’s a timeless and
                            attractive classic.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/taq3.jpg') }}" class="card-img-top" alt="Taq 3"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Casco Viejo Taquila Silver 750ML- £16.99</h5>
                        <p class="card-text">Casco Viejo is a famous brand of tequila that is known all around the
                            world. It’s the third best-selling tequila in Mexico, which is where tequila comes from, and
                            it’s the most popular tequila in Mexico City.

                            This tequila is special because it’s really good for mixing with other drinks, and it has
                            always been of high quality, passed down through many generations of tequila makers.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/taq4.jpg') }}" class="card-img-top" alt="Taq 4"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Jose Cuervo Especial Silver Tequila 750ML - £19.50</h5>
                        <p class="card-text">Its uniqueness comes from blending young silver tequilas with specially
                            selected oak barrel-mellowed tequilas. The process culminates in a smoother, well-balanced
                            tequila with a fresh aroma and a crisp, clean finish. Clasico has a subtle taste with just a
                            touch of sweetness. Perfect in a cocktail. Superb straight up or on the rocks.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
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