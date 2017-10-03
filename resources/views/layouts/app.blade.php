<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- === Meta Data === -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="classified webpage">
    <meta name="keywords" content="frontpage">
    <meta name="author" content="">
    <title>ClassifiedZ - @yield('title')</title>

    <!-- === Dependencies === -->

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
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
        <a class="navbar-brand" href="/" style="color: #d0f2f1; font-weight:bold;font-size: 1.4em;"><i class="fa fa-search">&nbsp;</i>ClassifiedZ</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar Items -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Browse</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Category 1</a>
                        <a class="dropdown-item" href="#">Category 2</a>
                        <a class="dropdown-item" href="#">Category 3</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Your Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Sell your stuff</a>
                </li>
            </ul>
            <ul class="navbar-nav">

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
        </div>
    </nav>
    <!-- NAV END -->

    @yield('content')

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
