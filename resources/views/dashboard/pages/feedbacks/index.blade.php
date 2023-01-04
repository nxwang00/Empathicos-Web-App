@extends('dashboard.layouts.master')
@section('title', '| All Feedbacks')
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
                <h3 class="page-title"> All Feedbacks </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        All Feedbacks
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
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
        <div class="col-md-12">
            <div class="activity">
                <div class="activity-box">
                    <ul class="activity-list">
                        @foreach ($results as $index => $result)
                        <li>
                            <div class="activity-user">
                                #{{$index + $results->firstItem()}}
                            </div>
                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="javascript:void(0)" class="name">
                                        {{$result->message}}
                                    </a>
                                    <hr>
                                    <span class="time">By <a href="{{route('admin.users.show',$result->user->id)}}"> {{$result->user->name}}</a> | At  <a href="{{route('admin.users.show',$result->user->id)}}">{{$result->created_at}} </a> |
                                    <a href="javascript:void(0)" text="Feedback" id="{{$result->id}}" route="{{route('admin.feedbacks.destroy', $result->id)}}" class="delete text-danger mr-2" data-toggle="tooltip" data-placement="top" title="Trash Feedback" data-original-title="Trash Feedback"><i class="nav-icon fa fa-trash-o font-weight-bold"></i> Delete</a>
                                </span>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            {{$results->links()}}
        </div>
    </div>
</div>
<!-- Page Content -->
</div>
<!-- Page Container -->
@endsection
@section('page-js-link')
<script src="{{asset('/assets/dashboard/js/pages/trash.js')}}"></script>
@endsection
@section('page-js') @endsection