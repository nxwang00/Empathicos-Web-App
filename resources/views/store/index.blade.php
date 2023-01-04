@extends('store.layouts.master')
@section('title', '| Home')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
	<div class="container">
		<div class="homepage-wrap">
			<div class="homepageitem-in">
				@foreach ($categories->chunk(4) as $category_arr)
				<div class="row homepageitem-row">
					@foreach ($category_arr as $category)
					<div class="col-md-3 col-sm-3 col-xs-6 homepageitem-col">
						<div class="homepageitemcol-in">
							<div class="homepage-item homepage-item1">
								<a href="{{ route('home.category',['id' => base64url_encode($category->id),'template' => 'first']) }}">
									<div class="homepageitem-img">
										<img src="{{asset('storage/badge-categories/images/'.$category->image)}}" alt="" />
									</div>
								</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				@endforeach
			</div>
		</div>
        
        <div class="doorimg-wrap">
        	<div class="doorimg-in">
            	<div class="doorimg">
                	<img class="img-responsive" src="{{ asset('assets/store/images/heaven-door.png') }}" alt="logo">
                  	<div class="btntheme-wrap" style="position: relative;margin-top: 35px;bottom: 150px;">
		                <a href="{{ route('badges')}}" style="background: #894a83c7;border-color: #f7b757;color: #f7b757;font-size: larger;font-weight: bolder;" class="btn btn-default btn-lg btn-theme2">Enter</a>
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