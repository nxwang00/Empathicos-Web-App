@extends('store.layouts.master')
@section('title', '| Feedbacks')
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
					<form method="post"  class="feedback-user" id="feedback-user" action="{{ route('feedback.send')}}">
                        @csrf
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="commentform-label">
									<p><img src="images/comment-icon.svg" alt="" />Send us your comment about Empathicos</p>
								</div>
								<div class="form-group">
									{{ Form::textarea('message',old('message'), array('class' => error_field($errors,'message'),'placeholder'=>'Message','rows'=>'3')) }}
                                    {!!error_msg($errors,'message')!!}
								</div>
								<div class="btntheme-wrap">
									<button type="submit" class="btn btn-default btn-theme6">Send</button>
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