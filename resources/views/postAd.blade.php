@extends('layouts.app')
@section('title', 'Post Ad')
@section('content')

<div class="container-fluid py-5">
  <div class="row-fluid">
    <div class="container col-sm-8">
      <h2>Post an Ad</h2>
      <form method="POST"  enctype="multipart/form-data" action="{{ route('storeAd') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
          <label for="category_id">What category does your product fall under:</label>
          <select class="form-control" id="category_id" name="category_id">
            @foreach ($categories as $category)
            <option value="{{$category->id}}"> {{ $category->name }}</option>
              @foreach ($category->children as $categoryTier2)
              <option value="{{$categoryTier2->id}}">&emsp;{{ $categoryTier2->name }}</option>
                @foreach ($categoryTier2->children as $categoryTier3)
                <option value="{{$categoryTier3->id}}">&emsp;&emsp;{{ $categoryTier3->name }}</option>
                @endforeach
              @endforeach
            @endforeach
          </select>

          @if ($errors->has('category_id'))
          <span class="help-block">
            <strong>{{ $errors->first('category_id') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
          <label for="title">Item you're selling:</label>
          <input type="text" class="form-control" id="title" placeholder="Product..." name="title">
          @if ($errors->has('title'))
          <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
          <label for="description">Description:</label>
          <textarea class="form-control" rows="5" name="description" id="description" placeholder="Describe what you're selling... "></textarea>
          
          @if ($errors->has('description'))
          <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
          <label for="price">How much are you selling this item for?</label>
          <input type="text" class="form-control" id="price" name="price">

          @if ($errors->has('price'))
          <span class="help-block">
            <strong>{{ $errors->first('price') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
          <label for="image">Upload an image of your product:</label>
          </br>
          <input id="image" name="image" type="file">

        @if ($errors->has('image'))
        <span class="help-block">
          <strong>{{ $errors->first('image') }}</strong>
        </span>
        @endif
      </div>
      <!-- <div class="form-group">
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
      </div> -->
    </br></br>
    <div class="checkbox">
      <label><input type="checkbox" name="agree"> <small>I have read and agree to the <a href="#">Terms and Conditions</a></small></label>
    </div>
    <button type="submit" class="btn btn-success"> Post Ad</button>
    <button type="button" class="btn btn-danger">Cancel</button>
  </form>
</div>
</div>
</div>

@endsection
