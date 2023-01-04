@extends('dashboard.layouts.master')
@section('title', '| Article Details')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Article Details</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.articles.index')}}">Articles</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Article Details
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.articles.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.articles.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Close</a>
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
                    Article Details
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="text-muted">Title</label>
                            <p class="text-mute">{{$article->title}}</p>
                            <label class="text-muted">Description</label>
                            <p class="text-mute">{!!$article->description!!} </p>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                @if(!empty($article->image))
                                    <img alt="{{$article->name}}" src="{{ asset('/storage/articles/'.$article->image) }}" class="card-img-top">
                                @endif
                                <div class="card-footer d-flex justify-content-center">
                                    <div class="d-inline">
                                        <span class="text-muted">Status:</span> {!! ($article->status == 1) ? '<span class="text-success">Active</span>' : '<span class="text-danger">Inactive</span>'!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.articles.edit',$article->id) }} " class="btn btn-dark"><i class="fa fa-pencil"></i> Edit</a>
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