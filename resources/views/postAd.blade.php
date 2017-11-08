@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
  <div class="row-fluid">
    <div class="container col-sm-8">
      <h2>Post an Ad</h2>
      <form method="POST"  enctype="multipart/form-data" action="{{ route('storeAd') }}">
        {{ csrf_field() }}

        <!-- Category Input -->
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

        <!-- Title Input -->
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
          <label for="title">Item you're selling:</label>
          <input type="text" class="form-control" id="title" placeholder="Product..." name="title" value="{{ old('title') }}">
          @if ($errors->has('title'))
          <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
          </span>
          @endif
        </div>

        <!-- Description Input -->
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
          <label for="description">Description:</label>
          <textarea class="form-control" rows="5" name="description" id="description" placeholder="Describe what you're selling... ">{{ old('description') }}</textarea>

          @if ($errors->has('description'))
          <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
          </span>
          @endif
        </div>

        <!-- Price Input -->
        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
          <label for="price">How much are you selling this item for?</label>
          <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">

          @if ($errors->has('price'))
          <span class="help-block">
            <strong>{{ $errors->first('price') }}</strong>
          </span>
          @endif
        </div>

        <!-- Upload IMG -->
        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
          <label for="image">Upload an image of your product:</label>
          </br>
          <input id="image" name="image" type="file" value="{{ old('image') }}">

           @if ($errors->has('image'))
           <span class="help-block">
             <strong>{{ $errors->first('image') }}</strong>
           </span>
           @endif
         </div>

         <!-- Show Chat -->
         <div class="form-group{{ $errors->has('show_chat') ? ' has-error' : '' }}">
            <label class="form-check-label">
              <input name="show_chat" id="show_chat" type="checkbox" class="form-check-input" value="1" {{ old('show_chat') !== null ? 'checked' : '' }}>
              Enable Chat On Your Ad?
            </label>
            @if ($errors->has('show_chat'))
               <span class="help-block">
                 <strong>{{ $errors->first('show_chat') }}</strong>
               </span>
            @endif
         </div>

        <!-- Space Inbetween form and Buttons -->
        </br></br>

         <!-- Privacy Agreement -->
         <div class="form-group{{ $errors->has('terms') ? ' has-error' : '' }}">
            <label>
              <input type="checkbox" name="terms"> <small>I have read and agree to the <a href="#">Terms and Conditions</a></small>
            </label>
            @if ($errors->has('terms'))
             <span class="help-block">
               <strong>{{ $errors->first('terms') }}</strong>
             </span>
            @endif
          </div>

         <!-- Submit / Cancel -->
         <button type="submit" class="btn btn-success"> Post Ad</button>
         <button type="button" class="btn btn-danger">Cancel</button>
       </form>
    </div>
  </div>
</div>

@endsection
