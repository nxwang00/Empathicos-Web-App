@extends('store.layouts.master')
@section('title', '| Payment')
@section('page-css-link')
@endsection
@section('page-css')
@endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
	<div class="container">
		<div class="paymentpage-wrap">
			<div class="page-title">
				<h2>Payment</h2>
			</div>
			<div class="form-theme payform-wrap">
				<div class="formtheme-in">
					<div class="payform-title">
						<div class="payformtitle-in">
							<h2>{{$status}}</h2>
						</div>
					</div>
					<div class="payform-form">
						<div class="payform-formin">
							<p>{{$message}}</p>
						</div>
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