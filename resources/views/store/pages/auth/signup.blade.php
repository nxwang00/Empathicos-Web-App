@extends('store.layouts.master')
@section('title', '| Sign Up')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
    <div class="container">
        <div class="form-theme">
            <div class="formtheme-in">
                <div class="signup-form">
                    <form method="post" class="signup" id="signup" enctype="multipart/form-data" action="{{ route('signup')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="formtheme-profile">
                                        <input type="file" name="image" id="image">
                                        <div class="formthemepro-camera">
                                            <img src="{{asset('assets/store/images/camera-icon.svg')}}" alt="upload icon" />
                                        </div>
                                        <div class="formthemepro-img">
                                            <img src="{{asset('assets/store/images/profile-pic.jpg')}}" alt="profile" />
                                        </div>
                                    </div>
                                    {!!error_msg($errors,'image')!!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    {{ Form::label('name', 'Name') }}<i class="text-danger">*</i>
                                    {{ Form::text('name', old('name') , array('class' => error_field($errors,'name'),'placeholder'=>'')) }}
                                    {!!error_msg($errors,'name')!!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('email', 'Email') }}<i class="text-danger">*</i>
                                    {{ Form::text('email', old('email') , array('class' => error_field($errors,'email'),'placeholder'=>'')) }}
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
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    {{ Form::label('birthday', 'Birthday') }}<i class="text-danger">*</i>
                                    <label></label>
                                    {{ Form::date('birthday', old('birthday') , array('class' => error_field($errors,'birthday'),'placeholder'=>'')) }}
                                    {!!error_msg($errors,'birthday')!!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('about', 'About') }}<i class="text-danger">*</i>
                                    {{ Form::textarea('about',null, array('class' => error_field($errors,'about'),'placeholder'=>'','rows'=>'3')) }}
                                    {!!error_msg($errors,'about')!!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>Do you have an account? <a href="{{route('signin')}}">Sign In</a></p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="btntheme-wrap">
                                    <button type="submit" class="btn btn-default btn-theme1">Sign up</button>
                                    <a href="{{route('home')}}" class="btn btn-default btn-theme2">Cancel</a>
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