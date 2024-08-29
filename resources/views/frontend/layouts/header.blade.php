{{-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('frontend/images/logo/logo.png') }}" alt="" style="height: 80px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::routeIs('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}" id="dropdown04" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">About</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="#">Menu</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Sister Org</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="#">Bethel Gurkha Coffee Garden</a>
                        <a class="dropdown-item" href="#">Bethel Auto Car Wash</a>
                        <a class="dropdown-item" href="#">Bethel Grocery Shop</a>
                        <a class="dropdown-item" href="#">Bethel Agro & Tourism</a>
                    </div>
                </li>
                <li class="nav-item"><a href="{{ route('about') }}/#founder-view" class="nav-link">Founder View</a></li>
                <li class="nav-item {{ Request::routeIs('blog') ? 'active' : '' }}">
                    <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                </li>
                <li class="nav-item {{ Request::routeIs('gallery') ? 'active' : '' }}"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                <li class="nav-item {{ Request::routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>


                @auth
                    @if (Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a href="{{ url('/admin') }}" class="nav-link">
                                <span class="icon-person" style="font-size: 26px;"></span>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endif
                @endauth


            </ul>
        </div>
    </div>
</nav> --}}



<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('frontend/img/logo/logo.png') }}" alt="" style="height: 80px">
            </a></h1>
            <!-- <img src="{{asset('frontend/img/logo.png')}}" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                <a href="" class="nav-item nav-link">Service</a>
                <a href="{{ route('menu') }}" class="nav-item nav-link">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sister Org</a>
                    <div class="dropdown-menu m-0">
                        <a href="" class="dropdown-item">Bethel Gurkha Coffee Garden</a>
                        <a href="" class="dropdown-item">Bethel Auto Car Wash</a>
                        <a href="" class="dropdown-item">Bethel Grocery Shop</a>
                        <a href="" class="dropdown-item">Bethel Agro & Tourism</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4">Login</a>
        </div>
    </nav>


</div>
<!-- Navbar & Hero End -->

<!-- END nav -->
