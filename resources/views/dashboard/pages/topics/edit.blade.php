@extends('dashboard.layouts.master')
@section('title', '| Edit Topic')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Edit Topic </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.topics.index')}}">Topics</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Edit Topic
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                @if(request()->query('redirect') && request()->query('category') )
                <a href="{{ route('admin.topics.create',['redirect'=> request()->query('redirect'),'category'=>request()->query('category')]) }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ request()->query('redirect') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
                @else
                <a href="{{ route('admin.topics.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.topics.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
                @endif
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
                {{ Form::model($topic, array('route' => array('admin.topics.update', $topic->id), 'method' => 'PUT','files' => true,'id' => 'create-card','class'=>'form-horizontal create-card','data-table'=>'cards_table')) }}
                <div class="card-header">Edit Topic
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                {{ Form::label('category', 'Category') }}<i class="text-danger">*</i>
                                {!!Form::select('category', $categories, old('category', $topic->category_id), ['class' => error_field($errors,'category'),'placeholder' => '-- Select Category --', 'required' => 'true'])!!}
                                {!!error_msg($errors,'category')!!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                {{ Form::label('title', 'Title') }}<i class="text-danger">*</i>
                                {{ Form::text('title', old('title',$topic->title) , array('class' => error_field($errors,'title'),'required' => 'true','placeholder'=>'Title here...')) }}
                                {!!error_msg($errors,'title')!!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
                                {{ Form::textarea('description', old('description',$topic->description), array('class' => error_field($errors,'description'),'required' => 'true','placeholder'=>'Description here...','rows'=>'4')) }}
                                {!!error_msg($errors,'description')!!}
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
@endsection
@section('page-js')
@endsection