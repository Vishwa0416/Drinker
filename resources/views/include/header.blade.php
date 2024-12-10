<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">Drinker</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beer') }}">Beers & Mixers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                @auth
                <div class="d-flex align-items-center">
                    <img src="{{ Auth::user()->profile_image ? asset('images/' . Auth::user()->profile_image) : asset('images/man.png') }}" 
                         alt="User Image" 
                         class="rounded-circle" 
                         style="width: 25px; height: 25px; object-fit: cover; margin-right: 10px;">
                    
                    <span class="navbar-text">
                        {{ Auth::user()->name }}
                    </span>
                </div>
                
                    <a href="{{ route('logout') }}" class="btn btn-secondary ms-3"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg text-uppercase">Login</a>
                @endauth
            </div>
            
        </div>
    </div>
</nav>