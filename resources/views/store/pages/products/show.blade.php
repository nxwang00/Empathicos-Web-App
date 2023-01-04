@extends('store.layouts.master')
@section('title', '| Product')
@section('page-css-link')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
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
        @php
        $reviews = $product->reviews()->get();
        @endphp
        <div class="sproduct-wrap">
            <div class="sproduct-summery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="sproduct-img">
                                <div class="sproductimg-wrap">
                                    <div class="sproductimg-in">
                                        <a href="{{asset('storage/products/images/'.$product->image)}}" data-lightbox="photos"> <img class="img-responsive" src="{{asset('storage/products/images/'.$product->image)}}" alt="" /> </a>
                                    </div>
                                    <div class="sproframe-top"></div>
                                    <div class="sproframe-btm"></div>
                                </div>
                            </div>
                            <div class="sproductimg-gallery">
                                <ul>
                                    @foreach ($galleries as $gallery)
                                    <li>
                                        <a href="{{ asset('/storage/products/galleries/'.$gallery) }}" data-lightbox="photos"><img class="img-responsive"  src="{{ asset('/storage/products/galleries/'.$gallery) }}"></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="sproduct-detail">
                                <div class="sproduct-title">
                                    <h2>{{$product->name}} </h2>
                                </div>
                                <div class="sproduct-rating">
                                    <div class="sproductrat-rating">
                                        {!!get_rating(round($product->getAveragereviews()))!!}
                                    </div>
                                    <div class="sproductrat-review">
                                        <p>({{$reviews->count()}} Reviews)</p>
                                    </div>
                                </div>
                                <div class="sproduct-price">
                                    <p>${{$product->price}}</p>
                                </div>
                                <div class="sproduct-text">
                                    <p>{!!htmlspecialchars_decode($product->description)!!}</p>
                                </div>
                                <div class="sproduct-addtocart">
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
                                <div class="sproduct-cat">
                                    <p><strong>Categories:</strong>
                                        @foreach($categories as $key => $category)
                                        <a href="#{{$category->name}}">{{$category->name}}</a>,
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sproduct-review">
                @if($reviews->count() > 0 )
                <div class="sproductreview-title">
                    <h2>Reviews</h2>
                </div>
                @foreach($reviews as $key => $review)
                <div class="sproductreview-col">
                    <div class="sproductreviewcol-in">
                        <div class="sproductreviewcol-title">
                            <div class="sproductreview-name">
                                <h4>{{$review->name}}</h4>
                                <span>- {{$review->created_at}}</span>
                            </div>
                            <div class="sproductreview-star">
                                {!!get_rating($review->rating)!!}
                            </div>
                        </div>
                        <p>{{$review->review}}</p>
                    </div>
                </div>
                @endforeach
                @endif
                <div class="sproductreview-addreview">
                    <button>Add a review</button>
                </div>
                @auth
                <p>Your email address will not be published. Required fields are marked *</p>
                <div class="sproductreview-form">
                    <div class="sproductreviewform-title">
                        <h3>Your Rating</h3>
                        <div class="sproductreviewform-rating">
                            <span class="fa fa-star" id="star1" onclick="rating(this,1)"></span>
                            <span class="fa fa-star" id="star2" onclick="rating(this,2)"></span>
                            <span class="fa fa-star" id="star3" onclick="rating(this,3)"></span>
                            <span class="fa fa-star" id="star4" onclick="rating(this,4)"></span>
                            <span class="fa fa-star" id="star5" onclick="rating(this,5)"></span>
                        </div>
                    </div>
                    <form method="post"  class="review-user" id="review-user" action="{{ route('review.send')}}">
                        @csrf
                        <div class="sproductreviewform">
                            <div class="form-group">
                                <label>Your Review</label>
                                {{ Form::textarea('review',old('review'), array('class' => error_field($errors,'review'),'placeholder'=>'','rows'=>'3')) }}
                                {!!error_msg($errors,'review')!!}
                                <input type="hidden" name="product" value="{{$product->id}}">
                                <input type="hidden" name="rating" id="rating" value="0">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                {{ Form::text('name', old('name',auth()->user()->name), array('class' => error_field($errors,'name'),'placeholder'=>'')) }}
                                {!!error_msg($errors,'name')!!}
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                {{ Form::text('email', old('email',auth()->user()->email), array('class' => error_field($errors,'email'),'placeholder'=>'')) }}
                                {!!error_msg($errors,'email')!!}
                            </div>
                            {{--
                                <div class="form-group">
                                    <div class="checkbox-wrap">
                                        <div class="checkbox">
                                            <input type="checkbox">
                                            <label> Save my name, email, and website in this browser for the next time I comment.</label>
                                        </div>
                                    </div>
                                </div>
                                --}}
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </form>
                    </div>
                    @else
                    <p>You must signin before write review. <a href="{{ route('signin') }}">Sign In </a> </p>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    <!-- Page Container -->
    @endsection
    @section('page-js-link')
    <script src="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    @endsection
    @section('page-js')
    <script type="text/javascript">
        function rating(ths,sno){
            for (var i=1;i<=5;i++){
                var cur=document.getElementById("star"+i)
                cur.className="fa fa-star"
            }
            for (var i=1;i<=sno;i++){
                var cur=document.getElementById("star"+i)
                if(cur.className=="fa fa-star")
                {
                    cur.className="fa fa-star checked"
                }
            }
            $('input#rating').val(sno);
        }
    </script>
    @endsection