@extends('dashboard.layouts.master')
@section('title', '| All Orders')
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
                <h3 class="page-title"> All Orders </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        All Orders
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
    <!-- Search Filter -->
    <form method="get" action="">
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating" id="searchByKeyword" value="{{ request()->query('keywords')}}" name="keywords">
                    <label class="focus-label">Email or Payment ID...</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <button type="submit" class="btn btn-primary btn-block">Search</button>
            </div>
        </div>
    </form>
    <!-- /Search Filter -->
    <!-- Page Content -->
    <div class="row staff-grid-row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Payment ID</th>
                            <th>Items</th>
                            <th>Total</th>
                            <th>Shipping</th>
                            <th>Grand Total</th>
                            <th>Pay Method</th>
                            <th>Order Status</th>
                            <th>Create At</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $index => $result)
                        <tr>
                            <td> #{{$index + $results->firstItem()}}</td>
                            <td><a href="{{route('admin.payments.show',$result->id)}}">{{$result->payment_id}}</a></td>
                            <td>
                                @php
                                $items = json_decode($result->items,true);
                                echo count($items);
                                @endphp
                            </td>
                            <td>${{number_format($result->total,2)}}</td>
                            <td>${{number_format($result->shipping,2)}}</td>
                            <td>${{number_format($result->grand_total,2)}}</td>
                            <td>
                                @if($result->payment_method == 'paypal')
                                <h1 class="badge badge-primary"> 
                                    {{ ucfirst($result->payment_method) }}
                                </h1>
                                @else
                                <h1 class="badge badge-info"> 
                                    {{ ucfirst($result->payment_method) }}
                                </h1>
                                @endif
                            </td>
                            <td>
                                <?php
                                $route = 'admin.payments';
                                $class = ($result->status == 2) ? 'primary ' : 'info ';
                                $text  = ($result->status == 2) ? 'New   ' : 'Completed';
                                $link_text  = ($result->status == 2) ? '  Completed ' : ' New ';
                                $remove_admin = str_replace('admin.', '', $route);
                                $singular     = Str::singular(ucwords(str_replace('-', ' ', $remove_admin)));
                                $attr = 'id="' . $result->id . '" text="' . $singular . ' status to ' . $text . '"  table="' . str_replace('-', '_', str_replace('.', '_', $route)) . '_table" route="' . route("$route.status", $result->id) . '"';
                                echo '<a href="#" ' . $attr . ' class=" text-'.$class.' change-status mr-2"><i class="fa fa-dot-circle-o text-'.$class.'"></i> '.$link_text.'</a>';
                                ?>
                            </td>
                            <td> {{$result->created_at}}</td>
                            <td>
                                <a href="{{route('admin.payments.show',$result->id)}}" class="btn btn-dark btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Order"><i class="nav-icon fa fa-eye font-weight-bold"></i></a>
                                <a href="javascript:void(0)" text="Order" id="{{$result->id}}" route="{{route('admin.payments.destroy', $result->id)}}" class="delete btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Trash Order" data-original-title="Trash Order"><i class="nav-icon fa fa-trash-o font-weight-bold"></i> </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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