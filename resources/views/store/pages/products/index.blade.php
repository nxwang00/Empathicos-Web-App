@extends('store.layouts.master')
@section('title', '| Product')
@section('page-css-link')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('page-css') 
<style type="text/css">
.checked {
color: orange;
}
</style>
@endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
<div class="container">
    <div class="page-title">
        <h1>Product</h1>
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
</div>
<!-- Page Container -->
@endsection
@section('page-js-link')
@endsection
@section('page-js')
@endsection