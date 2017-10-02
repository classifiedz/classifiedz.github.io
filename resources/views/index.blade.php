@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- PAGE CONTENT CONTAINER -->
<div class="container-fluid py-3">
    @if(session('alert_msg'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      {!! session('alert_msg') !!}
    </div>
    @endif
    
	<!-- Row Fluid -->
	<div class="row-fluid">
		<!-- Card Columns -->
		<div class="card-columns">
			<!-- Card -->
			<div class="card">
				<div class="card-header text-center text-primary">
					<span class="card-title h4">NEW iPhone X</span>
				</div>
		    	<img class="card-img-top img-fluid" width="100%" src="{{ asset('img/iphonex.jpg') }}" alt="Card image cap">
				<div class="card-block">
					<p class="card-text"> $1200.00CAD <small>+Shipping</small></p>
					<p class="card-text">New, untouched iPhone X still in box!</br></br></br></p>
				</div>
				<div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div>
	  		</div>
			<!-- End Card-->

		  	<!-- Card -->
		  	<div class="card p-3">
    			<blockquote class="card-block card-blockquote">
			      	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			      	<footer>
			        	<small class="text-muted">
				        	Someone famous in <cite title="Source Title">Source Title</cite>
			        	</small>
		      		</footer>
		    	</blockquote>
		  	</div>
			<!-- End Card-->

	  		<!-- Card -->
		  	<div class="card">
		    	<img class="card-img-top img-fluid" width="100%" src="{{ asset('img/cactus-candle.jpg') }}" alt="Card image cap">
		    	<div class="card-block">
					<span class="card-title h4">Cactus Candles</span>
					<p class="card-text"> $45.50CAD <small>+FREE Shipping</small></p>
					<p class="card-text">100% handmade cactus candles! No harsh chemicals used! Comes in a set of three as shown in the picture, each lasting up to 8 hours!</p>
					<footer>
				  		<small class="text-muted">Last updated 30 minutes ago</small>
					</footer>
				</div>
		  	</div>
		  	<!-- End Card-->

			<!-- Card -->
		  	<div class="card card-inverse card-primary p-3 text-center">
				<blockquote class="card-blockquote">
		      		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
			      	<footer>
			        	<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
			      	</footer>
			    </blockquote>
			</div>
			<!-- End Card-->

			<!-- Card -->
			<div class="card text-center">
			    <div class="card-block">
		      		<h4 class="card-title">Card title</h4>
		      		<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		      		<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    	</div>
		  	</div>
			<!-- End Card-->

			<!-- Card -->
		  	<div class="card">
		    	<img class="card-img img-fluid" width="100%" src="{{ asset('img/contigo.jpg') }}" alt="Card image">
				<div class="card-block">
				 	<span class="card-title h4">Contigo Thermos</span>
					<p class="card-text"> $14.39CAD <small>+Shipping</small></p>
					<p class="card-text">Great Contigo thermos that's never been used. Keeps liquids hot for hours and doesn't leak!</p>
				</div>
		  	</div>
			<!-- End Card-->

			<!-- Card -->
		  	<div class="card p-3 text-right">
		    	<blockquote class="card-blockquote">
			      	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			      	<footer>
			        	<small class="text-muted">Someone famous in <cite title="Source Title">Source Title</cite></small>
			      	</footer>
		    	</blockquote>
		  	</div>
			<!-- End Card-->

		  	<!-- Card -->
		  	<div class="card">
				<div class="card-block">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<!-- End Card-->
		</div>
		<!-- End Card Columnds -->
	</div>
	<!-- End Row -->
</div>
<!-- End Container -->

<div>
    <!-- This is how to display data has been passed to the view (in App\Http\Controller\HomeController.php), look at /app/Product.php to look at data that's in product. Remove {{-- --}} to test and remove comment -->
    {{-- @foreach ($products as $product)
    <p>Product {{ $product->id }} - {{ $product->category->name }} - {{ $product->image}}</p>
    @endforeach --}}
</div>
@endsection
