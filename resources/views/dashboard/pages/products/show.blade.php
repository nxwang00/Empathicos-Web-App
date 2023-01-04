@extends('dashboard.layouts.master')
@section('title', '| Product Details')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Product Details</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.products.index')}}">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Product Details
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.products.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Close</a>
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
                    Product Details
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="text-muted">Name</label>
                            <p class="text-mute">{{$product->name}}</p>
                            <label class="text-muted">Price</label>
                            <p class="text-mute">{{'$'.$product->price}}</p>
                            <label class="text-muted">Description</label>
                            <p class="text-mute">{!!$product->description!!} </p>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                @if(!empty($product->image))
                                <img alt="{{$product->name}}" src="{{ asset('/storage/products/images/'.$product->image) }}" class="card-img-top">
                                @endif
                                <div class="card-footer text-center">
                                    <p class="mb-0"><a href="{{route('admin.products.show',$product->id)}}">{{$product->name}}</a> </p>
                                    <p class="mb-0  text-muted"> {{$categories}} </p>
                                    <h3 class="mb-0">Price: {{'$'.$product->price}} </h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted">Select Gallery Images</p>
                                </div>
                                @foreach ($galleries as $gallery)
                                <div class="col-md-3">
                                    <img alt="{{$product->name}}" width="100%" height="auto" src="{{ asset('/storage/products/galleries/'.$gallery) }}">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.products.edit',$product->id) }} " class="btn btn-dark"><i class="fa fa-pencil"></i> Edit</a>
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