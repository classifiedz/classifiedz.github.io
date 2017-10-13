@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
  <div class="row-fluid">
    <div class="container col-sm-8">
      <h2>{{ $product->title }}</h2>
    </div>
  </div>
</div>

@endsection
