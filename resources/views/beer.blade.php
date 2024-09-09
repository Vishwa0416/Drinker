@extends('layouts')
@section('title', 'Beers and Mixures')
@section('content')

<div class="container">
    <h3>Beers & Mixers:</h3>
    <div>
        <h3 class="text-center">Beers</h3>
        <br>
        <h2 class="category">Beers</h2>
        <div class="row">
            @foreach($mix->where('category', 'Beers') as $item)
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





        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/tiger.png') }}" class="card-img-top" alt="Tiger Black Beer"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Tiger Black Beer Can 750ml - £1.50</h5>
                        <p class="card-text">Tiger Black is a variant of the popular Singaporean beer brand, Tiger Beer.
                            This 500ml bottle of Tiger Black is a dark lager with a rich and full-bodied taste. It has a
                            dark brown color, a malty aroma, and a slightly sweet flavor profile with hints of caramel
                            and coffee.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/carl.jpg') }}" class="card-img-top" alt="Carlsberg"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Carlsberg Premium Pilsner 500ml - £0.75</h5>
                        <p class="card-text">At Carlsberg, the pursuit of better beer is in our DNA. More than 100 years
                            after our founder J.C. Jacobsen mastered the art of brewing great Pilsner, we’re still
                            looking for ways to improve our beer. Our perfectly balanced Danish Pilsner is wonderfully
                            crisp and refreshing, with a full flavor and a distinctive hoppy aroma. </p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/carlspc.jpg') }}" class="card-img-top" alt="Carlsberg Spc"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Carlsberg Special Brew - £1.00</h5>
                        <p class="card-text">The international flavors of global brewers Carlsberg, is produced at the
                            Lion Brewery under license, adding further dimensions to the portfolio of products on offer,
                            is available in 8.8%.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/hei.jpg') }}" class="card-img-top" alt="Heineken Silver"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Heiniken Beer Can Silver 750ML - £2.50</h5>
                        <p class="card-text">The world’s most international premium beer: Heineken.
                            Brewed with 100% natural ingredients only: Malted Barley, Water, Hops and a small but
                            significant extra, called A-Yeast. Heineken’s unique A Yeast ® is responsible for the rich
                            balanced taste and subtle notes that have distinguished every-single Heineken since the 19th
                            century.
                            This Global Beer Brand is now brewed in Sri Lanka with the same global recipe which proves
                            that Heineken has the same great taste in 192 countries all around the world.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h3 class="text-center">Mixures</h3>
        <br>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/vodka1.jpg') }}" class="card-img-top" alt="Absolute Vodka"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Absolute Vodka Citron 750ML - £10.50</h5>
                        <p class="card-text">Enjoy the fresh taste of Absolut Vodka Citron. It’s a special vodka with
                            lemon flavor. It’s made with a lot of care and skill. It’s a good choice for people who want
                            a great vodka experience.

                            Absolut Vodka Citron has won many awards for its great quality and taste. People who know a
                            lot about drinks like it a lot. This shows that it’s one of the best vodka brands.

                            You can use Absolut Vodka Citron to make fancy cocktails. You can drink it straight, mix it
                            into a classic martini, or use it to make citrusy drinks. It’s smooth and tasty. You can
                            keep it in your bar or at home for any time you want a good drink.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/vodka2.jpg') }}" class="card-img-top" alt="Noble Vodka"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Noblewood Beluga Noble Vodka 700ML - £14.99</h5>
                        <p class="card-text">Beluga is a very famous and high-quality vodka from Russia. It has a fancy
                            history and is made with great care. The place where they make it, called the Mariinsk
                            Distillery, was started in 1900 and is in a clean and natural part of Siberia.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/vodka3.jpg') }}" class="card-img-top" alt="Finlandia Vodka"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Finlandia Vodka 750ML - £7.50</h5>
                        <p class="card-text">Finlandia Vodka is a very good vodka made in Finland. They use natural
                            things like special Finnish barley and clean glacier water to make it taste dry, light, and
                            smooth. People have liked the taste of Finlandia Vodka for more than 50 years. You can use
                            it to make many tasty drinks like a Finlandia Bloody Mary or an Espresso Martini, or even
                            classic ones like a Vodka Martini or a Cosmo. Finlandia Vodka also helps a charity called
                            Living Lands and Waters, which works to protect rivers in the United States.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem; margin: auto; height: 400px;">
                    <img src="{{ asset('images/vodka4.jpg') }}" class="card-img-top" alt="Crystal Head Vodka"
                        style="height: 250px; margin:auto;">
                    <div class="card-body position-relative" style="overflow: hidden;">
                        <h5 class="card-title">Crystal Head Vodka 50ML - £4.99</h5>
                        <p class="card-text">Crystal Head uses only the highest-quality ingredients to create unique
                            expressions of ultra-premium vodka that are completely additive-free. Original, crafted from
                            locally sourced Canadian corn, Aurora, crafted from English wheat, and Onyx, crafted with
                            Blue Weber agave.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <div class="fade-effect"></div>
                    </div>
                </div>
            </div>
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