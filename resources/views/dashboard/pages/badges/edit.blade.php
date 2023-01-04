@extends('dashboard.layouts.master')
@section('title', '| Edit Character')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Edit Character </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.badges.index')}}">Characters</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Edit Character
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.badges.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.badges.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
            </div>
        </div>
    </div>
    <!-- Page Header -->
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
                {{ Form::model($badge, array('route' => array('admin.badges.update', $badge->id), 'method' => 'PUT','files' => true,'id' => 'create-card','class'=>'form-horizontal create-card','data-table'=>'cards_table')) }}
                <div class="card-header">Edit Character </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    {{ Form::label('name', 'Name') }}<i class="text-danger">*</i>
                                    {{ Form::text('name', old('name') , array('class' => error_field($errors,'name'),'placeholder'=>'Enter name here...')) }}
                                    {!!error_msg($errors,'name')!!}
                                </div>
                            
                                <div class="form-group">
                                    {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
                                    {{ Form::textarea('description',null, array('class' => error_field($errors,'description'),'placeholder'=>'Enter description here...','rows'=>'3')) }}
                                    {!!error_msg($errors,'description')!!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                        <div class="col-md-4"> <div class=" mb-4">
                                        <img alt="{{$badge->name}}" width="100%" height="auto"  src="{{ asset('/storage/badges/'.$badge->image) }}">
                                    </div>
                                    </div>
                                    </div>
                                    {{ Form::label('card_pic', 'Select Character Image') }}
                                    <input type="file" class="form-control" name="image" id="image" />
                                    {!!error_msg($errors,'image')!!}
                                </div>
                                <div class="form-group">
                                         <div class="row">
                        <div class="col-md-4">
                            <div class=" mb-4">
                                        <img alt="{{$badge->name}}" width="100%" height="auto" src="{{ asset('/storage/badges/'.$badge->journey_image) }}">
                                    </div>
                                    </div>
                                    </div>
                                        {{ Form::label('character_pic', 'Select Journey Page Image') }}
                                    <input type="file" class="form-control" name="journey_image" id="journey_image" />
                                    {!!error_msg($errors,'journey_image')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit"  class="btn btn-primary"><i class="fa fa-check"></i> Save </button>
                </div>
                {{ Form::close()}}
            </div>
        </div>
    </div>
    <!-- Page Content -->
</div>
<!-- Page Container -->
@endsection
@section('page-js-link')
<script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
@endsection
@section('page-js')
<script>
CKEDITOR.replace( 'description' );
</script>
@endsection