@extends('dashboard.layouts.master')
@section('title', '| Character Details')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Character Details</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.badges.index')}}">Characters</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Character Details
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.badges.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.badges.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Close</a>
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
                    Character Details
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="text-muted">Name</label>
                            <p class="text-mute">{{$badge->name}}</p>
                            <label class="text-muted">Description</label>
                            <p class="text-mute">{!!$badge->description!!} </p>
                              <div class="row">
                        <div class="col-md-4">
                          <label>Journey Page Image</label><br>
                                @if(!empty($badge->journey_image))
                                <img alt="{{$badge->name}}" width="50%" height="auto" src="{{ asset('/storage/badges/'.$badge->journey_image) }}">
                                @endif
                        </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                            <label>Character Image</label><br>
                                <div class="row">
                        <div class="col-md-4"> @if(!empty($badge->image))
                            <img alt="{{$badge->name}}" width="100%" height="auto" src="{{ asset('/storage/badges/'.$badge->image) }}">
                            @endif
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.badges.edit',$badge->id) }} " class="btn btn-dark"><i class="fa fa-pencil"></i> Edit</a>
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