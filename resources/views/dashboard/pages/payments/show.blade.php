@extends('dashboard.layouts.master')
@section('title', '| Order Details')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Order Details</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.payments.index')}}">Orders</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Order Details
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.payments.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Close</a>
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
                    Order Details
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="activity">
                                <div class="activity-box">
                                    <ul class="activity-list">
                                        @php
                                        $items = json_decode($order->items);
                                        @endphp
                                        @foreach ($items as $i => $item)
                                        <li>
                                            <div class="activity-user">
                                                <a href="{{route('admin.products.show',$item->id)}}" title="Product Image" data-toggle="tooltip" class="avatar" data-original-title="Product Image">
                                                    <img src="{{$item->attributes->image}}" alt="{{$item->name}}">
                                                </a>
                                            </div>
                                            <div class="activity-content">
                                                <div class="timeline-content">
                                                    <a href="{{route('admin.products.show',$item->id)}}" class="name">
                                                        {{$item->name}}
                                                    </a>
                                                    <span class="time">Quantity:
                                                        <a href="javascript:void(0);"> {{$item->quantity}}</a> | Price <a href="javascript:void(0);"> ${{number_format($item->price,2)}}</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <ul class="personal-info">
                                <li>
                                    <span class="title">Sub Total:</span>
                                    <span class="text">${{ number_format($order->total,2)}}</span>
                                </li>
                                <li>
                                    <span class="title">Shipping</span>
                                    <span class="text">${{ number_format($order->shipping,2)}}</span>
                                </li>
                                <li>
                                    <span class="title">Grand Total:</span>
                                    <span class="text">${{ number_format($order->grand_total,2)}}</span>
                                </li>
                                <li>
                                    <span class="title">Order Status:</span>
                                    <span class="text">
                                        <?php
                                        $route = 'admin.payments';
                                        $class = ($order->status == 2) ? 'primary ' : 'info ';
                                        $text  = ($order->status == 2) ? 'New   ' : 'Completed';
                                        $link_text  = ($order->status == 2) ? '  Completed ' : ' New ';
                                        $remove_admin = str_replace('admin.', '', $route);
                                        $singular     = Str::singular(ucwords(str_replace('-', ' ', $remove_admin)));
                                        $attr = 'id="' . $order->id . '" text="' . $singular . ' status to ' . $text . '"  table="' . str_replace('-', '_', str_replace('.', '_', $route)) . '_table" route="' . route("$route.status", $order->id) . '"';
                                        echo '<a href="#" ' . $attr . ' class=" text-'.$class.' change-status mr-2"><i class="fa fa-dot-circle-o text-'.$class.'"></i> '.$link_text.'</a>';
                                        ?>
                                    </span>
                                </li>
                                <li>
                                    <span class="title">Date:</span>
                                    <span class="text">{{$order->created_at}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 mt-2">
                            <ul class="personal-info">
                                <li>
                                    <span class="title">Payment ID:</span>
                                    <span class="text"><a href="{{route('admin.payments.show',$order->id)}}">{{$order->payment_id}}</a></span>
                                </li>
                                <li>
                                    <span class="title">Payer Email:</span>
                                    <span class="text"><a href="mailto:{{$order->payer_email}}">{{$order->payer_email}}</a></span>
                                </li>
                                <li>
                                    <span class="title">Currency:</span>
                                    <span class="text">{{$order->currency}}</span>
                                </li>
                                <li>
                                    <span class="title">Payment Status:</span>
                                    <span class="text">{{ucfirst($order->payment_status)}}</span>
                                </li>
                                <li>
                                    <span class="title">Payment Status:</span>
                                    <span class="text">{{ucfirst($order->payment_method)}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
</div>
<!-- Page Container -->
@endsection
@section('page-js-link')
<script src="{{asset('/assets/dashboard/js/pages/status.js')}}"></script>
@endsection
@section('page-js') @endsection