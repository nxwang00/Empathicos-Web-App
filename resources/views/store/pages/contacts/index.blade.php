@extends('store.layouts.master')
@section('title', '| Contacts')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
	<div class="container">
		<div class="form-theme commentform-theme">
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

				<div class="comment-form">
					<form method="post"  class="contact-user" id="contact-user" action="{{ route('contact.send')}}">
                        @csrf
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-title">
									<p>We'd love to hear from you get in touch with us!</p>
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
									<button type="submit" class="btn btn-default btn-theme4">Submit</button>
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
