@extends('dashboard.layouts.master')
@section('title', '| Create User')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Create User </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.users.index')}}">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Create User
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.users.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
            </div>
        </div>
    </div>
    <!-- Page Header -->
       <!-- Page Alert -->
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.includes.alert')
        </div>
    </div>
    <!-- /Page Alert -->
    <!-- Page Content -->
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-0">
                <form method="post"  class="form-horizontal create-user" id="create-user" enctype="multipart/form-data" action="{{ route('admin.users.store')}}" data-table='users_table'>
                    @csrf
                    <div class="card-header">Create User </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4">
                                    {{ Form::label('name', 'Name') }}<i class="text-danger">*</i>
                                    {{ Form::text('name', old('name') , array('class' => error_field($errors,'name'),'placeholder'=>'Enter name here...')) }}
                                    {!!error_msg($errors,'name')!!}
                                </div>
                                <div class="col-sm-4">
                                    {{ Form::label('email', 'Email') }}<i class="text-danger">*</i>
                                    {{ Form::text('email', old('email') , array('class' => error_field($errors,'email'),'placeholder'=>'Enter email here...')) }}
                                    {!!error_msg($errors,'email')!!}
                                </div>
                                <div class="col-sm-4">
                                    {{ Form::label('birthday', 'Birthday') }}<i class="text-danger">*</i>
                                    {{ Form::date('birthday', old('birthday') , array('class' =>error_field($errors,'birthday'),'placeholder'=>'Enter birthday here...')) }}
                                    {!!error_msg($errors,'birthday')!!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-8">
                                    {{ Form::label('about', 'About') }}<i class="text-danger">*</i>
                                    {{ Form::textarea('about',null, array('class' => error_field($errors,'about'),'placeholder'=>'Enter about here...','rows'=>'3')) }}
                                    {!!error_msg($errors,'about')!!}
                                </div>
                                  <div class="col-sm-4">
                                    {{ Form::label('profile_pic', 'Select Profile Image ') }}
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="img-thumbnail float-right">
                                                <img src="{{ asset('/storage/settings/logo/user.png') }}" width='150px'  height='150px' />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="file" class="form-control" name="image" id="image" />
                                            <span class="form-text text-muted">Recommended image size is 40px x 40px</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {{ Form::label('password', 'Password') }}<i class="text-danger">*</i>
                                        {{ Form::password('password', array('class' => error_field($errors,'password'),'placeholder'=>'Enter password here...')) }}
                                        {!!error_msg($errors,'password')!!}
                                    </div>
                                    </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {{ Form::label('password_confirmation', 'Confirm Password') }}
                                        {{ Form::password('password_confirmation', array('class' => error_field($errors,'password_confirmation') ,'placeholder'=>'Enter confirm password here...')) }}
                                        {!!error_msg($errors,'password_confirmation')!!}
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit"  class="btn btn-primary"><i class="fa fa-check"></i> Save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- Page Content -->
</div>
<!-- Page Container -->
@endsection
@section('page-js-link')
<script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
@endsection
@section('page-js') 
<script>
        CKEDITOR.replace( 'about' );
</script>
@endsection