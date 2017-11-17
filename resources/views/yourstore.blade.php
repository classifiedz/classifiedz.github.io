@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="row-fluid pt-3">
	<!-- BREADCRUMB -->
	<ol class="breadcrumb">
		<span class="h3">{{ $user->username }}'s Store&nbsp;<span class="badge badge-default">{{ count($user->products) }} items</span></span>
	</ol>
	<!-- items should be count of product-->
	<!-- END BREADCRUMB -->
</div>

<!--contact info here-->

<table class="table">
  <tbody>
    <tr>
      <th scope="row">	<span class="badge badge-primary" data-toggle="tooltip" data-placement="top" title="change contacts in profile">Contact Us</span></th>
      <td><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;{{ $user->email }}</td>
      <td><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;{{ $user->phoneNumber }}</td>
    </tr>
	<tr>
      <th scope="row">	
      	<span class="badge badge-primary" data-toggle="tooltip" data-placement="top" title="change contacts in profile">Rating</span>
      </th>
      <td>
      	<p class="same-line">
      		@if($liked) <b> @endif
      		{{ $likeCntr }}
      		@if($liked) </b> @endif
      	</p>
      	&nbsp;
      	<span class="same-line">
	      	<form  action="/store/rate" method="POST">
		       {{ csrf_field() }}
		        <input type="hidden" name="reviewee_id" value="{{ $user->id }}">
		        <input type="hidden" name="liked" value="1">
			  	<button id="likeBtn" class="likeBtn" dusk="likeBtn" type="submit">
			  		<i class="fa fa-thumbs-up fa-lg text-success"></i>
			  	</button>
		    </form>
		</span>
		&nbsp;&nbsp;
		<span class="same-line">
	      	<form  action="/store/rate" method="POST">
		       {{ csrf_field() }}
		        <input type="hidden" name="reviewee_id" value="{{ $user->id }}">
		        <input type="hidden" name="liked" value="0">
			  	<button id="dislikeBtn" class="dislikeBtn" dusk="dislikeBtn" type="submit">
			  		<i class="fa fa-thumbs-down fa-lg text-danger"></i>
			  	</button>
		    </form>
		</span>
      	&nbsp; 
      	<p class="same-line">
      		@if($disliked) <b> @endif
      		{{ $dislikeCntr }}
      		@if($disliked) </b> @endif
      	</p>
      </td>
	</tr>

  </tbody>
</table>

<div class="container-fluid py-3">
	<!-- Row Fluid -->
	<div class="row-fluid">
		<!-- CARD COLUMNNS -->
		<div class="card-columns">
            @foreach ($user->products as $product)
            <!-- Card -->
            <div class="card mb-3">
                <a href="/ads/{{ $product->id }}" ><img class="card-img-top img-fluid" width="100%" src="{{ asset($product->image) }}" alt="Post Image"></a>
                <div class="card-block p-3">
                    <a id="cardTitle" href="/ads/{{ $product->id }}"><span class="card-title h4 text-justify">{{ $product->title }}</span></a>
                    <p class="card-text mb-2">{{ $product->description }}</p>
					<footer class="text-right">
						<small class="text-muted">{{ date('M-jS', strtotime($product->created_at)) }}</small><br/>

						<div id="space">
						@if(Auth::check() && $user->id != Auth::user()->id)
						<form  action="/wishlist/create" method="POST">
			                {{ csrf_field() }}
			                <input type="hidden" name="product_id" value="{{ $product->id }}">
			                <button id="addWishlistBtn" type="submit" class="star">
	                         <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star-o" aria-hidden="true"></i>
                          </button>
		                </form>
		                @endif
		                @if(Auth::check() && $user->id == Auth::user()->id)
		                <button type="button" class="close" aria-label="Close" data-toggle="modal" data-target="#deleteAdModal" data-productid="{{ $product->id }}">
		                	<span aria-hidden="true">&times;</span>
		                </button>
		                @endif
						<div><small class="badge badge-pill badge-success">$ {{ $product->price }}</small></div> </div>
                    </footer>
                </div>
            </div>
            @endforeach
			<!-- End Card -->
		</div>
		<!-- END CARD COLUMNNS -->
	</div>
	<!-- End Row -->
</div>


<!-- Confirmation modal -->
@if(Auth::check() && $user->id == Auth::user()->id)
<div class="modal fade" id="deleteAdModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want delete this ad?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<span>
			<form  id="deleteAdForm" action="" method="POST">
	            {{ csrf_field() }}
	            <input type="hidden" name="_method" value="DELETE">
	            <button type="submit" class="btn btn-danger">Delete</button>
	        </form>
    	</span>
      </div>
    </div>
  </div>
</div>
@endif
<!-- End confirmation modal -->

@endsection
=======
@endsection

