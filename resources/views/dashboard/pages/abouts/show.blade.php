@extends('dashboard.layouts.master')
@section('title', '| About Details')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> About Details</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.abouts.index')}}">Abouts</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        About Details
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.abouts.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.abouts.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Close</a>
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
                    About Details
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="text-muted">Page Title</label>
                            <p class="text-mute">{{$about->page}}</p>
                            <label class="text-muted">Menu Position</label>
                            <p class="text-mute">{{$about->position}}</p>
                            <label class="text-muted">Name</label>
                            <p class="text-mute">{{$about->name}}</p>
                            <label class="text-muted">Course</label>
                            <p class="text-mute">{{$about->course}}</p>
                            <label class="text-muted">Website</label>
                            <p class="text-mute"><a href="{{$about->website}}">{{$about->website}}</a></p>
                            <label class="text-muted">Description</label>
                            <p class="text-mute">{!!$about->description!!} </p>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                @if(!empty($about->image))
                                <img alt="{{$about->name}}" src="{{ asset('/storage/abouts/'.$about->image) }}" class="card-img-top">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.abouts.edit',$about->id) }} " class="btn btn-dark"><i class="fa fa-pencil"></i> Edit</a>
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