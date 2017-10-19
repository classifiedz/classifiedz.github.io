@extends('layouts.app')

@section('title', 'Home')

<!-- PAGE CONTENT CONTAINER -->
@section('content')
    <!-- Row -->
    <div class="row-fluid pt-3">
    	<!-- BREADCRUMB -->
    	<ol class="breadcrumb">
			<li class="breadcrumb-item h3">{{$searchWord}}</li>
    		<span class="h3">&nbsp;<span class="badge badge-default">{{ count($products) }} items</span></span>
    	</ol>
    	<!-- END BREADCRUMB -->
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
@endsection
<!-- End Page Cointainer -->
