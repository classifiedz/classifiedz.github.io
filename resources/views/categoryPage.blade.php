@extends('layouts.app')

@section('title', $category->name)

@section('content')
<!-- PAGE CONTENT CONTAINER -->
<div class="container-fluid py-3">
	<!-- BREADCRUMB -->
	<div class="category_breadcrumb">
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

    <br/>
	<h3>Category: {{ $category->name }}</h3>
	<h2>Items found: {{ count($category->products) }}</h2>

	<!-- Row Fluid -->
	<div class="row-fluid">
		<!-- CARD COLUMNNS -->
		<div class="card-columns">
            @foreach ($products as $product)
            <!-- Card -->
            <div class="card mb-3">
                <img class="card-img-top img-fluid" width="100%" src="{{ asset($product->image) }}" alt="Card Image">
                <div class="card-block p-3">
                    <span class="card-title h4 text-justify">{{ $product->title }}</span>
                    <!-- <p class="card-text text-justify"> $ {{ $product->price }}</p> -->
                    <p class="card-text mb-1">{{ $product->description }}</p>
                    <footer class="text-right">
						<small class="text-muted">Posted: {{ date('F jS, Y', strtotime($product->created_at)) }}</small><br/>
						<span class="badge badge-success">$ {{ $product->price }}</span>
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
