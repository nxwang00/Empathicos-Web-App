@extends('dashboard.layouts.master')
@section('title', '| Dashboard')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Content -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Welcome Admin!</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Coming Soon!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <!-- /Page Header -->
</div>
<!-- /Page Content -->
@endsection
@section('page-js-link') @endsection
@section('page-js') @endsection