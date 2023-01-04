@extends('dashboard.layouts.master')
@section('title', '| All Reviews')
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
                <h3 class="page-title"> All Reviews </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        All Reviews
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
                    <label class="focus-label">Name or Email...</label>
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
                                        {{$result->review}}
                                    </a>
                                    <h4>
                                    {!!get_rating($result->rating)!!}
                                    </h4>
                                    <hr>
                                    <span class="time"> Reviewed By <a href="{{route('admin.users.show',$result->user->id)}}">  {{$result->user->name}}</a> | On <a href="{{route('product.show',['id' => encrypt($result->product->id)])}}" target="_blank"> {{$result->product->name}}</a> | At  <a href="{{route('admin.users.show',$result->user->id)}}">{{$result->created_at}} </a>
                                    <div class="float-right">
                                        <?php
                                        $route = 'admin.reviews';
                                        $class = ($result->status == 1) ? 'success ' : 'danger';
                                        $text  = ($result->status == 1) ? 'Hide   ' : 'Show';
                                        $link_text  = ($result->status == 1) ? '  Show ' : ' Hide ';
                                        $remove_admin = str_replace('admin.', '', $route);
                                        $singular     = Str::singular(ucwords(str_replace('-', ' ', $remove_admin)));
                                        $attr = 'id="' . $result->id . '" text="' . $singular . ' status to ' . $text . '"  table="' . str_replace('-', '_', str_replace('.', '_', $route)) . '_table" route="' . route("$route.status", $result->id) . '"';
                                        echo '<a href="#" ' . $attr . ' class="change-status mr-2"><i class="fa fa-dot-circle-o text-'.$class.'"></i> '.$link_text.'</a>';
                                        ?>
                                        <a href="javascript:void(0)" text="review" id="{{$result->id}}" route="{{route('admin.reviews.destroy', $result->id)}}" class="delete text-danger mr-2" data-toggle="tooltip" data-placement="top" title="Trash review" data-original-title="Trash review"><i class="nav-icon fa fa-trash-o font-weight-bold"></i> Delete</a>
                                    </div>
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
<script src="{{asset('/assets/dashboard/js/pages/status.js')}}"></script>
@endsection
@section('page-js') @endsection