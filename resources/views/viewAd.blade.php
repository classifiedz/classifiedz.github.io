@extends('layouts.app')

@section('content')

<div class="container py-5">
  <div class="row">
    <div class=" col-sm-6">
      <img class="img-fluid" src="{{ asset($product->image) }}" alt="Post Image">
    </div>
    <div class=" col-sm-6">
      <h2>{{ $product->title }}</h2>
      <small>Sold by <a href="#">User</a></small>
    </div>
  </div>
</div>

@endsection
