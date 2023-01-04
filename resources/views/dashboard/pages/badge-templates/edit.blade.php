@extends('dashboard.layouts.master')
@section('title', '| Edit Template')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Edit Template </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.badge-templates.index')}}">Templates</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Edit Template
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                  @if(request()->query('redirect') && request()->query('badge') )
                <a href="{{ route('admin.badge-templates.create',['redirect'=> request()->query('redirect'),'badge'=>request()->query('badge')]) }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ request()->query('redirect') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
                @else
                <a href="{{ route('admin.badge-templates.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.badge-templates.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
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
                {{ Form::model($template, array('route' => array('admin.badge-templates.update', $template->id), 'method' => 'PUT','files' => true,'id' => 'create-card','class'=>'form-horizontal create-card','data-table'=>'cards_table')) }}
                <div class="card-header">Edit Template 
                    @php 
                        $value =  json_decode($template->value);
                    @endphp 
                </div>
                <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{ Form::label('badge', 'Badge') }}<i class="text-danger">*</i> 
                                                {!!Form::select('badge', $badges,old('badge', $template->badge_id), ['class' => error_field($errors,'badge'),'placeholder' => '-- Select Badge --','readonly' => 'true','disabled' => 'true'])!!}
                                                {!!error_msg($errors,'badge')!!}
                                                <input type="hidden" class="form-control" name="badge" id="badge" value="{{$template->badge_id}}" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{ Form::label('field', 'Template') }}<i class="text-danger">*</i>
                                                {!!Form::select('field', $templates, old('field', $template->field), ['class' => error_field($errors,'field'),'placeholder' => '-- Select Template --','readonly' => 'true','disabled' => 'true'])!!}
                                                {!!error_msg($errors,'field')!!}
                                                <input type="hidden" class="form-control" name="field" id="field" value="{{$template->field}}" />
                                                <input type="hidden" class="form-control" name="redirect" id="redirect" value="{{request()->query('redirect')}}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #template-row -->
                            <div class="template-row">
                            @if($template->field == '1')
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
                                            <img alt="{{$value->title}}" src="{{ asset('/storage/badge-templates/'.$value->image) }}" width="100px">
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

                            @if($template->field == '2')
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
                                            <img alt="{{$value->title}}" src="{{ asset('/storage/badge-templates/'.$value->image) }}" width="100px">
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

                            @if($template->field == '3')
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
                                            <img alt="{{$value->title}}" src="{{ asset('/storage/badge-templates/'.$value->image) }}" width="100px">
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
                                            <img alt="{{$value->title}}" src="{{ asset('/storage/badge-templates/'.$value->second_image) }}" width="100px">
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

                            @if($template->field == '4')
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
                                            <img alt="{{$value->title}}" src="{{ asset('/storage/badge-templates/'.$value->image) }}" width="100px">
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

                            @if($template->field == '5')
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
                                            <img alt="{{$value->title}}" src="{{ asset('/storage/badge-templates/'.$value->image) }}" width="100px">
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

                            @if($template->field == '6')
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
                                            <img alt="{{$value->title}}" src="{{ asset('/storage/badge-templates/'.$value->image) }}" width="100px">
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
                                            <img alt="{{$value->title}}" src="{{ asset('/storage/badge-templates/'.$value->second_image) }}" width="100px">
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