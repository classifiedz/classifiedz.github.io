@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row">
        <div class=" col-sm-6">
            <img class="img-fluid" width="100%" src="{{ asset($product->image) }}" alt="Post Image">
            <p><small>This ad was posted on {{ date('F jS', strtotime($product->created_at)) }} </small></p>
        </div>
        <div class=" col-sm-6">
            <h2>{{ $product->title }}</h2>
            <small>Sold by <a href="#">{{ $product->user->username}}</a></small>
          </br></br>
            <h3>$ {{ $product->price}}</h3>
          </br>
            <h5>Description: </h5>
            <p>{{ $product->description}}</p>
            <p><small>Interested? Contact them <a href="#">now</a>!</small></p>

        </div>
    </div>
</div>

@endsection
