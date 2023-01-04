@extends('dashboard.layouts.master')
@section('title', '| Create Character')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Create Character </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.badges.index')}}">Characters</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Create Character
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.badges.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.badges.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
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
                <form method="post"  class="form-horizontal create-card" id="create-card" enctype="multipart/form-data" action="{{ route('admin.badges.store')}}" data-table='cards_table'>
                    @csrf
                    <div class="card-header">Create Character </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        {{ Form::label('name', 'Name') }}<i class="text-danger">*</i>
                                        {{ Form::text('name', old('name') , array('class' => error_field($errors,'name'),'placeholder'=>'Enter name here...')) }}
                                        {!!error_msg($errors,'name')!!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
                                        {{ Form::textarea('description',null, array('class' => error_field($errors,'description'),'placeholder'=>'Enter description here...','rows'=>'3')) }}
                                        {!!error_msg($errors,'description')!!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {{ Form::label('character_pic', 'Select Character Image') }}<i class="text-danger">*</i>
                                        <input type="file" class="form-control" name="image" id="image" />
                                        {!!error_msg($errors,'image')!!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('character_pic', 'Select Journey Page Image') }}<i class="text-danger">*</i>
                                        <input type="file" class="form-control" name="journey_image" id="journey_image" />
                                        {!!error_msg($errors,'journey_image')!!}
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