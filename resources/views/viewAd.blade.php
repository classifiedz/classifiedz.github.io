@extends('layouts.app')

@section('title', $product->title)

@section('content')

    <div class="container py-5">
        <!-- BREADCRUMB -->
        <ol class="breadcrumb">
        <!--@if (isset($product->category->parent))
            @if ((isset($product->category->parent->parent)))-->
                <li class="breadcrumb-item h4">
                    <a href='/categories/{{ $product->category->parent->parent->id }}'>
                        {{ $product->category->parent->parent->name }}
                    </a>
                </li>
                <!--@endif-->
                <li class="breadcrumb-item h4">
                    <a href='/categories/{{ $product->category->parent->id }}'>
                        {{ $product->category->parent->name }}
                    </a>
                </li>
                <!-- @endif-->
                <li class="breadcrumb-item h4 active">
                    <a href='/categories/{{ $product->category->id }}'>
                        {{ $product->category->name }}
                    </a>
                </li>
        </ol>
        <!-- END BREADCRUMB -->

        <div class="row">
            <div class=" col-sm-6">
                <img class="img-fluid" width="100%" src="{{ asset($product->image) }}" alt="Post Image">
                <p><small>This ad was posted on {{ date('F jS', strtotime($product->created_at)) }} </small></p>
            </div>
            <div class=" col-sm-6">

                <h2>{{ $product->title }}</h2>
                <small>Sold by <a href="/store/{{ $product->user->username }}">{{ $product->user->username}}</a></small>
                </br></br>
                <h3>$ {{ $product->price}}</h3>
                </br>
                <h5>Description: </h5>
                <p>{{ $product->description}}</p>
                <p><small>Interested? Contact them <a href="/store/{{ $product->user->username }}">now</a>!</small></p>
                @if(count($product->wishlist) == 1)
                    <p>{{ count($product->wishlist) }} person is currently interested!</p>
                @elseif(count($product->wishlist) > 1)
                    <p>{{ count($product->wishlist) }} people are currently interested!</p>
                @endif

                @if(Auth::check())
                    <form  action="/wishlist/create" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button id="addWishlistBtn" type="submit" class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </button>
                    </form>
                @endif
            </div>
        </div>
        @if($product->show_chat==true)
            <div class="row-fluid">
                <div id="disqus_thread"></div>
                <script>

                    /**
                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

                    var disqus_config = function () {
                        this.page.url = 'http://classifiedz.xyz/ads/{{ $product->id }}';
                        this.page.identifier = '{{ $product->id }}';
                    };

                    (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://classifiedz-xyz.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            </div>
        @endif
    </div>

@endsection
