@extends('dashboard.layouts.master')
@section('title', '| Edit Article')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Edit Article </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.articles.index')}}">Articles</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Edit Article
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.articles.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.articles.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
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
                {{ Form::model($article, array('route' => array('admin.articles.update', $article->id), 'method' => 'PUT','files' => true,'id' => 'create-article','class'=>'form-horizontal create-article','data-table'=>'articles_table')) }}
                <div class="card-header">Edit Article </div>
                 <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('title', 'Title') }}<i class="text-danger">*</i>
                                    {{ Form::text('title', old('title') , array('class' => error_field($errors,'title'),'placeholder'=>'Enter title here...')) }}
                                    {!!error_msg($errors,'title')!!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
                                    {{ Form::textarea('description',null, array('class' => error_field($errors,'description'),'placeholder'=>'Enter description here...','rows'=>'5')) }}
                                    {!!error_msg($errors,'description')!!}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('article_pic', 'Select Article Image') }} <!-- <i class="text-danger">*</i> -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" name="image" id="image" />
                                        <!-- <span class="form-text text-muted">Recommended image size is 40px x 40px</span> -->
                                        {!!error_msg($errors,'image')!!}
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="img-thumbnail float-right">
                                            <img src="{{ asset('/storage/articles/'.$article->image) }}" width='150px'  height='150px' />
                                        </div>
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