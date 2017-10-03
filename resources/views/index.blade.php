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
		<!-- CARD COLUMNNS -->
		<div class="card-columns">
            @foreach ($products as $product)
            <!-- Card -->
            <div class="card mb-3">
                <img class="card-img-top img-fluid" width="100%" src="{{ asset($product->image) }}" alt="Card Image">
                <div class="card-block">
                    <span class="card-title h4">{{ $product->title }}</span>
                    <p class="card-text"> $ {{ $product->price }}</p>
                    <p class="card-text">{{ $product->description }}</p>
                    <footer>
                        <small class="text-muted">Posted: {{ date('jS \of F Y', strtotime($product->created_at)) }}</small>
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
