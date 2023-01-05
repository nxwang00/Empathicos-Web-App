@extends('dashboard.layouts.master')
@section('title', '| Content Details')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Content Details</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.contents.index')}}">Contents</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Content Details
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.contents.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.contents.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Close</a>
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
                    Content Details
                    @php
                        $value =  json_decode($content->value);
                    @endphp
                </div>

                @if($content->field == '1')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="text-muted">Title</label>
                            <p class="text-mute">{{$value->title}}</p>
                            <label class="text-muted">Description</label>
                            <p class="text-mute">{!!$value->description!!} </p>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                @if(!empty($value->image))
                                <img alt="{{$value->title}}" src="{{ asset('/storage/contents/'.$value->image) }}" class="card-img-top">
                                @endif
                                <div class="card-footer text-center">
                                    <p class="mb-0"><a href="{{route('admin.contents.show',$content->id)}}">{{$value->title}}</a> </p>
                                    <p class="mb-0  text-muted"> {{$category}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if($content->field == '2')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="text-muted">Title</label>
                            <p class="text-mute">{{$value->title}}</p>
                            <label class="text-muted">Short Description</label>
                            <p class="text-mute">{!!$value->short_description!!} </p>
                            <label class="text-muted">Description</label>
                            <p class="text-mute">{!!$value->description!!} </p>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                @if(!empty($value->image))
                                <img alt="{{$value->title}}" src="{{ asset('/storage/contents/'.$value->image) }}" class="card-img-top">
                                @endif
                                <div class="card-footer text-center">
                                    <p class="mb-0"><a href="{{route('admin.contents.show',$content->id)}}">{{$value->title}}</a> </p>
                                    <p class="mb-0  text-muted"> {{$category}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif


                @if($content->field == '3')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="text-muted">Title</label>
                            <p class="text-mute">{{$value->title}}</p>
                            <label class="text-muted">Description</label>
                            <p class="text-mute">{!!$value->description!!} </p>
                            <label class="text-muted">Second Image</label>
                             <p class="text-mute">@if(!empty($value->second_image))
                                <img alt="{{$value->title}}" src="{{ asset('/storage/contents/'.$value->second_image) }}" width="100px" >
                                @endif
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                @if(!empty($value->image))
                                <img alt="{{$value->title}}" src="{{ asset('/storage/contents/'.$value->image) }}" class="card-img-top">
                                @endif


                                <div class="card-footer text-center">
                                    <p class="mb-0"><a href="{{route('admin.contents.show',$content->id)}}">{{$value->title}}</a> </p>
                                    <p class="mb-0  text-muted"> {{$category}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if($content->field == '4')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="text-muted">Title</label>
                            <p class="text-mute">{{$value->title}}</p>
                            <label class="text-muted">Description</label>
                            <p class="text-mute">{!!$value->description!!} </p>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                @if(!empty($value->image))
                                <img alt="{{$value->title}}" src="{{ asset('/storage/contents/'.$value->image) }}" class="card-img-top">
                                @endif
                                <div class="card-footer text-center">
                                    <p class="mb-0"><a href="{{route('admin.contents.show',$content->id)}}">{{$value->title}}</a> </p>
                                    <p class="mb-0  text-muted"> {{$category}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if($content->field == '5')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="text-muted">Title</label>
                            <p class="text-mute">{{$value->title}}</p>
                            <label class="text-muted">Short Description</label>
                            <p class="text-mute">{!!$value->short_description!!} </p>
                            <label class="text-muted">Description</label>
                            <p class="text-mute">{!!$value->description!!} </p>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                @if(!empty($value->image))
                                <img alt="{{$value->title}}" src="{{ asset('/contents/contents/'.$value->image) }}" class="card-img-top">
                                @endif
                                <div class="card-footer text-center">
                                    <p class="mb-0"><a href="{{route('admin.contents.show',$content->id)}}">{{$value->title}}</a> </p>
                                    <p class="mb-0  text-muted"> {{$category}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif


                @if($content->field == '6')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="text-muted">Title</label>
                            <p class="text-mute">{{$value->title}}</p>
                            <label class="text-muted">Description</label>
                            <p class="text-mute">{!!$value->description!!} </p>
                            <label class="text-muted">Second Image</label>
                             <p class="text-mute">@if(!empty($value->second_image))
                                <img alt="{{$value->title}}" src="{{ asset('/storage/contents/'.$value->second_image) }}" width="100px" >
                                @endif
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                @if(!empty($value->image))
                                <img alt="{{$value->title}}" src="{{ asset('/storage/contetns/'.$value->image) }}" class="card-img-top">
                                @endif


                                <div class="card-footer text-center">
                                    <p class="mb-0"><a href="{{route('admin.contents.show',$content->id)}}">{{$value->title}}</a> </p>
                                    <p class="mb-0  text-muted"> {{$category}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif


                <div class="card-footer">
                    <a href="{{ route('admin.contents.edit',$content->id) }} " class="btn btn-dark"><i class="fa fa-pencil"></i> Edit</a>
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