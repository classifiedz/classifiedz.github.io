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
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" />

</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
    <!-- Navbar Collapsible Button -->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar Content -->
    <a class="navbar-brand" href="/" title="homepage" id="logo"><img src="{{ asset('img/classifiedz.png') }}" width="180" height="32"></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar Items -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class=" nav-link dropdown-toggle" href="!#" data-toggle="dropdown"><i class="fa fa-globe"></i> Browse</a>
				<div class="dropdown-menu bg-primary">
                    @foreach ($categories as $category)
                        @if (count($category->children) > 0)
                            <a class="dropdown-item text-white bg-primary" href="/categories/{{ $category->id }}">
                                {{ $category->name }}
                            </a>
                        @else
							<a class="dropdown-item" href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                        @endif
                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/profile"><i class="fa fa-user"></i> Your Store</a>
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
                <a href="!#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                	{{ Auth::user()->name }} <span class="caret"></span>
            	</a>

	            <div class="dropdown-menu bg-primary">
                    <a class="dropdown-item text-white bg-primary" href="/profile">Profile</a>
                    <a class="dropdown-item text-white bg-primary" href="{{ route('logout') }}"
	                    onclick="event.preventDefault();
	                    document.getElementById('logout-form').submit();">
	                    	Logout
                	</a>
	                <form id="logout-form" action="{{ route('logout') }}" method="POST"
		                style="display: none;">
		                {{ csrf_field() }}
	                </form>
				</div>
			</li>
            @endguest
    		<!-- Navbar Search Field
    		<form class="form-inline my-2 my-lg-0">-->
            <li class="nav-item">
                <input class="form-control mr-sm-2" id="searchbar" type="text" placeholder="Search for anything..."/>
            </li>
            <li class="nav-item">
                &nbsp;<button class="btn btn-success my-2 my-sm-0 searchbutton">Search</button>
            </li>
    		<!-- </form> -->
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
