@extends('layouts.app')

@section('title', 'Home')

@section('content')

<img src="{{ asset('storage/image-ad/pYI06j15kqxxjw8tOxY71RBhJqMPWcGZhy1azJX8.jpeg') }}">

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
                <div class="text-center"><a href="#"><img class="card-img-top img-fluid pt-3" src="{{ asset('img/iphonex.jpg') }}" alt="Card image cap"></a></div>
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
                <div class="text-center"><a href="#"><img class="card-img-top img-fluid pt-3" src="{{ asset('img/cactus-candle.jpg') }}" alt="Card image cap"></a></div>
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
                <div class="text-center"><a href="#"><img class="card-img-top img-fluid pt-3" src="{{ asset('img/contigo.jpg') }}" alt="Card image cap"></a></div>
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

<div>
    <!-- This is how to display data has been passed to the view (in App\Http\Controller\HomeController.php), look at /app/Product.php to look at data that's in product. Remove {{-- --}} to test and remove comment -->
    {{-- @foreach ($products as $product)
    <p>Product {{ $product->id }} - {{ $product->category->name }} - {{ $product->title}}</p>
    @endforeach --}}
</div>
@endsection
