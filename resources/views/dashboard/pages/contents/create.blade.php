@extends('dashboard.layouts.master')
@section('title', '| Create Content')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Create Content </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.contents.index')}}">Contents</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Create Content
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
                <form method="post"  class="form-horizontal create-card" id="create-card" enctype="multipart/form-data" action="{{ route('admin.contents.store')}}" data-table='cards_table'>
                    @csrf
                    <div class="card-header">Create Content </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {{ Form::label('main_category', 'Main Category') }}<i class="text-danger">*</i>
                                                {!!Form::select('main_category', $main_categories, old('main_category', request()->query('main_category')), ['class' => error_field($errors,'category'),'placeholder' => '-- Select Main Category --'])!!}
                                                {!!error_msg($errors,'category')!!}
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {{ Form::label('category', 'Category') }}<i class="text-danger">*</i>
                                                {!!Form::select('category', $categories,old('category',request()->query('category')), ['class' => error_field($errors,'category'),'placeholder' => '-- Select Category --','required' => 'true'])!!}
                                                {!!error_msg($errors,'category')!!}
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                   {{ Form::label('field', 'Template') }}<i class="text-danger">*</i>
                                                {!!Form::select('field', $templates, old('field'), ['class' => error_field($errors,'field'),'placeholder' => '-- Select Template --','required' => 'true'])!!}
                                                {!!error_msg($errors,'field')!!}
                                                <input type="hidden" class="form-control" name="redirect" id="redirect" value="{{request()->query('redirect')}}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #template-row -->
                            <div class="template-row">

                            </div>
                            <!-- //#template-row -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit"  class="btn btn-primary"><i class="fa fa-check"></i> Save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Page Content -->
</div>
<!-- Page Container -->
@endsection
@section('page-js-link') @endsection
@section('page-js')
<script type="text/javascript">
$(document).on('change', 'select[name="field"]', function(event) {
    event.preventDefault();
    value = $(this).val();
    $.ajax({
        url: '{{route("admin.contents.get")}}',
        method: "POST",
        data: {
            _token: '{{ csrf_token() }}',
            template: value
        },
        beforeSend:function(){
            Swal.fire({
                title: 'Processing..',
                html: "Please wait...",
                showConfirmButton: false,
                allowOutsideClick: false,
                onOpen: () => {
                    Swal.showLoading();
                }
            });
        },
        success: function(data) {
            Swal.hideLoading();
            Toast.fire({
                type: 'success',
                title: 'Success! ',
                html: '<span class="text-success">Template load successfully.</span>'
            });
            $('div.template-row').html(data);
        }
    });
});

$(document).ready(function() {
    // Updating the list of categories based on the selection of Main Category
    $("#main_category").on('change', function() {
        let mainCategoryId = $("#main_category").val();
        let route = `categories/${mainCategoryId}`;
        $.ajax({
            url: route,
            method: "GET",
            success: function(categories) {
                $('#category').empty();
                let ele = `<option value> -- Select Category -- </option>`;
                for (let category of categories) {
                    ele += `
                        <option value="${category.id}">${category.title}</option>
                    `;
                }
                $('#category').append(ele);
            },
            error: function(err) {
                console.log("err::", err)
            }
        })
    })
})
</script>
@endsection