@extends('store.layouts.master')
@section('title', '| Update Profile')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
    <div class="container">
        <div class="form-theme profiletext-theme">
            <div class="formupper-title">
                <h2>Profile</h2>
            </div>
            <div class="formtheme-in">
                <div class="profile-form">
                    <form method="post"  class="update-user" id="update-user" enctype="multipart/form-data" action="{{ route('profile.update')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="formtheme-profile">
                                        <input type="file" name="image">
                                        <div class="formthemepro-camera">
                                            <img src="{{ asset('assets/store/images/camera-icon.svg') }}" alt="upload icon" />
                                        </div>
                                        <div class="formthemepro-img">
                                            <img src="{{ asset('/storage/profiles/'.$user->image) }}" alt="{{$user->name}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('name', 'Name') }}<i class="text-danger">*</i>
                                    {{ Form::text('name', old('name',$user->name) , array('class' => error_field($errors,'name'),'placeholder'=>'')) }}
                                    {!!error_msg($errors,'name')!!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('email', 'Email') }}<i class="text-danger">*</i>
                                    {{ Form::text('email', old('email',$user->email) , array('class' => error_field($errors,'email'),'placeholder'=>'Enter email here...')) }}
                                    {!!error_msg($errors,'email')!!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('birthday', 'Birthday') }}<i class="text-danger">*</i>
                                    @php
                                     $birthday = date('Y-m-d',strtotime($user->birthday));
                                    @endphp
                                    {{ Form::date('birthday', old('birthday',$birthday) , array('class' =>error_field($errors,'birthday'))) }}
                                    {!!error_msg($errors,'birthday')!!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('about', 'About') }}<i class="text-danger">*</i>
                                    {{ Form::textarea('about',$user->about, array('class' => error_field($errors,'about'),'placeholder'=>'Enter about here...','rows'=>'3')) }}
                                    {!!error_msg($errors,'about')!!}
                                </div>
                                <div class="btntheme-wrap">
                                    <button type="submit" class="btn btn-default btn-theme1">Save</button>
                                    <a href="{{route('profile')}}" class="btn btn-default btn-theme2">Cancel</a>
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