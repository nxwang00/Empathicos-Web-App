@extends('store.layouts.master')
@section('title', '| Faqs')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
	<div class="container">
		<div class="page-title">
			<h1>FAQ's</h1>
		</div>
		@foreach($faqs as $key => $faq)
		<div class="favoritepage-wrap">
			<div class="favoritep-box">
				<div class="row favoritep-row">
					<div class="favoriteptext-col">
						<div class="favoriteptextcol-in">
							<div class="row favoriteptitle-row">
								<div class="favoritep-title">
									<h2><a href="#">{{$faq->question}}</a></h2>
								</div>
							</div>
							<p>{!!$faq->anwser!!}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
<!-- Page Container -->
@endsection
@section('page-js-link')
@endsection
@section('page-js')
@endsection