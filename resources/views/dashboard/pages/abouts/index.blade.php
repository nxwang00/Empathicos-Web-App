@extends('dashboard.layouts.master')
@section('title', '| All Abouts')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> All Abouts </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.abouts.index')}}">Abouts</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        All Abouts
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.abouts.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
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
    {{--
    <!-- Search Filter -->
    <form method="get" action="">
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating" id="searchByKeyword">
                    <label class="focus-label">Name...</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus select-focus">
                    <select class="select floating" id="searchByStatus">
                        <option value="all"> -- Select Status -- </option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    <label class="focus-label">Status</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <button type="submit" class="btn btn-primary btn-block">Search</button>
            </div>
        </div>
    </form>
    <!-- /Search Filter -->
    --}}
    <!-- Page Content -->
    <div class="row staff-grid-row">
        @foreach ($results as $key => $result) 
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="{{route('admin.abouts.show',$result->id)}}" class="avatar" style="background-color: white;"><img src="{{ asset('/storage/abouts/'.$result->image) }}" alt=""></a>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{route('admin.abouts.show',$result->id)}}">{{$result->name}}</a></h4>
                <div class="small text-muted"><a href="{{$result->website}}">{{$result->website}}</a></div>
                <div class="small text-muted">{{$result->course}}</div>
                <p class="small text-muted mt-2">{!!viewButton('admin.abouts', $result)!!}{!!editButton('admin.abouts', $result)!!} {!!trashButton('admin.abouts', $result)!!}</p>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Page Content -->
</div>
<!-- Page Container -->
@endsection
@section('page-js-link')
<script src="{{asset('/assets/dashboard/js/pages/trash.js')}}"></script>
@endsection
@section('page-js') @endsection