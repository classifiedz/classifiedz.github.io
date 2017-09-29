@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
  <div class="row-fluid">
    <div class="container col-sm-8">
      <h2>Post an Ad</h2>
      <form action="{{ route('postAd') }}">
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
        <div class="form-group">
          <label for="comment">Description:</label>
          <textarea class="form-control" rows="5" id="description" placeholder="Describe what you're selling... "></textarea>
        </div>
        <div class="form-group">
          <label for="image">Upload an image of your product:</label>
          </br>
          <button type="button" class="btn btn-primary">Upload</button>
        </div>
        <div class="form-group">
          <label for="contact">How would you prefer to be contacted?</label>
          <div class="radio">
            <label class="px-4"><input type="radio" name="contact" value="call"> Call</label>
          </div>
          <div class="radio">
            <label class="px-4"><input type="radio" name="contact" value="text"> Text</label>
          </div>
          <div class="radio">
            <label class="px-4"><input type="radio" name="contact" value="email"> Email</label>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
