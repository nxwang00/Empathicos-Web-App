@extends('store.layouts.master')
@section('title', '| Characters')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">

	<div class="container">
    	<div class="page-title">
     		<h2>My Characters</h2>
   		</div>
        
        <div class="encouragepage-wrap">
        	<div class="encouragepage-in">
            	{{--
            	<div class="enbox-carousel">
                	<div class="enboxcarousel-in">
                        <div id="enboxcarousel" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                          	@foreach($badges as $key => $badge)
								@if($key != 0)
				                   <li data-target="#enboxcarousel" data-slide-to="{{$key}}"></li>
				                @else
                            		<li data-target="#enboxcarousel" data-slide-to="0" class="active"></li>
								@endif
							@endforeach
                          </ol>
                          <div class="carousel-inner" role="listbox">
							@foreach($badges as $key => $badge)
								@if($key != 0)
				                <div class="item">
				                    <a href="{{route('badges.show',base64url_encode($badge->id))}}"><img class="img-responsive" alt="{{$badge->name}}" src="{{ asset('/storage/badges/'.$badge->image) }}"></a>
				                </div>
				                @else
				                <div class="item active">
				                    <a href="{{route('badges.show',base64url_encode($badge->id))}}"><img class="img-responsive" alt="{{$badge->name}}" src="{{ asset('/storage/badges/'.$badge->image) }}"></a>
				                </div>
								@endif
							@endforeach
                          </div>
                        
                          <!-- Controls -->
                          <a class="left carousel-control" href="#enboxcarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          </a>
                          <a class="right carousel-control" href="#enboxcarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          </a>
                        </div>
                    </div>
        		</div>
            		--}}
                
            	<div class="enbox-wrap" style="padding-top: 65px;">
                	<div class="row enbox-row">
                       @foreach($badges as $key => $badge)
                        <div class="enbox-col">
                        	<div class="enboxcol-wrap">
                            	<a href="{{route('badges.show',base64url_encode($badge->id))}}">
                                	<div class="enboxcol-in">
                                    	<div class="enboxcol-relative">
                                            <div class="enboxcol-img">
                                                <img class="img-responsive"  alt="{{$badge->name}}" src="{{ asset('/storage/badges/'.$badge->journey_image) }}">
                                            </div>
                                            <div class="enboxcol-title">
                                                <h2>{{$badge->name}}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
        					</div>
        				</div>
						@endforeach

                    </div>
        		</div>
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