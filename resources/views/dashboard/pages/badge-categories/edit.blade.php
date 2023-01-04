@extends('dashboard.layouts.master')
@section('title', '| Edit Category')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Edit Category </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.badge-categories.index')}}">Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Edit Category
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
                {{ Form::model($category, array('route' => array('admin.badge-categories.update', $category->id), 'method' => 'PUT','files' => true,'id' => 'create-category','class'=>'form-horizontal create-category','data-table'=>'categories_table')) }}
                <div class="card-header">Edit Category </div>
                 <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    {{ Form::label('name', 'Name') }}<i class="text-danger">*</i>
                                    {{ Form::text('name', old('name') , array('class' => error_field($errors,'name'),'placeholder'=>'Enter name here...')) }}
                                    {!!error_msg($errors,'name')!!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
                                    {{ Form::textarea('description',null, array('class' => error_field($errors,'description'),'placeholder'=>'Enter description here...','rows'=>'5')) }}
                                    {!!error_msg($errors,'description')!!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class=" mb-4">
                                        <img alt="{{$category->name}}" src="{{ asset('/storage/badge-categories/images/'.$category->image) }}" class="card-img-top">
                                    </div>
                                    {{ Form::label('category_pic', 'Select Image') }}
                                    <input type="file" class="form-control" name="image" id="image" />
                                    {!!error_msg($errors,'image')!!}
                                </div>
                                {{--
                                <div class="form-group">
                                    <div class="row mb-4">
                                        @foreach ($badge_galleries as $gallery)
                                        <div class="col-md-3">
                                            <img alt="{{$category->name}}" width="100%" height="auto" src="{{ asset('/storage/badge-categories/galleries/'.$gallery) }}">
                                        </div>
                                        @endforeach
                                    </div>
                                    {{ Form::label('category_pic', 'Select Gallery Images') }}
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
                {{ Form::close()}}
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