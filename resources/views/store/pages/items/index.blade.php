@extends('store.layouts.master')
@section('title', '| Items')
@section('page-css-link')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
    <div class="container">
        <div class="cartpage-wrap">
            <div class="page-title">
                <h2>Cart</h2>
            </div>
            @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            @endif
            @if(session()->has('alert_msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('alert_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            @endif
            @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            @endforeach
            @endif
            @if(count($items) > 0)
            <div class="cartpage">
                <div class="cartpage-in">
                    <div class="cartp-table">
                        <div class="cartp-row cartp-head">
                            <div class="cartp-col cartpcol-first">
                                <span>Product</span>
                            </div>
                            <div class="cartp-col cartpcol-second">
                                <span>Price</span>
                            </div>
                            <div class="cartp-col cartpcol-third">
                                <span>Quantity</span>
                            </div>
                            <div class="cartp-col cartpcol-fourth">
                                <span>Subtotal</span>
                            </div>
                            <div class="cartp-col cartpcol-last">
                            </div>
                        </div>
                        @foreach($items as $item)
                        <div class="cartp-row cartp-body">
                            <div class="cartp-col cartpcol-first">
                                <div class="cartpcol-img">
                                    <div class="cartpcolimg">
                                        <div class="cartpcolimg-in">
                                            <img src="{{$item->attributes->image}}" alt="" />
                                        </div>
                                        <div class="cartpcimgframe-top"></div>
                                        <div class="cartpcimgframe-btm"></div>
                                    </div>
                                </div>
                                <div class="cartpcol-text">
                                    <h2>{{ $item->name }}</h2>
                                    @php
                                    $product    = App\Product::with('reviews')->find($item->id);
                                    $reviews = $product->reviews()->get();
                                    @endphp
                                    <div class="sproduct-rating">
                                        <div class="sproductrat-rating">
                                            {!!get_rating(round($product->getAveragereviews()))!!}
                                        </div>
                                        <div class="sproductrat-review">
                                            <p>({{$reviews->count()}} Reviews)</p>
                                        </div>
                                    </div>
                                    <div class="cartpcoltext-qty">
                                        <span>QTY</span>
                                        <div class="cct-qty">
                                            <form action="{{ route('items.update') }}" id="update-qty-item-form-{{$item->id}}" method="POST">
                                                {{ csrf_field() }}
                                                <div class="form-group row">
                                                    <input type="hidden" value="{{$item->id}}" id="id" name="id">
                                                    <input type="number" min="1" onchange="event.preventDefault(); document.getElementById('update-qty-item-form-{{$item->id}}').submit();" value="{{$item->quantity}}" id="quantity" name="quantity" >
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cartp-col cartpcol-second">
                                <span>${{ number_format($item->price,2) }}</span>
                            </div>
                            <div class="cartp-col cartpcol-third">
                                <span>
                                    {{ $item->quantity }}
                                </span>
                            </div>
                            <div class="cartp-col cartpcol-fourth">
                                <span>${{ number_format(Cart::get($item->id)->getPriceSum(),2)}}</span>
                            </div>
                            <div class="cartp-col cartpcol-last">
                                <div class="cartpcol-remove" onclick="event.preventDefault(); document.getElementById('remove-item-form-{{$item->id}}').submit();">
                                    <i ></i>
                                </div>
                                <form action="{{ route('items.remove') }}" id="remove-item-form-{{$item->id}}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                </form>
                            </div>
                        </div>
                        @endforeach
                        @if(count($items)>0)
                        <div class="cartp-row cartp-btm">
                            <div class="cartp-col cartpcol-first">
                                <span>Total</span>
                            </div>
                            <div class="cartp-col cartpcol-second">
                                <span>${{ number_format(Cart::getTotal(),2) }}</span>
                            </div>
                            <div class="cartp-col cartpcol-last">
                                <div class="cartpbtm-btn">
                                    <a href="{{ route('payments.index')}}">Checkout</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
                @if($products->count() > 0)
                <div class="product-wrap relatedproduct-wrap">
                    <div class="relatedproduct-title">
                        <h2>You may be interested in…</h2>
                    </div>
                    <div class="product-wrap">
                        <div class="row product-row">
                            @foreach($products as $key => $product)
                            @php
                            $reviews = $product->reviews()->get();
                            @endphp
                            <div class="col-md-6 col-sm-6 col-xs-12 product-col">
                                <div class="productcol-in">
                                    <div class="productcol-img">
                                        <a href="{{ route('product.show',['id' => base64url_encode($product->id)]) }}">
                                            <img src="{{asset('storage/products/images/'.$product->image)}}" alt="product" />
                                        </a>
                                    </div>
                                    <div class="productcol-text">
                                        <div class="productcol-title">
                                            <h2><a href="{{ route('product.show',['id' => base64url_encode($product->id)]) }}">{{Str::words($product->name, '10') }}</a></h2>
                                        </div>
                                        <div class="productcol-reviews">
                                            <div class="pcol-rating">
                                                {!!get_rating(round($product->getAveragereviews()))!!}
                                            </div>
                                            <div class="pcol-reviews">
                                                <span>({{$reviews->count()}} Reviews)</span>
                                            </div>
                                        </div>
                                        <div class="productcol-price">
                                            <span>${{$product->price}}</span>
                                        </div>
                                        <div class="productcol-btn">
                                            <form action="{{ route('items.add') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                                <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                                                <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                                                <input type="hidden" value="{{ asset('storage/products/images/'.$product->image) }}" id="image" name="image">
                                                <input type="hidden" value="1" id="quantity" name="quantity">
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                                        <i class="fa fa-shopping-cart"></i> Add to Cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            @else
            <div class="cartpage">
                <div class="cartpage-in">
                    <div class="cartp-table">
                        <div class="cartp-row cartp-head">
                            <div class="cartp-col cartpcol-first">
                                <span>Product</span>
                            </div>
                            <div class="cartp-col cartpcol-second">
                                <span>Price</span>
                            </div>
                            <div class="cartp-col cartpcol-third">
                                <span>Quantity</span>
                            </div>
                            <div class="cartp-col cartpcol-fourth">
                                <span>Subtotal</span>
                            </div>
                            <div class="cartp-col cartpcol-last">
                            </div>
                        </div>
                        <div class="cartp-row cartp-body"  style="margin-bottom: 50px;">
                            <div class="cartp-col" style="width: calc(100% - 0px);">
                                <div class="cartpcol-text text-center">
                                    <h2>Card Is Empty</h2>
                                </div>
                            </div>
                            <div class="cartp-col" style="width: calc(100% - 0px);">
                                <div class="cartpcol-text text-center">
                                    <div class="cartpbtm-btn">
                                        <a href="{{ route('product')}}">Buy Product</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- Page Container -->
@endsection
@section('page-js-link')
@endsection
@section('page-js')
@endsection