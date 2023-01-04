@extends('store.layouts.master')
@section('title', '| Home')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
	<div class="container">
		<div class="page-title">
			<h2>{{$category->name}}</h2>
		</div>
		<div class="encouragepage-wrap">
			<div class="encouragepage-in">
				@if($galleries->count() > 0)
				<div class="enbox-carousel">
					<div class="enboxcarousel-in">
						<div id="enboxcarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#enboxcarousel" data-slide-to="0" class="active"></li>
								<li data-target="#enboxcarousel" data-slide-to="1"></li>
								<li data-target="#enboxcarousel" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								@foreach ($galleries as $key => $gallery)
								<div class="item {{($key == 0) ? 'active' : ''}}">
									<img class="img-responsive" src="{{ asset('/storage/badge-categories/galleries/'.$gallery) }}" alt="{{$category->name}}">
								</div>
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
				@endif
				<div class="enbox-wrap">
					@foreach ($category->badges->chunk(4) as $badge_arr)
					<div class="row enbox-row">
						@foreach ($badge_arr as $badge)
						<div class="enbox-col">
							<div class="enboxcol-wrap">
								<a href="{{route('home.badge.show',base64url_encode($badge->id))}}">
									<div class="enboxcol-in">
										<div class="enboxcol-relative">
											<div class="enboxcol-img">
												<img class="img-responsive" src="{{ asset('/storage/badges/'.$badge->image) }}" alt="{{$badge->name}}">
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
					@endforeach
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