@extends('dashboard.layouts.master')
@section('title', '|  General Settings')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">  General Settings</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.settings.index')}}">Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        General Settings
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.app.dashboard') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Close</a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
       <!-- Page Alert -->
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.includes.alert')
        </div>
    </div>
    <!-- /Page Alert -->
    <!-- Page Content -->
    <div class="row">
        <div class="col-md-9">
            <div class="card mb-0">
                <div class="card-header">
                    General Settings
                </div>
                <!-- Create Form -->
                <form method="Post"  class="form-horizontal" name="general_settings" action="{{ route('admin.settings.update')}}">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('company', 'Company Name') }}<i class="text-danger">*</i>
                                    {{ Form::text('company',get_setting_field('company') , array('class' => error_field($errors,'company'),'placeholder'=>'Enter company name here...')) }}
                                    {!!error_msg($errors,'company')!!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('contact', 'Contact Person') }}<i class="text-danger">*</i>
                                    {{ Form::text('contact', get_setting_field('contact'), array('class' => error_field($errors,'contact'),'placeholder'=>'Enter contact person name here...')) }}
                                    {!!error_msg($errors,'contact')!!}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('address', 'Address') }}<i class="text-danger">*</i>
                                    {{ Form::text('address', get_setting_field('address'), array('class' => error_field($errors,'address'),'placeholder'=>'Enter address here...')) }}
                                    {!!error_msg($errors,'address')!!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('email', 'Email') }}<i class="text-danger">*</i>
                                    {{ Form::text('email', get_setting_field('email'), array('class' => error_field($errors,'email'),'placeholder'=>'Enter email here...')) }}
                                    {!!error_msg($errors,'email')!!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('phone', 'Phone Number') }}<i class="text-danger">*</i>
                                    {{ Form::text('phone', get_setting_field('phone'), array('class' => error_field($errors,'phone'),'placeholder'=>'Enter phone number here...')) }}
                                    {!!error_msg($errors,'phone')!!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('mobile', 'Mobile Number') }}<i class="text-danger">*</i>
                                    {{ Form::text('mobile', get_setting_field('mobile'), array('class' => error_field($errors,'mobile'),'placeholder'=>'Enter mobile number here...')) }}
                                    {!!error_msg($errors,'mobile')!!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('fax', 'Fax') }}<i class="text-danger">*</i>
                                    {{ Form::text('fax', get_setting_field('fax'), array('class' => error_field($errors,'fax'),'placeholder'=>'Enter fax here...')) }}
                                    {!!error_msg($errors,'fax')!!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('website', 'Website Url') }}<i class="text-danger">*</i>
                                    {{ Form::text('website', get_setting_field('website'), array('class' => error_field($errors,'website'),'placeholder'=>'Enter website url here...')) }}
                                    {!!error_msg($errors,'website')!!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('shipping_charges', 'Shipping Charges ($)') }}<i class="text-danger">*</i>
                                    {{ Form::text('shipping_charges', get_setting_field('shipping_charges'), array('class' => error_field($errors,'shipping_charges'),'placeholder'=>'Enter shipping charges here...')) }}
                                    {!!error_msg($errors,'shipping_charges')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary btn-md" name="general_settings" value="yes"><i class="fa fa-check"></i> Save</button>
                    </div>
                </form>
                <!-- /Create Form -->
            </div>
            <div class="card mt-5">
                <div class="card-header">
                    Social Media Settings
                </div>
                <!-- Create Form -->
                <form method="Post" class="form-horizontal" name="social_media_settings"  action="{{ route('admin.settings.update')}}">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('facebook', 'Facebook URL') }}<i class="text-danger">*</i>
                                    {{ Form::url('facebook',get_setting_field('facebook') , array('class' => error_field($errors,'facebook'),'placeholder'=>'Enter facebook url here...')) }}
                                    {!!error_msg($errors,'facebook')!!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('twitter', 'Twitter URL') }}<i class="text-danger">*</i>
                                    {{ Form::url('twitter', get_setting_field('twitter'), array('class' => error_field($errors,'twitter'),'placeholder'=>'Enter twitter url here...')) }}
                                    {!!error_msg($errors,'twitter')!!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('instagram', 'Instagram URL') }}<i class="text-danger">*</i>
                                    {{ Form::url('instagram', get_setting_field('instagram'), array('class' => error_field($errors,'instagram'),'placeholder'=>'Enter instagram url here...')) }}
                                    {!!error_msg($errors,'instagram')!!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('linkedin', 'Linkedin URL') }}<i class="text-danger">*</i>
                                    {{ Form::url('linkedin', get_setting_field('linkedin'), array('class' => error_field($errors,'linkedin'),'placeholder'=>'Enter linkedin url here...')) }}
                                    {!!error_msg($errors,'linkedin')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary btn-md" name="social_media_settings" value="yes"><i class="fa fa-check"></i> Save</button>
                    </div>
                </form>
                <!-- /Create Form -->
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-0">
                <div class="card-header">
                    Logo & Favicon Icon Settings
                </div>
                <!-- Create Form -->
                <form method="Post" class="form-horizontal"  enctype="multipart/form-data"  action="{{ route('admin.settings.update')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            {{ Form::label('image', 'Select Favicon Image ') }}<br>
                            <img src="{{ asset('/storage/settings/'.get_setting_field('favicon')) }}" class="img-thumbnail mb-2" width='100'  height='100' />
                            <input type="file" class="{{error_field($errors,'favicon')}}" name="favicon" id="favicon" />
                            <span class="form-text text-muted">Recommended image size is 16px x 16px</span>
                            {!!error_msg($errors,'favicon')!!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('image', 'Select Logo Image ') }}<br>
                            <img src="{{ asset('/storage/settings/'.get_setting_field('logo')) }}" class="img-thumbnail  mb-2" width='100'  height='100' />
                            <input type="file" class="{{error_field($errors,'logo')}}" name="logo" id="logo" />
                            <span class="form-text text-muted">Recommended image size is 40px x 40px</span>
                            {!!error_msg($errors,'logo')!!}
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary btn-md" name="logo_and_favicon_settings" value="yes"><i class="fa fa-check"></i> Save</button>
                    </div>
                </form>
                <!-- /Create Form -->
            </div>
        </div>
    </div>
    <!-- Page Content -->
</div>
<!-- Page Container -->
@endsection
@section('page-js-link') @endsection
@section('page-js') @endsection