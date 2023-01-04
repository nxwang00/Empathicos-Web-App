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
                <h3 class="page-title"> Edit Sub Category </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.main-subcategories.index')}}">Sub Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Edit Sub Category
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.main-subcategories.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.main-subcategories.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
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
               <form method="post"  class="form-horizontal create-category" id="create-category" enctype="multipart/form-data" action="{{ route('admin.main-subcategories.updatedata')}}" data-table='categories_table'>
                @csrf
                <div class="card-header">Edit Sub Category </div>
                 <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="title">Choose Category</label><i class="text-danger">*</i>
                                    <select name="cat_id" class="form-control" required>
                                        <option value="" readonly>---- Choose main Category ----</option>
                                        @if(isset($categories) && !empty($categories) )
                                            @foreach($categories as $mc)
                                            
                                                <option value="{{$mc->id}}" @if($data->cat_id == $mc->id)
                                                        selected
                                                    @endif>
                                                    {{$mc->title}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                               <div class="form-group">
                                    <label for="title">Title</label><i class="text-danger">*</i>
                                    <input class="form-control" placeholder="Enter title here..." name="title" type="text" id="title" value="{{$data->title}}">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label><i class="text-danger">*</i>
                                    <textarea class="form-control" placeholder="Enter description here..." rows="5" name="description" cols="50" id="description" style="visibility: hidden; display: none;">{{$data->description}}</textarea>
                                </div>
                                @if(!empty($data->image))
                                <img src="{{asset('project/storage/app/public/main-subcategories/'.$data->image)}}" width="200">
                                @endif
                                <div class="form-group">
                                    <label for="card_pic">Select Image</label>
                                    <input type="file" class="form-control" name="image" id="image">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="card-footer">
                    <input class="form-control" placeholder="Enter title here..." name="id" type="hidden"  value="{{$data->id}}">
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