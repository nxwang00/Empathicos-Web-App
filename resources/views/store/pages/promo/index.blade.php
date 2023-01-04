@extends('store.layouts.master')
@section('title', '| Promo Code')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
	<div class="container">
		<div class="form-theme signinform-theme">
			<div class="formtheme-in">
				<div class="signup-form">
					
					<form method="post" class="promo" id="promo" action="{{ route('promo.submit')}}">
						@csrf
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-title">
									<h2> Promo Code </h2>
									
									@if (Session::has('status') && (Session::get('status') == 'message'))
									<div class="alert alert-danger alert-dismissible-r fade-r show" role="alert">
										<strong>Invalid !</strong> {{Session::get('text')}}
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									@endif
								</div>
								<div class="form-group">
									{{ Form::label('code', 'Code') }}<i class="text-danger">*</i>
									{{ Form::text('code', old('code') , array('class' => error_field($errors,'code'),'placeholder'=>'')) }}
									{!!error_msg($errors,'code')!!}
								</div>
								<div class="btntheme-wrap">
									<button type="submit" class="btn btn-default btn-theme1">Start your journey  </button>
								</div>
							</div>
						</div>
					</form>
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