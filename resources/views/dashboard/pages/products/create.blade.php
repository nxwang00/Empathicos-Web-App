@extends('dashboard.layouts.master')
@section('title', '| Create Product')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Create Product </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.products.index')}}">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Create Product
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.products.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
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
                <form method="post"  class="form-horizontal create-product" id="create-product" enctype="multipart/form-data" action="{{ route('admin.products.store')}}" data-table='products_table'>
                    @csrf
                    <div class="card-header">Create Product </div>
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
                                        {{ Form::label('price', 'Price') }}<i class="text-danger">*</i>
                                        {{ Form::text('price', old('price') , array('class' =>error_field($errors,'price'),'placeholder'=>'Enter price here...')) }}
                                        {!!error_msg($errors,'price')!!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
                                        {{ Form::textarea('description',null, array('class' => error_field($errors,'description'),'placeholder'=>'Enter description here...','rows'=>'3')) }}
                                        {!!error_msg($errors,'description')!!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {{ Form::label('product_pic', 'Select Product Image') }}<i class="text-danger">*</i>
                                        <input type="file" class="form-control" name="image" id="image" />
                                        {!!error_msg($errors,'image')!!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('product_pic', 'Select Gallery Images') }}<i class="text-danger">*</i>
                                        <input type="file" class="form-control" multiple="true" name="images[]" id="images" />
                                        {!!error_msg($errors,'images')!!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('categories', 'Categories') }}<i class="text-danger">*</i>
                                        {!!Form::select('categories[]', $categories,old('categories'), ['class' => error_field($errors,'categories'),'multiple'=>true,'placeholder' => '-- Select Categories --'])!!}
                                        {!!error_msg($errors,'categories')!!}
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