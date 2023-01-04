@extends('store.layouts.master')
@section('title', '| Favorites')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
	<div class="container">
		<div class="page-title">
			<h1>Favorites</h1>
		</div>
		<div class="favoritepage-wrap">
		
            @foreach($badges as $key => $badge)
			<div class="favoritep-box">
				<div class="row favoritep-row">
					<div class="favoritepimg-col">
						<div class="favoritepimgcol-in">
							<a href="{{route('badges.show',base64url_encode($badge->id))}}">
								<img class="img-responsive" alt="{{$badge->name}}" src="{{ asset('/storage/badges/'.$badge->image) }}"/>
							</a>
						</div>
					</div>
					<div class="favoriteptext-col">
						<div class="favoriteptextcol-in">
							<div class="row favoriteptitle-row">
								<div class="favoritep-title">
									<h2><a href="{{route('badges.show',base64url_encode($badge->id))}}">{{$badge->name}}</a></h2>
								</div>
								<div class="favoriteptitle-icon">
		                                <a href="javascript:void(0);" class="favorite-badge" route="{{route('badges.favorites',base64url_encode($badge->id))}}" status="removed" ><img class="img-responsive" src="{{asset('assets/store/images/heart-icon.svg' )}}" alt="remove form favorite" /></a>
									<!-- <img src="images/heart-icon.svg" alt="" /> -->
								</div>
							</div>
							<p>{!! $badge->description !!}</p>
						</div>
					</div>
				</div>
			</div>
            @endforeach

		</div>
	</div>
</div>
<!-- Page Container -->
@endsection
@section('page-js-link')
@endsection
@section('page-js')
<script type="text/javascript">
    $(document).on('click', '.favorite-badge', function() {
        route = $(this).attr('route');
        status = $(this).attr('status');
        $.ajax({
            url: route,
            method: "POST",
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                "status":status
            },
            beforeSend: function() {
                
            },
            success: function(data) {
                if (data.status) {
                    location.reload();
                }
            }
        })
    });
</script>
@endsection