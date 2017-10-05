<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- === Meta Data === -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="classified webpage">
    <meta name="keywords" content="frontpage">
    <meta name="author" content="">
    <title>ClassifiedZ | @yield('title')</title>

    <!-- === Dependencies === -->

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
    <!-- Navbar Collapsible Button -->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar Content -->
    <a class="navbar-brand navbar-header" href="/"><i class="fa fa-search">&nbsp;</i>ClassifiedZ</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar Items -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
            <li class=" nav-link dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-globe"></i> Browse</li>
            <ul class="dropdown-menu dropdownfix" role="menu" aria-labelledby="dLabel">
                <li class="dropdown-item dropdown-submenu"><a href=" #">Clothing <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Bags <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Athletic/Bowling/Doctor's/Duffel</a></li>
                                <li><a class="dropdown-item" href="#">Backpack/Saddle</a></li>
                                <li><a class="dropdown-item" href="#">Baguette/Satchel/Tote</a></li>
                                <li><a class="dropdown-item" href="#">Briefcase/Attache/Hobo/Messenger</a></li>
                                <li><a class="dropdown-item" href="#">Clutch/Minaudiere/Wrislet</a></li>
                                <li><a class="dropdown-item" href="#">Cosmetic Case</a></li>
                                <li><a class="dropdown-item" href="#">Envelope</a></li>
                                <li><a class="dropdown-item" href="#">Shoulder/Sling</a></li>
                                <li><a class="dropdown-item" href="#">Others</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Jewellery <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Bracelets/Rings</a></li>
                                <li><a class="dropdown-item" href="#">Brooches/Pins</a></li>
                                <li><a class="dropdown-item" href="#">Jewellery Sets</a></li>
                                <li><a class="dropdown-item" href="#">Necklaces</a></li>
                                <li><a class="dropdown-item" href="#">Watches</a></li>
                                <li><a class="dropdown-item" href="#">Others</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Outfits and Outwears <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Kids</a></li>
                                <li><a class="dropdown-item" href="#">Youth</a></li>
                                <li><a class="dropdown-item" href="#">Men</a></li>
                                <li><a class="dropdown-item" href="#">Women</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Shoes <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Kids</a></li>
                                <li><a class="dropdown-item" href="#">Youth</a></li>
                                <li><a class="dropdown-item" href="#">Men</a></li>
                                <li><a class="dropdown-item" href="#">Women</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">Accessories & Others</a></li>
                    </ul>
                </li>

                <li class=" dropdown-item dropdown-submenu"><a href=" #">Electronics <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Accessories <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Cameras/Camcorders Accessories</a></li>
                                <li><a class="dropdown-item" href="#">Cables/Connectors</a></li>
                                <li><a class="dropdown-item" href="#">Computers Accessories</a></li>
                                <li><a class="dropdown-item" href="#">External Storage</a></li>
                                <li><a class="dropdown-item" href="#">Phone/Tablets Accessories</a></li>
                                <li><a class="dropdown-item" href="#">Printer/Scanner/Fax</a></li>
                                <li><a class="dropdown-item" href="#">Others</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Computers <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Desktops</a></li>
                                <li><a class="dropdown-item" href="#">Laptops</a></li>
                                <li><a class="dropdown-item" href="#">Notebooks</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Consoles & Video Games <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Playstation</a></li>
                                <li><a class="dropdown-item" href="#">Nintendo</a></li>
                                <li><a class="dropdown-item" href="#">Xbox</a></li>
                                <li><a class="dropdown-item" href="#">Others</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Phones, Tablets & Smart Watches <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Android</a></li>
                                <li><a class="dropdown-item" href="#">iOS</a></li>
                                <li><a class="dropdown-item" href="#">Windows</a></li>
                                <li><a class="dropdown-item" href="#">Others</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown-submenu"><a href=" #">TVs & Media <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Cameras/Camcorders</a></li>
                                <li><a class="dropdown-item" href="#">CDs/DVDs/Blu-ray</a></li>
                                <li><a class="dropdown-item" href="#">LCD/LED/OLED</a></li>
                                <li><a class="dropdown-item" href="#">Plasma</a></li>
                                <li><a class="dropdown-item" href="#">Others</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">Others</a></li>
                    </ul>
                </li>
                <li class="dropdown-item dropdown-submenu"><a href=" #"> Home <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Home Appliances <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Irons/Garment Steamers</a></li>
                                <li><a class="dropdown-item" href="#">Microwaves/Cookers</a></li>
                                <li><a class="dropdown-item" href="#">Mixers/Blenders/Juicers</a></li>
                                <li><a class="dropdown-item" href="#">Heaters/Humidifiers/Dehumidifiers</a></li>
                                <li><a class="dropdown-item" href="#">Ovens/Toasters</a></li>
                                <li><a class="dropdown-item" href="#">Refrigerators/Freezers</a></li>
                                <li><a class="dropdown-item" href="#">Washers/Dryers</a></li>
                                <li><a class="dropdown-item" href="#">Vacuum Cleaners</a></li>
                                <li><a class="dropdown-item" href="#">Others</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Indoor <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Bath/Kitchen/Dining Wares</a></li>
                                <li><a class="dropdown-item" href="#">Bedding Steamers</a></li>
                                <li><a class="dropdown-item" href="#">Carpets/Rugs/Runners</a></li>
                                <li><a class="dropdown-item" href="#">Fireplace/Woods</a></li>
                                <li><a class="dropdown-item" href="#">Decors/Accents/Lighting/Fans</a></li>
                                <li><a class="dropdown-item" href="#">Storage/Shelves</a></li>
                                <li><a class="dropdown-item" href="#">Others</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Outdoor <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">BBQ/Outdoor Cooking</a></li>
                                <li><a class="dropdown-item" href="#">Decks/Fences</a></li>
                                <li><a class="dropdown-item" href="#">Decors/Lighting</a></li>
                                <li><a class="dropdown-item" href="#">Garage Doors/Openers</a></li>
                                <li><a class="dropdown-item" href="#">Hot Tubs/Pools</a></li>
                                <li><a class="dropdown-item" href="#">Lawnmowers/Leaf Blowers</a></li>
                                <li><a class="dropdown-item" href="#">Patio/Garden Furniture</a></li>
                                <li><a class="dropdown-item" href="#">Plants/Fertilizer/Soil</a></li>
                                <li><a class="dropdown-item" href="#">Snowblowers</a></li>
                                <li><a class="dropdown-item" href="#">Tools/Storage</a></li>
                                <li><a class="dropdown-item" href="#">Others</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Renovations Materials <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Cabinets/Countertops</a></li>
                                <li><a class="dropdown-item" href="#">Doors/Trim/Windows</a></li>
                                <li><a class="dropdown-item" href="#">Electrical</a></li>
                                <li><a class="dropdown-item" href="#">Floors/Walls</a></li>
                                <li><a class="dropdown-item" href="#">Painting/Paint Supplies</a></li>
                                <li><a class="dropdown-item" href="#">Plumbing/Sinks/Showers/Toilets</a></li>
                                <li><a class="dropdown-item" href="#">Roofing</a></li>
                                <li><a class="dropdown-item" href="#">Others</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">Others</a></li>
                    </ul>
                </li>
                <li class=" dropdown-item dropdown-submenu"><a href=" #"> Vehicles <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Motorized <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">ATVs/Snowmobiles</a></li>
                                <li><a class="dropdown-item" href="#">Boats/Watercrafts</a></li>
                                <li><a class="dropdown-item" href="#">Cars</a></li>
                                <li><a class="dropdown-item" href="#">Motocycles</a></li>
                                <li><a class="dropdown-item" href="#">RV</a></li>
                                <li><a class="dropdown-item" href="#">Trucks</a></li>
                                <li><a class="dropdown-item" href="#">Vans</a></li>
                                <li><a class="dropdown-item" href="#">Others</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Non-motorized <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Bicycles</a></li>
                                <li><a class="dropdown-item" href="#">Boards</a></li>
                                <li><a class="dropdown-item" href="#">Others</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Vehicle Parts <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Auto Body Parts</a></li>
                                <li><a class="dropdown-item" href="#">Engines & Parts/Drivetrain/Transmission</a></li>
                                <li><a class="dropdown-item" href="#">Interiors</a></li>
                                <li><a class="dropdown-item" href="#">Tires/Rims</a></li>
                                <li><a class="dropdown-item" href="#">Vehicle Accessories</a></li>
                                <li><a class="dropdown-item" href="#">Others</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">Others</a></li>
                    </ul>
                </li>
                <li class="dropdown-item dropdown-submenu"><a href=" #"> Others(General) <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Community <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Activities</a></li>
                                <li><a class="dropdown-item" href="#">Events</a></li>
                                <li><a class="dropdown-item" href="#">Friendship/Networking</a></li>
                                <li><a class="dropdown-item" href="#">Team</a></li>
                                <li><a class="dropdown-item" href="#">Volunteers</a></li>
                                <li><a class="dropdown-item" href="#">Others</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Real Estates <span class="caret"></span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">For Rent<span class="caret"></span></a></li>
                                <li><a class="dropdown-item" href="#">For Sale<span class="caret"></span></a></li>
                                <li><a class="dropdown-item" href="#">Others<span class="caret"></span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown-submenu"><a href=" #">Job/Services/Others <span class="caret"></span></a></li>
                    </ul>
                </li>
            </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user"></i> Your Store</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('postAdForm') }}"><i class="fa fa-pencil-square-o"></i> Post an
                    Ad</a>
            </li>
        </ul>
        <ul class="navbar-nav">

            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"> <i class="fa fa-sign-in"></i> Login</a>
                </li>
                @else
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
                <!-- Navbar Search Field -->
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search for anything...">
                        <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
        </ul>
    </div>
</nav>
<!-- NAV END -->
<div class="container-fluid content">

    @yield('content')
    
	</div>
    <!-- FOOTER -->
    <footer class="p-5 bg-inverse text-muted">
        <div class="container">
            <div class="row">
                <ul class="list-inline m-1">
                    <li class="list-inline-item">&copy; ClassifiedZ 2017</li>
                    <li class="list-inline-item"><a href="/privacy"  class="text-muted">Privacy Notice</a></li>
                    <li class="list-inline-item"><a href="/postingpolicy"  class="text-muted">Posting Policy</a></li>
                    <li class="list-inline-item"><a href="/refund"  class="text-muted">Sales and Refunds</a></li>
                    <li class="list-inline-item"><a href="/terms"  class="text-muted">Terms of Use</a></li>
                </ul>
            </div>
        </div>
  </footer>
<!-- FOOTER END-->
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<!-- === Dependencies === -->
<!-- Custom JS -->
<script src="{{ asset('js/script.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/tether/tether.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>
