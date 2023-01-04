@extends('dashboard.layouts.master')
@section('title', '| Edit Faq')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Edit Faq </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.faqs.index')}}">Faqs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Edit Faq
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.faqs.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
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
                {{ Form::model($faq, array('route' => array('admin.faqs.update', $faq->id), 'method' => 'PUT','files' => true,'id' => 'create-faq','class'=>'form-horizontal create-faq','data-table'=>'faqs_table')) }}
                <div class="card-header">Edit Faq </div>
                 <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('question', 'Question') }}<i class="text-danger">*</i>
                                    {{ Form::text('question', old('question') , array('class' => error_field($errors,'question'),'placeholder'=>'Enter question here...')) }}
                                    {!!error_msg($errors,'question')!!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('anwser', 'Anwser') }}<i class="text-danger">*</i>
                                    {{ Form::textarea('anwser',null, array('class' => error_field($errors,'anwser'),'placeholder'=>'Enter anwser here...','rows'=>'5')) }}
                                    {!!error_msg($errors,'anwser')!!}
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
        CKEDITOR.replace( 'anwser' );
</script>
@endsection