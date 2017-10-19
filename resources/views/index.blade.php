@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- PAGE CONTENT CONTAINER -->
<div class="container clearfix">
	<div id="sortByDropdown" class="dropdown float-right">
	  <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Sort by
	  </a>

	  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
	    <a class="dropdown-item sortBy" id="newestFirst">Newest</a>
	    <a class="dropdown-item sortBy" id="oldestFirst">Oldest</a>
	    <a class="dropdown-item sortBy" id="cheapestFirst">Price Low to High</a>
	    <a class="dropdown-item sortBy" id="expensiveFirst">Price High to Low</a>
	    <a class="dropdown-item sortBy" id="popularFirst">Most Viewed</a>
	  </div>
	</div>
</div>

<div class="container-fluid py-3">
    @if(session('alert_msg'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      {!! session('alert_msg') !!}
    </div>
    @endif

	<div class="row-fluid clearfix pb-3">
		<div class="dropdown float-right" id="sortByDropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#!" id="dropdownMenuLink" data-toggle="dropdown">
    			Sort by
    		</a>
    		<div class="dropdown-menu dropdown-menu-right">
    			<a class="dropdown-item sortBy" id="newestFirst">Newest</a>
    			<a class="dropdown-item sortBy" id="oldestFirst">Oldest</a>
    			<a class="dropdown-item sortBy" id="cheapestFirst">Price Low to High</a>
    			<a class="dropdown-item sortBy" id="expensiveFirst">Price High to Low</a>
    			<a class="dropdown-item sortBy" id="popularFirst">Most Viewed</a>
    		</div>
		</div>
	</div>
	<!-- Row Fluid -->
	<div class="row-fluid">
		<!-- CARD COLUMNNS -->
		<div class="card-columns">
            @foreach ($products as $product)
            <!-- Card -->
            <div class="card mb-3">
                <a href="/ads/{{ $product->id }}" ><img class="card-img-top img-fluid" width="100%" src="{{ asset($product->image) }}" alt="Post Image"></a>
                <div class="card-block p-3">
                    <a id="cardTitle" href="/ads/{{ $product->id }}"><span class="card-title h4 text-justify">{{ $product->title }}</span></a>
                    <p class="card-text mb-2">{{ $product->description }}</p>
					<footer class="text-right">
						<small class="text-muted">{{ date('M-jS', strtotime($product->created_at)) }}</small><br/>
						<a href="/categories/{{$product->category->id}}"><small class="badge badge-pill badge-info">{{ $product->category->name}}</small></a>
						<small class="badge badge-pill badge-success">$ {{ $product->price }}</small>

						@if(Auth::check())
						<form  action="/wishlist/create" method="POST">
			                {{ csrf_field() }}
			                <input type="hidden" name="product_id" value="{{ $product->id }}">
			                <button id="addWishlistBtn" type="submit" class="badge badge-pill badge-success">Add to Wishlist</button>
		                </form>
		                @endif
                    </footer>
                </div>
            </div>
            @endforeach
			<!-- End Card -->
		</div>
		<!-- END CARD COLUMNNS -->
	</div>
	<!-- End Row -->

	<!-- Row Fluid -->
	<div class="row-fluid">
		<!-- PAGINATION -->
		<nav aria-label="Page navigation">
			<ul class="pagination justify-content-center">
				<!-- Previous -->
				<li class="page-item disabled">
					<a class="page-link" href="#">
						<span>&lsaquo;</span>
					</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">1</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">2</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">3</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">4</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">5</a>
				</li>
				<!-- Next -->
				<li class="page-item">
					<a class="page-link" href="#">&rsaquo;</a>
				</li>
				<!-- Next -->
			</ul>
		</nav>
		<!-- END PAGINATION -->
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
<!-- End Page Cointainer -->
