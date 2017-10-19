@extends('layouts.app')

@section('title', $category->name)

<!-- PAGE CONTENT CONTAINER -->
@section('content')

<div class="row-fluid pt-3">
	<!-- BREADCRUMB -->
	<ol class="breadcrumb">
		<!--@if (isset($category->parent))
			@if ((isset($category->parent->parent)))-->
				<li class="breadcrumb-item h3">
					<a href='/categories/{{ $category->parent->parent->id }}'>
						{{ $category->parent->parent->name }}
					</a>
				</li>
			<!--@endif-->
			<li class="breadcrumb-item h3">
		    	<a href='/categories/{{ $category->parent->id }}'>
		    		{{ $category->parent->name }}
		    	</a>
			</li>
	   <!-- @endif-->
		<li class="breadcrumb-item h3 active">
			{{ $category->name }}
		</li>
		<span class="h3">&nbsp;<span class="badge badge-default">{{ count($products) }} items</span></span>
	</ol>
	<!-- END BREADCRUMB -->
</div>
<!-- End Row -->

<!-- Row -->
<div class="row-fluid pt-2 pb-3">
	@foreach ($category->children as $category2ndTier)
		<!-- Button Group -->
		<div class="btn-group p-1">
			@if (count($category2ndTier->children) > 0)
				<a role="button" class="btn btn-secondary" href="/categories/{{ $category2ndTier->id }}">{{ $category2ndTier->name }}</a>
				<button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
				<div class="dropdown-menu">
				@foreach ($category2ndTier->children as $category3rdTier)
					<a class="dropdown-item" href="/categories/{{ $category3rdTier->id }}">{{ $category3rdTier->name }}</a>
				@endforeach
				</div>
			@else
				<a class="btn btn-secondary" role="button" href="/categories/{{ $category2ndTier->id }}">{{ $category2ndTier->name }}</a>
			@endif
		</div>
		<!-- End Button Group -->
	@endforeach
  	<div class="dropdown float-right pr-2" id="sortByDropdown">
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
<!-- End Row -->

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
				</footer>
			</div>
		</div>
		<!-- End Card -->
		@endforeach
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
<div>
    <!-- This is how to display data has been passed to the view (in App\Http\Controller\HomeController.php), look at /app/Product.php to look at data that's in product. Remove {{-- --}} to test and remove comment -->
    {{-- @foreach ($products as $product)
    <p>Product {{ $product->id }} - {{ $product->category->name }} - {{ $product->image}}</p>
    @endforeach --}}
</div>
@endsection
<!-- End Page Container ->
