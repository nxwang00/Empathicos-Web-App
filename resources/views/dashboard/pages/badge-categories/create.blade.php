@extends('dashboard.layouts.master')
@section('name', '| Create Category')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Create Category </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.badge-categories.index')}}">Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Create Category
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.badge-categories.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.badge-categories.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
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
                <form method="post"  class="form-horizontal create-category" id="create-category" enctype="multipart/form-data" action="{{ route('admin.badge-categories.store')}}" data-table='categories_table'>
                    @csrf
                    <div class="card-header">Create Category </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    {{ Form::label('name', 'Name') }}<i class="text-danger">*</i>
                                    {{ Form::text('name', old('name') , array('class' => error_field($errors,'name'),'placeholder'=>'Enter name here...')) }}
                                    {!!error_msg($errors,'name')!!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('description', 'Description') }}
                                    {{ Form::textarea('description',null, array('class' => error_field($errors,'description'),'placeholder'=>'Enter description here...','rows'=>'5')) }}
                                    {!!error_msg($errors,'description')!!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="form-group">
                                    {{ Form::label('card_pic', 'Select Image') }}<i class="text-danger">*</i>
                                    <input type="file" class="form-control" name="image" id="image" />
                                    {!!error_msg($errors,'image')!!}
                                </div>
                                {{--
                                <div class="form-group">
                                    {{ Form::label('card_pic', 'Select Gallery Images') }}<i class="text-danger">*</i>
                                    <input type="file" class="form-control" multiple="true" name="images[]" id="images" />
                                    {!!error_msg($errors,'images')!!}
                                </div>
                                --}}
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