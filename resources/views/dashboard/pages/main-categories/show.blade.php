@extends('dashboard.layouts.master')
@section('title', '| Category Details')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Category Details</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.badge-categories.index')}}">Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Category Details
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.badge-categories.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.badge-categories.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Close</a>
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
        <div class="col-md-12">
            <div class="card mb-0">
                <div class="card-header">
                    Category Details
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="text-muted">Name</label>
                            <p class="text-mute">{{$category->name}}</p>
                            <label class="text-muted">Description</label>
                            <p class="text-mute">{!!$category->description!!} </p>
                            {{--
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted">Select Gallery Images</p>
                                </div>
                                @foreach ($galleries as $gallery)
                                <div class="col-md-3">
                                    <img alt="{{$category->name}}" width="100%" height="auto" src="{{ asset('/storage/badge-categories/galleries/'.$gallery) }}">
                                </div>
                                @endforeach
                            </div>
                            --}}
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                @if(!empty($category->image))
                                <img alt="{{$category->name}}" src="{{ asset('/storage/badge-categories/images/'.$category->image) }}" class="card-img-top">
                                @endif
                                <div class="card-footer text-center">
                                    <span class="text-muted">Status:</span> {!! ($category->status == 1) ? '<span class="text-success">Active</span>' : '<span class="text-danger">Inactive</span>'!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.badge-categories.edit',$category->id) }} " class="btn btn-dark"><i class="fa fa-pencil"></i> Edit</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
</div>
<!-- Page Container -->
@endsection
@section('page-js-link') @endsection
@section('page-js') @endsection