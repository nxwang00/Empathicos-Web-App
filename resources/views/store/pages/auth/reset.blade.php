@extends('store.layouts.master')
@section('title', '| Reset Password')
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
                    <form method="post" class="reset-password" id="reset-password" action="{{ route('password.update')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-title">
                                    <h2>Reset Password</h2>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    {{ Form::label('email', 'Email') }}<i class="text-danger">*</i>
                                    {{ Form::text('email', old('email',$email) , array('class' => error_field($errors,'email'),'placeholder'=>'')) }}
                                    {!!error_msg($errors,'email')!!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('password', 'Password') }}<i class="text-danger">*</i>
                                    {{ Form::password('password', array('class' => error_field($errors,'password'),'placeholder'=>'')) }}
                                    {!!error_msg($errors,'password')!!}
                                </div>
                                 <div class="form-group">
                                    {{ Form::label('password_confirmation', 'Confirm Password') }}
                                    {{ Form::password('password_confirmation', array('class' => error_field($errors,'password_confirmation') ,'placeholder'=>'')) }}
                                    {!!error_msg($errors,'password_confirmation')!!}
                                </div>
                                <div class="form-group">
                                    <div class="formgroup-text">
                                        <p>Remember your password? <a href="{{route('signin')}}">Sign In</a></p>
                                    </div>
                                </div>
                                <div class="btntheme-wrap">
                                    <button type="submit" class="btn btn-default btn-theme1">Reset Password</button>
                                    <a href="{{route('signin')}}" class="btn btn-default btn-theme2">Cancel</a>
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