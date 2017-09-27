<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- === Meta Data === -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="classified ads webpage">
    <meta name="keywords" content="classified, concordia, student, buy, sell">
    <meta name="author" content="Liyuan Zhang, Rami Yahia, Kevin Camellini, Brandon Balala, Laurie Yung, Neqqash Hussin, Gneykou Kengne Yvann Monny">
    <title>Classfiedz</title>

    <!-- === Dependencies === -->

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="css/stylesheet.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
    <body>
        <!-- NAVBAR -->
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
            <!-- Navbar Collapsible Button -->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Content -->
            <a class="navbar-brand" href="index.html" style="color: #d0f2f1; font-weight:bold;font-size: 1.4em;"><i class="fa fa-search">&nbsp;</i>ClassifiedZ</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar Items -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Browse</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Category 1</a>
                            <a class="dropdown-item" href="#">Category 2</a>
                            <a class="dropdown-item" href="#">Category 3</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Your Store</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign in</a>
                    </ul>
                    <!-- Navbar Search Field -->
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search for anything...">
                        <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <!-- NAV END -->

            <!-- PAGE CONTENT -->
            <div class="container-fluid py-3">
                <div class="row-fluid">
                    <!-- CARD GROUP  -->
                    <div class="card-columns">
                        <!-- Card 1 -->
                        <div class="card my-4">
                            <div class="card-header text-center text-primary">
                                <span class="card-title h4">NEW iPhone X</span>
                            </div>
                            <div class="text-center"><a href="#"><img class="card-img-top img-fluid pt-3" src="images/iphonex.jpg" alt="Card image cap"><a></div>
                                <div class="card-block">
                                    <p class="card-text"> $1200.00CAD <small>+Shipping</small></p>
                                    <p class="card-text">New, untouched iPhone X still in box!</br></br></br></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <!-- Clearfix = Helps with document flow -->
                            <div class="clearfix"></div>
                            <!-- Card 2 -->
                            <div class="card my-4">
                                <div class="card-header text-center text-primary">
                                    <span class="card-title h4">Cactus Candles</span>
                                </div>
                                <div class="text-center"><a href="#"><img class="card-img-top img-fluid pt-3" src="images/cactus-candle.jpg" alt="Card image cap"></a></div>
                                <div class="card-block">
                                    <p class="card-text"> $45.50CAD <small>+FREE Shipping</small></p>
                                    <p class="card-text">100% handmade cactus candles! No harsh chemicals used! Comes in a set of three as shown in the picture, each lasting up to 8 hours!</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 20 mins ago</small>
                                </div>
                            </div>
                            <!-- Clearfix = Helps with document flow -->
                            <div class="clearfix"></div>
                            <!-- Card 3 -->
                            <div class="card my-4">
                                <div class="card-header text-center text-primary">
                                    <span class="card-title h4">Contigo Thermos</span>
                                </div>
                                <div class="text-center"><a href="#"><img class="card-img-top img-fluid pt-3" src="images/contigo.jpg" alt="Card image cap"></a></div>
                                <div class="card-block">
                                    <p class="card-text"> $14.39CAD <small>+Shipping</small></p>
                                    <p class="card-text">Great Contigo thermos that's never been used. Keeps liquids hot for hours and doesn't leak! </br></br></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PAGE CONTENT END -->

                <!-- FOOTER -->
                <footer class="py-5 bg-inverse text-muted">
                    <div class="container">
                        <div class="row">
                            <ul class="list-inline m-1">
                                <li class="list-inline-item">&copy; ClassifiedZ 2017</li>
                                <li class="list-inline-item"><a href="#"  class="text-muted">Privacy Notice</a></li>
                                <li class="list-inline-item"><a href="#"  class="text-muted">Posting Policy</a></li>
                                <li class="list-inline-item"><a href="#"  class="text-muted">Sales and Refunds</a></li>
                                <li class="list-inline-item"><a href="#"  class="text-muted">Terms of Use</a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
                <!-- FOOTER END-->

                <!-- === Dependencies === -->
                <!-- Custom JS -->
                <script src="js/script.js"></script>
                <!-- Bootstrap core JavaScript -->
                <script src="js/jquery/jquery.min.js"></script>
                <script src="js/tether/tether.min.js"></script>
                <script src="js/bootstrap/bootstrap.min.js"></script>

        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div> -->
    </body>
    </html>
