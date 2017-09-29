@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
  <div class="row-fluid">
    <div class="container col-sm-8">
      <h2>Post an Ad</h2>
      <form action="{{ route('register') }}">
        <div class="form-group">
          <label for="sel1">What category does your product fall under:</label>
          <select class="form-control" id="category">
            <option>---</option>
            <option>Vehicles</option>
            <option>Pets</option>
            <option>Fashion</option>
            <option>Home Appliances</option>
            <option>Electronics</option>
            <option>Entertainment</option>
          </select>
        </div>
        <div class="form-group">
          <label for="item">Item you're selling:</label>
          <input type="text" class="form-control" id="item" placeholder="Product..." name="item">
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
