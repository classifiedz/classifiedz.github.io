@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row">
        <div class=" col-sm-6">
            <img class="img-fluid" src="{{ asset($product->image) }}" alt="Post Image">
            <small>This ad was posted on {{ date('F jS', strtotime($product->created_at)) }} </small>
        </div>
        <div class=" col-sm-6">
            <h2>{{ $product->title }}</h2>
          </br></br>
            <h3>$ {{ $product->price}}</h3>
          </br>
            <h5>Description: </h5>
            <p>{{ $product->description}}</p>
        </div>
    </div>
</div>

@endsection
