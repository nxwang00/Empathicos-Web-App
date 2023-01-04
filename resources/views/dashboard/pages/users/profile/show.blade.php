@extends('dashboard.layouts.master')
@section('title', '| My Profile')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> My Profile</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        My Profile
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.app.dashboard') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Close</a>
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
                    My Profile
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="text-muted">Name</label>
                            <p class="text-mute">{{$user->name}}</p>
                            <label class="text-muted">Email</label>
                            <p class="text-mute">{{$user->email}}</p>
                            <label class="text-muted">About</label>
                            <p class="text-mute">{!!$user->about!!} </p>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                @if(!empty($user->image))
                                    <img alt="{{$user->name}}" src="{{ asset('/storage/profiles/'.$user->image) }}" class="card-img-top">
                                @endif
                                <div class="card-footer d-flex justify-content-between">
                                    <div class="d-inline">
                                        <span class="text-muted">Status:</span> {!! ($user->status == 1) ? '<span class="text-success">Active</span>' : '<span class="text-danger">Inactive</span>'!!}
                                    </div>
                                    @if($user->birthday)
                                    <div class="d-inline">
                                        <span class="text-muted">Birthday:</span> {{date('d-m-Y',strtotime($user->birthday))}}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.user.profile.edit') }} " class="btn btn-dark"><i class="fa fa-pencil"></i> Edit</a>
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