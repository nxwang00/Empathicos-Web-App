@extends('dashboard.layouts.master')
@section('title', '| Send App Notification')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Send App Notification </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.users.index')}}">App Notification</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Send
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
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
                <form method="post"  class="form-horizontal create-user" id="create-user" enctype="multipart/form-data" action="{{ route('admin.users.notificationstore')}}" data-table='users_table'>
                    @csrf
                    <div class="card-header">Send Notification To All App Users</div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    {{ Form::label('title', 'Title') }}<i class="text-danger">*</i>
                                    {{ Form::text('title', old('title') , array('class' => error_field($errors,'title'),'placeholder'=>'Enter title here...')),array('required' => 'required') }}
                                    {!!error_msg($errors,'title')!!}
                                </div>
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
                                    {{ Form::textarea('description',null, array('class' => error_field($errors,'description'),'placeholder'=>'Enter description here...','rows'=>'3')) }}
                                    {!!error_msg($errors,'description')!!}
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit"  class="btn btn-primary"><i class="fa fa-check"></i> Send </button>
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