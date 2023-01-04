@extends('dashboard.layouts.master')
@section('title', '| All Templates')
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
                <h3 class="page-title"> All Templates for {{$category->name}} Category </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.badge-categories.index')}}">Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        All Templates
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.templates.create',['redirect'=> route('admin.badge-categories.templates',$category->id),'category'=>$category->id]) }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.badge-categories.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Close</a>
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
    {{--
    <!-- Search Filter -->
    <form method="get" action="">
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating" id="searchByKeyword">
                    <label class="focus-label">Name...</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus select-focus">
                    <select class="select floating" id="searchByStatus">
                        <option value="all"> -- Select Status -- </option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    <label class="focus-label">Status</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <button type="submit" class="btn btn-primary btn-block">Search</button>
            </div>
        </div>
    </form>
    <!-- /Search Filter -->
    --}}
    <!-- Page Content -->
    <div class="row staff-grid-row">
        <div class="col-md-12">
        	@if($templates->count() > 0)
            <div class="activity">
                <div class="activity-box">
                    <ul class="activity-list">
                        @foreach ($templates as $index => $template)
	                        @php 
		                        $value =  json_decode($template->value);
		                    @endphp
	                       	@if($template->field == '1')
		                        <li>
		                            <div class="activity-user">
		                                #{{++$index}}
		                            </div>
		                            <div class="activity-content">
		                                <div class="timeline-content">
		                                       <div class="row">
						                        <div class="col-md-2">
						                                @if(!empty($value->image))
						                                <img alt="{{$value->title}}" src="{{ asset('/storage/templates/'.$value->image) }}" width="100%" height="200px">
						                                @endif
						                        </div>
						                        <div class="col-md-10">
						                            <p class="text-mute">{{$value->title}}</p>
						                            <p class="text-mute">{!!$value->description!!} </p>
						                        </div>
						                    </div>
		                                    <hr>
		                                    <span class="time">Template: <a href="javascript:void(0);"> Template {{ ucfirst($template->field)}}</a> | Created At: <a href="javascript:void(0);">{{$template->created_at}} </a>
											<div class="float-right">
												<a href="{{route('admin.templates.edit',['template'=>$template->id, 'redirect'=> route('admin.badge-categories.templates',$category->id),'category'=>$category->id]) }}" class="text-success p-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Template"><i class="nav-icon fa fa-pencil font-weight-bold"></i> Edit</a> |
			                                    <a href="javascript:void(0)" text="Template" id="{{$template->id}}" route="{{route('admin.templates.destroy',$template->id)}}" class="delete text-danger p-4" data-toggle="tooltip" data-placement="top" title="Trash Template" data-original-title="Trash Template"><i class="nav-icon fa fa-trash-o font-weight-bold"></i> Delete</a>
											</div>
			                                </span>
			                            </div>
			                        </div>
			                    </li>
		                    @endif

		                    @if($template->field == '2')
		                        <li>
		                            <div class="activity-user">
		                                #{{++$index}}
		                            </div>
		                            <div class="activity-content">
		                                <div class="timeline-content">
		                                       <div class="row">
						                        <div class="col-md-2">
						                                @if(!empty($value->image))
						                                <img alt="{{$value->title}}" src="{{ asset('/storage/templates/'.$value->image) }}" width="100%" height="200px">
						                                @endif
						                        </div>
						                        <div class="col-md-10">
						                            <p class="text-mute">{{$value->title}}</p>
						                            <p class="text-mute">{!!$value->short_description!!} </p>
						                            <p class="text-mute">{!!$value->description!!} </p>
						                        </div>
						                    </div>
		                                    <hr>
		                                    <span class="time">Template: <a href="javascript:void(0);"> Template {{ ucfirst($template->field)}}</a> | Created At: <a href="javascript:void(0);">{{$template->created_at}} </a>
											<div class="float-right">
												<a href="{{route('admin.templates.edit',['template'=>$template->id, 'redirect'=> route('admin.badge-categories.templates',$category->id),'category'=>$category->id]) }}" class="text-success p-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Template"><i class="nav-icon fa fa-pencil font-weight-bold"></i> Edit</a> |
			                                    <a href="javascript:void(0)" text="Template" id="{{$template->id}}" route="{{route('admin.templates.destroy',$template->id)}}" class="delete text-danger p-4" data-toggle="tooltip" data-placement="top" title="Trash Template" data-original-title="Trash Template"><i class="nav-icon fa fa-trash-o font-weight-bold"></i> Delete</a>
											</div>
			                                </span>
			                            </div>
			                        </div>
			                    </li>
		                    @endif

		                    @if($template->field == '3')
		                        <li>
		                            <div class="activity-user">
		                                #{{++$index}}
		                            </div>
		                            <div class="activity-content">
		                                <div class="timeline-content">
		                                       <div class="row">
						                        <div class="col-md-2">
						                                @if(!empty($value->image))
						                                <img alt="{{$value->title}}" src="{{ asset('/storage/templates/'.$value->image) }}" width="100%" height="200px">
						                                @endif
						                        </div>
						                        <div class="col-md-8">
						                            <p class="text-mute">{{$value->title}}</p>
						                            <p class="text-mute">{!!$value->description!!} </p>
						                        </div>
						                        <div class="col-md-2">
					                                @if(!empty($value->second_image))
					                                <img alt="{{$value->title}}" src="{{ asset('/storage/templates/'.$value->second_image) }}" width="100%" height="200px">
					                                @endif
						                        </div>
						                    </div>
		                                    <hr>
		                                    <span class="time">Template: <a href="javascript:void(0);"> Template {{ ucfirst($template->field)}}</a> | Created At: <a href="javascript:void(0);">{{$template->created_at}} </a>
											<div class="float-right">
												<a href="{{route('admin.templates.edit',['template'=>$template->id, 'redirect'=> route('admin.badge-categories.templates',$category->id),'category'=>$category->id]) }}" class="text-success p-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Template"><i class="nav-icon fa fa-pencil font-weight-bold"></i> Edit</a> |
			                                    <a href="javascript:void(0)" text="Template" id="{{$template->id}}" route="{{route('admin.templates.destroy',$template->id)}}" class="delete text-danger p-4" data-toggle="tooltip" data-placement="top" title="Trash Template" data-original-title="Trash Template"><i class="nav-icon fa fa-trash-o font-weight-bold"></i> Delete</a>
											</div>
			                                </span>
			                            </div>
			                        </div>
			                    </li>
		                    @endif

	                    	@if($template->field == '4')
		                        <li>
		                            <div class="activity-user">
		                                #{{++$index}}
		                            </div>
		                            <div class="activity-content">
		                                <div class="timeline-content">
		                                       <div class="row">
						                        <div class="col-md-2">
						                                @if(!empty($value->image))
						                                <img alt="{{$value->title}}" src="{{ asset('/storage/templates/'.$value->image) }}" width="100%" height="200px">
						                                @endif
						                        </div>
						                        <div class="col-md-10">
						                            <p class="text-mute">{{$value->title}}</p>
						                            <p class="text-mute">{!!$value->description!!} </p>
						                        </div>
						                    </div>
		                                    <hr>
		                                    <span class="time">Template: <a href="javascript:void(0);"> Template {{ ucfirst($template->field)}}</a> | Created At: <a href="javascript:void(0);">{{$template->created_at}} </a>
											<div class="float-right">
												<a href="{{route('admin.templates.edit',['template'=>$template->id, 'redirect'=> route('admin.badge-categories.templates',$category->id),'category'=>$category->id]) }}" class="text-success p-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Template"><i class="nav-icon fa fa-pencil font-weight-bold"></i> Edit</a> |
			                                    <a href="javascript:void(0)" text="Template" id="{{$template->id}}" route="{{route('admin.templates.destroy',$template->id)}}" class="delete text-danger p-4" data-toggle="tooltip" data-placement="top" title="Trash Template" data-original-title="Trash Template"><i class="nav-icon fa fa-trash-o font-weight-bold"></i> Delete</a>
											</div>
			                                </span>
			                            </div>
			                        </div>
			                    </li>
		                    @endif

		                    @if($template->field == '5')
		                        <li>
		                            <div class="activity-user">
		                                #{{++$index}}
		                            </div>
		                            <div class="activity-content">
		                                <div class="timeline-content">
		                                       <div class="row">
						                        <div class="col-md-2">
						                                @if(!empty($value->image))
						                                <img alt="{{$value->title}}" src="{{ asset('/storage/templates/'.$value->image) }}" width="100%" height="200px">
						                                @endif
						                        </div>
						                        <div class="col-md-10">
						                            <p class="text-mute">{{$value->title}}</p>
						                            <p class="text-mute">{!!$value->short_description!!} </p>
						                            <p class="text-mute">{!!$value->description!!} </p>
						                        </div>
						                    </div>
		                                    <hr>
		                                    <span class="time">Template: <a href="javascript:void(0);"> Template {{ ucfirst($template->field)}}</a> | Created At: <a href="javascript:void(0);">{{$template->created_at}} </a>
											<div class="float-right">
												<a href="{{route('admin.templates.edit',['template'=>$template->id, 'redirect'=> route('admin.badge-categories.templates',$category->id),'category'=>$category->id]) }}" class="text-success p-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Template"><i class="nav-icon fa fa-pencil font-weight-bold"></i> Edit</a> |
			                                    <a href="javascript:void(0)" text="Template" id="{{$template->id}}" route="{{route('admin.templates.destroy',$template->id)}}" class="delete text-danger p-4" data-toggle="tooltip" data-placement="top" title="Trash Template" data-original-title="Trash Template"><i class="nav-icon fa fa-trash-o font-weight-bold"></i> Delete</a>
											</div>
			                                </span>
			                            </div>
			                        </div>
			                    </li>
		                    @endif

		                    @if($template->field == '6')
		                        <li>
		                            <div class="activity-user">
		                                #{{++$index}}
		                            </div>
		                            <div class="activity-content">
		                                <div class="timeline-content">
		                                       <div class="row">
						                        <div class="col-md-2">
						                                @if(!empty($value->image))
						                                <img alt="{{$value->title}}" src="{{ asset('/storage/templates/'.$value->image) }}" width="100%" height="200px">
						                                @endif
						                        </div>
						                        <div class="col-md-8">
						                            <p class="text-mute">{{$value->title}}</p>
						                            <p class="text-mute">{!!$value->description!!} </p>
						                        </div>
						                        <div class="col-md-2">
					                                @if(!empty($value->second_image))
					                                <img alt="{{$value->title}}" src="{{ asset('/storage/templates/'.$value->second_image) }}" width="100%" height="200px">
					                                @endif
						                        </div>
						                    </div>
		                                    <hr>
		                                    <span class="time">Template: <a href="javascript:void(0);"> Template {{ ucfirst($template->field)}}</a> | Created At: <a href="javascript:void(0);">{{$template->created_at}} </a>
											<div class="float-right">
												<a href="{{route('admin.templates.edit',['template'=>$template->id, 'redirect'=> route('admin.badge-categories.templates',$category->id),'category'=>$category->id]) }}" class="text-success p-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Template"><i class="nav-icon fa fa-pencil font-weight-bold"></i> Edit</a> |
			                                    <a href="javascript:void(0)" text="Template" id="{{$template->id}}" route="{{route('admin.templates.destroy',$template->id)}}" class="delete text-danger p-4" data-toggle="tooltip" data-placement="top" title="Trash Template" data-original-title="Trash Template"><i class="nav-icon fa fa-trash-o font-weight-bold"></i> Delete</a>
											</div>
			                                </span>
			                            </div>
			                        </div>
			                    </li>
		                    @endif
                    	@endforeach
	                </ul>
	            </div>
	        </div>
            @else
            <div class="row align-items-center">
	            <div class="col-auto">
	                 <a href="{{ route('admin.templates.create',['redirect'=> route('admin.badge-categories.templates',$category->id),'category'=>$category->id]) }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
	            </div>
	        </div>
            @endif
	    </div>
	</div>
	<!-- Page Content -->
</div>
<!-- Page Container -->
@endsection
@section('page-js-link')
<script src="{{asset('/assets/dashboard/js/pages/trash.js')}}"></script>
@endsection
@section('page-js') @endsection