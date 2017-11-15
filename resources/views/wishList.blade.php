@extends('layouts.app')

@section('title', 'WishList')

@section('content')

<div class="row px-5 pt-4">
	<table class="table table-striped">
		<tbody>
			<h3>{{ Auth::user()->name }}'s Wish List</h3>
			<tr class="table-info">
				<td><b>Category</b></td>
				<td><b>Details</b></td>
				<td><b>Actions</b></td>
			</tr>   
			@foreach(Auth::user()->wishlist as $item)
			<tr>
				<td>{{ $item->product->category->name }}</td>
				<td><a href="/ads/{{ $item->product->id }}">{{ $item->product->title }}</a></td>
				<td>
					<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteWishlistItemModal" data-wishlistid="{{ $item->id }}">Delete</button>
				</td>
			</tr>
			@endforeach
		</tbody>
		<table class="table table-user-information">
	</table>
</div>

<!-- Confirmation modal -->
<div class="modal fade" id="deleteWishlistItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to remove this item from your wishlist?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    	<span>
			<form  id="deleteWishlistItemForm" action="" method="POST">
	            {{ csrf_field() }}
	            <input type="hidden" name="_method" value="DELETE">
	            <button type="submit" class="btn btn-danger">Delete</button>
	        </form>
		</span>
      </div>
    </div>
  </div>
</div>
<!-- End confirmation modal -->

@endsection