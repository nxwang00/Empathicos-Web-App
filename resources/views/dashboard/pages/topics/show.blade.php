@extends('dashboard.layouts.master')
@section('title', '| Topic Details')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Topic Details</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.topics.index')}}">Topics</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Topic Details
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.topics.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.topics.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Close</a>
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
                    Topic Details
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="text-muted">Title</label>
                            <p class="text-mute">{{$topic->title}}</p>
                            <label class="text-muted">Description</label>
                            <p class="text-mute">{!!$topic->description!!} </p>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-footer text-center">
                                    <p class="mb-0"><a href="{{route('admin.topics.show',$topic->id)}}">{{$topic->title}}</a> </p>
                                    <p class="mb-0  text-muted"> {{$category}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="{{ route('admin.topics.edit',$topic->id) }} " class="btn btn-dark"><i class="fa fa-pencil"></i> Edit</a>
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