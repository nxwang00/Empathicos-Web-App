@extends('dashboard.layouts.master')
@section('title', '| Edit Content')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Edit Content </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.contents.index')}}">Contents</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Edit Content
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                  @if(request()->query('redirect') && request()->query('category') )
                <a href="{{ route('admin.contents.create',['redirect'=> request()->query('redirect'),'category'=>request()->query('category')]) }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ request()->query('redirect') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
                @else
                <a href="{{ route('admin.contents.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.contents.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
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
                {{ Form::model($content, array('route' => array('admin.contents.update', $content->id), 'method' => 'PUT','files' => true,'id' => 'create-card','class'=>'form-horizontal create-card','data-table'=>'cards_table')) }}
                <div class="card-header">Edit Content
                    @php
                        $value =  json_decode($content->value);
                    @endphp
                </div>
                <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{ Form::label('category', 'Category') }}<i class="text-danger">*</i>
                                                {!!Form::select('category', $categories,old('category', $content->category_id), ['class' => error_field($errors,'category'),'placeholder' => '-- Select Category --','readonly' => 'true','disabled' => 'true'])!!}
                                                {!!error_msg($errors,'category')!!}
                                                <input type="hidden" class="form-control" name="category" id="category" value="{{$content->category_id}}" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{ Form::label('field', 'Template') }}<i class="text-danger">*</i>
                                                {!!Form::select('field', $templates, old('field', $content->field), ['class' => error_field($errors,'field'),'placeholder' => '-- Select Template --','readonly' => 'true','disabled' => 'true'])!!}
                                                {!!error_msg($errors,'field')!!}
                                                <input type="hidden" class="form-control" name="field" id="field" value="{{$content->field}}" />
                                                <input type="hidden" class="form-control" name="redirect" id="redirect" value="{{request()->query('redirect')}}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #template-row -->
                            <div class="template-row">
                            @if($content->field == '1')
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{ Form::label('title', 'Title') }}<i class="text-danger">*</i>
                                                {{ Form::text('title', old('title',$value->title) , array('class' => error_field($errors,'title'),'required' => 'true','placeholder'=>'Enter title here...')) }}
                                                {!!error_msg($errors,'title')!!}
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {{ Form::label('card_pic', 'Select Image') }}
                                                <input type="file" class="form-control" name="image" id="image"  accept="image/x-png,image/gif,image/jpeg" />
                                                <input type="hidden" class="form-control" name="old_image" id="old_image" value="{{$value->image}}" />
                                                {!!error_msg($errors,'image')!!}
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                             @if(!empty($value->image))
                                            <img alt="{{$value->title}}" src="{{ asset('/storage/contents/'.$value->image) }}" width="100px">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
                                        {{ Form::textarea('description', old('description',$value->description), array('class' => error_field($errors,'description'),'required' => 'true','placeholder'=>'Enter description here...','rows'=>'3')) }}
                                        {!!error_msg($errors,'description')!!}
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if($content->field == '2')
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{ Form::label('title', 'Title') }}<i class="text-danger">*</i>
                                                {{ Form::text('title', old('title',$value->title) , array('class' => error_field($errors,'title'),'placeholder'=>'Enter title here...','required' => 'true')) }}
                                                {!!error_msg($errors,'title')!!}
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {{ Form::label('card_pic', 'Select Image') }}
                                                <input type="file" class="form-control" name="image" id="image"  accept="image/x-png,image/gif,image/jpeg" />
                                                <input type="hidden" class="form-control" name="old_image" id="old_image" value="{{$value->image}}" />
                                                {!!error_msg($errors,'image')!!}
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                             @if(!empty($value->image))
                                            <img alt="{{$value->title}}" src="{{ asset('/storage/contents/'.$value->image) }}" width="100px">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('short_description', 'Short Description') }}
                                        {{ Form::textarea('short_description',old('short_description',$value->short_description) , array('class' => error_field($errors,'short_description'),'placeholder'=>'Enter short description here...','rows'=>'3')) }}
                                        {!!error_msg($errors,'short_description')!!}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
                                        {{ Form::textarea('description',old('description',$value->description) , array('class' => error_field($errors,'description'),'placeholder'=>'Enter description here...','rows'=>'5','required' => 'true')) }}
                                        {!!error_msg($errors,'description')!!}
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if($content->field == '3')
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{ Form::label('title', 'Title') }}<i class="text-danger">*</i>
                                                {{ Form::text('title', old('title',$value->title) , array('class' => error_field($errors,'title'),'placeholder'=>'Enter title here...','required' => 'true')) }}
                                                {!!error_msg($errors,'title')!!}
                                            </div>
                                        </div>
                                         <div class="col-sm-4">
                                            <div class="form-group">
                                                {{ Form::label('card_pic', 'Select Image') }}
                                                <input type="file" class="form-control" name="image" id="image"  accept="image/x-png,image/gif,image/jpeg" />
                                                <input type="hidden" class="form-control" name="old_image" id="old_image" value="{{$value->image}}" />
                                                {!!error_msg($errors,'image')!!}
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                             @if(!empty($value->image))
                                            <img alt="{{$value->title}}" src="{{ asset('/storage/contents/'.$value->image) }}" width="100px">
                                            @endif
                                        </div>
                                         <div class="col-sm-4">
                                            <div class="form-group">
                                                {{ Form::label('card_pic', 'Select Second Image') }}
                                                <input type="file" class="form-control" name="second_image" id="second_image"  accept="image/x-png,image/gif,image/jpeg" />
                                                <input type="hidden" class="form-control" name="old_second_image" id="old_second_image" value="{{$value->second_image}}" />
                                                {!!error_msg($errors,'second_image')!!}
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                             @if(!empty($value->second_image))
                                            <img alt="{{$value->title}}" src="{{ asset('/storage/contents/'.$value->second_image) }}" width="100px">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
                                        {{ Form::textarea('description',old('description',$value->description) , array('class' => error_field($errors,'description'),'placeholder'=>'Enter description here...','rows'=>'5','required' => 'true')) }}
                                        {!!error_msg($errors,'description')!!}
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if($content->field == '4')
                             <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{ Form::label('title', 'Title') }}<i class="text-danger">*</i>
                                                {{ Form::text('title', old('title',$value->title) , array('class' => error_field($errors,'title'),'required' => 'true','placeholder'=>'Enter title here...')) }}
                                                {!!error_msg($errors,'title')!!}
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {{ Form::label('card_pic', 'Select Image') }}
                                                <input type="file" class="form-control" name="image" id="image"  accept="image/x-png,image/gif,image/jpeg" />
                                                <input type="hidden" class="form-control" name="old_image" id="old_image" value="{{$value->image}}" />
                                                {!!error_msg($errors,'image')!!}
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                             @if(!empty($value->image))
                                            <img alt="{{$value->title}}" src="{{ asset('/storage/contents/'.$value->image) }}" width="100px">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
                                        {{ Form::textarea('description', old('description',$value->description), array('class' => error_field($errors,'description'),'required' => 'true','placeholder'=>'Enter description here...','rows'=>'3')) }}
                                        {!!error_msg($errors,'description')!!}
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if($content->field == '5')
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{ Form::label('title', 'Title') }}<i class="text-danger">*</i>
                                                {{ Form::text('title', old('title',$value->title) , array('class' => error_field($errors,'title'),'placeholder'=>'Enter title here...','required' => 'true')) }}
                                                {!!error_msg($errors,'title')!!}
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {{ Form::label('card_pic', 'Select Image') }}
                                                <input type="file" class="form-control" name="image" id="image"  accept="image/x-png,image/gif,image/jpeg" />
                                                <input type="hidden" class="form-control" name="old_image" id="old_image" value="{{$value->image}}" />
                                                {!!error_msg($errors,'image')!!}
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                             @if(!empty($value->image))
                                            <img alt="{{$value->title}}" src="{{ asset('/storage/contents/'.$value->image) }}" width="100px">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('short_description', 'Short Description') }}
                                        {{ Form::textarea('short_description',old('short_description',$value->short_description) , array('class' => error_field($errors,'short_description'),'placeholder'=>'Enter short description here...','rows'=>'3')) }}
                                        {!!error_msg($errors,'short_description')!!}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
                                        {{ Form::textarea('description',old('description',$value->description) , array('class' => error_field($errors,'description'),'placeholder'=>'Enter description here...','rows'=>'5','required' => 'true')) }}
                                        {!!error_msg($errors,'description')!!}
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if($content->field == '6')
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{ Form::label('title', 'Title') }}<i class="text-danger">*</i>
                                                {{ Form::text('title', old('title',$value->title) , array('class' => error_field($errors,'title'),'placeholder'=>'Enter title here...','required' => 'true')) }}
                                                {!!error_msg($errors,'title')!!}
                                            </div>
                                        </div>
                                         <div class="col-sm-4">
                                            <div class="form-group">
                                                {{ Form::label('card_pic', 'Select Image') }}
                                                <input type="file" class="form-control" name="image" id="image"  accept="image/x-png,image/gif,image/jpeg" />
                                                <input type="hidden" class="form-control" name="old_image" id="old_image" value="{{$value->image}}" />
                                                {!!error_msg($errors,'image')!!}
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                             @if(!empty($value->image))
                                            <img alt="{{$value->title}}" src="{{ asset('/storage/contents/'.$value->image) }}" width="100px">
                                            @endif
                                        </div>
                                         <div class="col-sm-4">
                                            <div class="form-group">
                                                {{ Form::label('card_pic', 'Select Second Image') }}
                                                <input type="file" class="form-control" name="second_image" id="second_image"  accept="image/x-png,image/gif,image/jpeg" />
                                                <input type="hidden" class="form-control" name="old_second_image" id="old_second_image" value="{{$value->second_image}}" />
                                                {!!error_msg($errors,'second_image')!!}
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                             @if(!empty($value->second_image))
                                            <img alt="{{$value->title}}" src="{{ asset('/storage/contents/'.$value->second_image) }}" width="100px">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
                                        {{ Form::textarea('description',old('description',$value->description) , array('class' => error_field($errors,'description'),'placeholder'=>'Enter description here...','rows'=>'5','required' => 'true')) }}
                                        {!!error_msg($errors,'description')!!}
                                    </div>
                                </div>
                            </div>
                            @endif
                            </div>
                            <!-- //#template-row -->
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