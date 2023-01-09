@extends('dashboard.layouts.master')
@section('title', '| Edit Mini Course')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Edit Mini Course </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.mini-courses.index')}}">Mini Courses</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Edit Mini Course
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                  @if(request()->query('redirect') && request()->query('category') )
                <a href="{{ route('admin.mini-courses.create',['redirect'=> request()->query('redirect'),'category'=>request()->query('category')]) }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ request()->query('redirect') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
                @else
                <a href="{{ route('admin.mini-courses.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.mini-courses.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
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
                {{ Form::model($course, array('route' => array('admin.mini-courses.update', $course->id), 'method' => 'PUT','files' => true,'id' => 'create-card','class'=>'form-horizontal create-card','data-table'=>'cards_table')) }}
                <div class="card-header">Edit Mini Course
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                {{ Form::label('category', 'Category') }}<i class="text-danger">*</i>
                                {!!Form::select('category', $categories, old('category', $course->category_id), ['class' => error_field($errors,'category'),'placeholder' => '-- Select Category --', 'required' => 'true'])!!}
                                {!!error_msg($errors,'category')!!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                {{ Form::label('title', 'Title') }}<i class="text-danger">*</i>
                                {{ Form::text('title', old('title',$course->title) , array('class' => error_field($errors,'title'),'required' => 'true','placeholder'=>'Title here...')) }}
                                {!!error_msg($errors,'title')!!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
                                {{ Form::textarea('description', old('description',$course->description), array('class' => error_field($errors,'description'),'required' => 'true','placeholder'=>'Description here...','rows'=>'3')) }}
                                {!!error_msg($errors,'description')!!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                {{ Form::label('card_pic', 'Select Image') }}
                                <input type="file" class="form-control" name="image" id="image"  accept="image/x-png,image/gif,image/jpeg" />
                                <input type="hidden" class="form-control" name="old_image" id="old_image" value="{{$course->image}}" />
                                {!!error_msg($errors,'image')!!}
                            </div>
                        </div>
                        <div class="col-sm-2">
                            @if(!empty($course->image))
                            <img alt="{{$course->title}}" src="{{ asset('/storage/mini-course/'.$course->image) }}" width="100px">
                            @endif
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