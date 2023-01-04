@extends('store.layouts.master')
@section('title', '| Invitation')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
	<div class="container">
		<div class="form-theme inviteform-theme">
			<div class="formupper-title">
				<h2>Invitation</h2>
			</div>
			<div class="formtheme-in">
				@if (Session::has('status') && (Session::get('status') == 'message'))
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="alert alert-success alert-dismissible-r fade-r show" role="alert">
							<strong>Successfully !</strong> {{Session::get('text')}}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>
				@endif
				<div class="inviteform-form">
					<form method="post"  class="invitation-user" id="invitation-user" action="{{ route('invitation.send')}}">
                        @csrf
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-title">
									<p>We love you! Thank you for sharing the Empathicos magic
									with your friends & loved-ones!</p>
								</div>
								<div class="form-group">
                                    {{ Form::text('name', old('name') , array('class' => error_field($errors,'name'),'placeholder'=>'Name')) }}
                                    {!!error_msg($errors,'name')!!}
								</div>
								<div class="form-group">
									 {{ Form::text('email', old('email') , array('class' => error_field($errors,'email'),'placeholder'=>'Email')) }}
                                    {!!error_msg($errors,'email')!!}
								</div>
								<div class="form-group">
									{{ Form::textarea('message',old('message'), array('class' => error_field($errors,'message'),'placeholder'=>'Message','rows'=>'3')) }}
                                    {!!error_msg($errors,'message')!!}
								</div>
								<div class="btntheme-wrap">
									<button type="submit" class="btn btn-default btn-theme4">Invite Send</button>
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