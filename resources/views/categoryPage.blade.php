@extends('layouts.app')

@section('title', $category->name)

@section('content')

<div>
	<br/>
	<h2 class="text-center">Category: {{ $category->name }}</h3>
	<h3 class="text-center">Items found: {{ count($products) }}</h2>
</div>

<div class="container clearfix">
		<!-- BREADCRUMB -->
	<div class="category_breadcrumb float-left">
		@if (isset($category->parent))
			@if ((isset($category->parent->parent)))
				<a href='/categories/{{ $category->parent->parent->id }}'>
					{{ $category->parent->parent->name }}
				</a>
				<i class="fa fa-caret-right"></i>
			@endif
	    	<a href='/categories/{{ $category->parent->id }}'>
	    		{{ $category->parent->name }}
	    	</a>
	    	<i class="fa fa-caret-right"></i>
	    @endif
    	<span>{{ $category->name }}</span>
	</div>
	<!-- END BREADCRUMB -->

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

<!-- PAGE CONTENT CONTAINER -->
<div class="container-fluid py-3">
	<!-- Row Fluid -->
	<div class="row-fluid">
		<!-- CARD COLUMNNS -->
		<div class="card-columns">
            @foreach ($products as $product)
            <!-- Card -->
            <div class="card mb-3">
                <img class="card-img-top img-fluid" width="100%" src="{{ asset($product->image) }}" alt="Post Image">
                <div class="card-block p-3">
                    <span class="card-title h4 text-justify">{{ $product->title }}</span>
                    <p class="card-text mb-2">{{ $product->description }}</p>
                    <footer class="text-right">
						<small class="badge badge-pill badge-warning">{{ $product->category->name}}</small><br/>
						<small class="badge badge-pill badge-info">{{ date('M-jS', strtotime($product->created_at)) }}</small>
						<small class="badge badge-pill badge-success">$ {{ $product->price }}</small>
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
