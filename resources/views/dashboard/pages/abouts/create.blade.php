@extends('dashboard.layouts.master')
@section('title', '| Create About')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Create About </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.abouts.index')}}">Abouts</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Create About
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.abouts.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.abouts.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
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
                <form method="post"  class="form-horizontal create-about" id="create-about" enctype="multipart/form-data" action="{{ route('admin.abouts.store')}}" data-table='abouts_table'>
                    @csrf
                    <div class="card-header">Create About </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('page', 'Page Title') }}<i class="text-danger">*</i>
                                    {{ Form::text('page', old('page') , array('class' => error_field($errors,'page'),'placeholder'=>'Enter page title here...')) }}
                                    {!!error_msg($errors,'page')!!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('position', 'Menu Position') }}<i class="text-danger">*</i>
                                    {{ Form::number('position', old('position') , array('class' => error_field($errors,'position'),'placeholder'=>'Enter position here ex:1,2,3...')) }}
                                    {!!error_msg($errors,'position')!!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('name', 'Name') }}<i class="text-danger">*</i>
                                    {{ Form::text('name', old('name') , array('class' => error_field($errors,'name'),'placeholder'=>'Enter name here...')) }}
                                    {!!error_msg($errors,'name')!!}
                                </div>
                                
                                  <div class="form-group">
                                    {{ Form::label('website', 'Website') }}<i class="text-danger">*</i>
                                    {{ Form::text('website', old('website') , array('class' => error_field($errors,'website'),'placeholder'=>'Enter website url here...')) }}
                                    {!!error_msg($errors,'website')!!}
                                </div>
                                 <div class="form-group">
                                    {{ Form::label('course', 'Course') }}<i class="text-danger">*</i>
                                    {{ Form::text('course', old('course') , array('class' => error_field($errors,'course'),'placeholder'=>'Enter course name here...')) }}
                                    {!!error_msg($errors,'course')!!}
                                </div>
                                
                                <div class="form-group">
                                    {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
                                    {{ Form::textarea('description',null, array('class' => error_field($errors,'description'),'placeholder'=>'Enter description here...','rows'=>'5')) }}
                                    {!!error_msg($errors,'description')!!}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('about_pic', 'Select Profile Image ') }} <i class="text-danger">*</i>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" name="image" id="image" />
                                        <!-- <span class="form-text text-muted">Recommended image size is 40px x 40px</span> -->
                                        {!!error_msg($errors,'image')!!}
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="img-thumbnail float-right">
                                            <img src="{{ asset('/storage/settings/logo/about.png') }}" width='150px'  height='150px' />
                                        </div>
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
        CKEDITOR.replace( 'description' );
</script>
@endsection