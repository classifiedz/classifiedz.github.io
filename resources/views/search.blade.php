@extends('layouts.app')

@section('title', 'Search')

<!-- Whoever has to edit work on this code... im sorry -->
<!-- PAGE CONTENT CONTAINER -->
@section('content')
    <!-- Row -->
    <div class="row-fluid pt-3">

      <!-- BREADCRUMB -->
   	<ol class="breadcrumb">
         <li class="breadcrumb-item h3">
            <a href='/search/{{$searchWord}}'>
               {{$searchWord}}
            </a>
         </li>
         @if(isset($category->parent->parent->name))
            <li class="breadcrumb-item h3">
   				<a href='{{ $category->parent->parent->id }}'>
   					{{ $category->parent->parent->name }}
   				</a>
   			</li>
         @endif
         @if(isset($category->parent->name))
   			<li class="breadcrumb-item h3">
   		    	<a href='{{ $category->parent->id }}'>
   		    		{{ $category->parent->name }}
   		    	</a>
   			</li>
         @endif
         @if(isset($category->name))
      		<li class="breadcrumb-item h3 active">
      			{{ $category->name }}
      		</li>
         @endif
         @if(isset($category))
            <?php $count = 0 ?>
            @foreach ($products as $product)
               @if ( ($product->category->name == $category->name) || ($product->category->parent->name==$category->name) || (isset($product->category->parent->parent) && $product->category->parent->parent->name==$category->name) )
                  <?php $count++; ?>
               @endif
            @endforeach
            <span class="h3">&nbsp;<span class="badge badge-default">{{$count}} items</span></span>
         @else
            <span class="h3">&nbsp;<span class="badge badge-default">{{ count($products) }} items</span></span>
         @endif
   	</ol>
   	<!-- END BREADCRUMB -->
   </div>
   <!-- End Row -->

   <!-- Row Category Search-->
   <div class="row-fluid pt-3">
      <?php $categoriesFound = array(); ?>
      @if( !isset($category) )
         <!-- Category Buttons -->
         <span style="font-size:1.4em;">Refine your search:</span>
         @foreach ($products as $product)
            @if(!in_array($product->category->name,$categoriesFound))
               <a role="button" class="btn btn-secondary" href="{{$searchWord}}/{{$product->category->id}}">{{ $product->category->name }}</a>
            @endif
            <?php array_push($categoriesFound,$product->category->name);?>
         @endforeach
      @elseif( isset($category) )
         <!-- Category Buttons -->
         <span style="font-size:1.4em;">Refine your search:</span>
         @foreach ($products as $product)
            @if( $product->category->parent->name == $category->name )
               @if(!in_array($product->category->name,$categoriesFound))
                  <a role="button" class="btn btn-secondary" href="{{$product->category->id}}">{{$product->category->name}}</a>
               @endif
               <?php array_push($categoriesFound,$product->category->name);?>
            @endif
         @endforeach
      @endif
    </div>
    <!-- End Row Category Search-->

    <!-- Row -->
	<div class="row cards"><!-- row-fluid -->
      @foreach ($products as $product)
		   <!-- CARD COLUMNNS -->
         <div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 p-2">
            @if( isset($category) && ( ($product->category->name == $category->name) || (isset($product->category->parent) && $product->category->parent->name == $category->name) || (isset($product->category->parent->parent) && $product->category->parent->parent->name == $category->name) ) )
               <!-- Card -->
               <div class="card">
                  <a href="/ads/{{ $product->id }}" ><img class="card-img-top img-fluid" width="100%" src="{{ asset($product->image) }}" alt="Post Image"></a>
                  <div class="card-block p-3">
                     <a id="cardTitle" href="/ads/{{ $product->id }}"><span class="card-title h4 text-justify">{{ $product->title }}</span></a>
                     <p class="card-text mb-2">{{ $product->description }}</p>
                     <footer class="text-right">
                        <small class="text-muted">{{ date('M-jS', strtotime($product->created_at)) }}</small><br/>
                        <a href="{{$product->category->id}}"><small class="badge badge-pill badge-info">{{ $product->category->name}}</small></a>
                        <small class="badge badge-pill badge-success">$ {{ $product->price }}</small>
                     </footer>
                  </div>
               </div>
               <!-- End Card -->
            @endif
            @if(!isset($category))
               <!-- Card -->
               <div class="card">
                  <a href="/ads/{{ $product->id }}" ><img class="card-img-top img-fluid" width="100%" src="{{ asset($product->image) }}" alt="Post Image"></a>
                  <div class="card-block p-3">
                     <a id="cardTitle" href="/ads/{{ $product->id }}"><span class="card-title h4 text-justify">{{ $product->title }}</span></a>
                     <p class="card-text mb-2">{{ $product->description }}</p>
                     <footer class="text-right">
               			<small class="text-muted">{{ date('M-jS', strtotime($product->created_at)) }}</small><br/>
            				<!-- Space -->
            				<span class="pull-left">
      	 						@if(Auth::check())
         					   	<form  action="/wishlist/create" method="POST">
	                              {{ csrf_field() }}
         				         	<input type="hidden" name="product_id" value="{{ $product->id }}">
         					        	<button id="addWishlistBtn" type="submit" class="star">
         			                  <i class="fa fa-star"></i>
         			              	   <i class="fa fa-star-o"></i>
         			            	</button>
         			         	</form>
				               @endif
      						</span>
           					<!-- End Space -->
      						<span class="pull-right">
      							<small class="badge badge-pill badge-success">$ {{ $product->price }}</small>
      						</span>
      					</footer>
                  </div>
               </div>
               <!-- End Card -->
            @endif
         </div>
         <!-- END CARD COLUMNNS -->
 		@endforeach
   </div>
   <!-- End Row -->
@endsection
<!-- End Page Cointainer -->
