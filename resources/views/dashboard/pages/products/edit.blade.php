@extends('dashboard.layouts.master')
@section('title', '| Edit Product')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Edit Product </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.products.index')}}">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Edit Product
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.products.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
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
                {{ Form::model($product, array('route' => array('admin.products.update', $product->id), 'method' => 'PUT','files' => true,'id' => 'create-product','class'=>'form-horizontal create-product','data-table'=>'products_table')) }}
                <div class="card-header">Edit Product </div>
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
                                    {{ Form::label('price', 'Price') }}<i class="text-danger">*</i>
                                    {{ Form::text('price', old('price') , array('class' =>error_field($errors,'price'),'placeholder'=>'Enter price here...')) }}
                                    {!!error_msg($errors,'price')!!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
                                    {{ Form::textarea('description',null, array('class' => error_field($errors,'description'),'placeholder'=>'Enter description here...','rows'=>'3')) }}
                                    {!!error_msg($errors,'description')!!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class=" mb-4">
                                        <img alt="{{$product->name}}" src="{{ asset('/storage/products/images/'.$product->image) }}" class="card-img-top">
                                    </div>
                                    {{ Form::label('product_pic', 'Select Product Image') }}
                                    <input type="file" class="form-control" name="image" id="image" />
                                    {!!error_msg($errors,'image')!!}
                                </div>
                                <div class="form-group">
                                    <div class="row mb-4">
                                        @foreach ($product_galleries as $gallery)
                                        <div class="col-md-3 pl-1 pr-1">
                                            <a href="javascript:void(0)" id="{{$gallery->id}}" text="Image"  route="{{route('admin.products.galleries.delete',$gallery->id)}}" class="delete btn btn-danger btn-sm mr-2" style="position: relative;top: 30px;width: auto;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Image"><i class="nav-icon fa fa-trash-o font-weight-bold"></i></a>
                                            <img alt="{{$product->name}}" width="100%" height="80px" src="{{ asset('/storage/products/galleries/'.$gallery->image) }}">
                                        </div>
                                        @endforeach
                                    </div>
                                    {{ Form::label('product_pic', 'Select Gallery Images') }}
                                    <input type="file" class="form-control" multiple="true" name="images[]" id="images" />
                                    {!!error_msg($errors,'images')!!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('categories', 'Categories') }}<i class="text-danger">*</i>
                                    {!!Form::select('categories[]', $categories,old('categories',$product_categories), ['class' => error_field($errors,'categories'),'multiple'=>true,'placeholder' => '-- Select Categories --'])!!}
                                    {!!error_msg($errors,'categories')!!}
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
$(document).on('click', '.delete', function() {
    user_id = $(this).attr('id');
    route = $(this).attr('route');
    text = $(this).attr('text');
    text = text.replace("_", " ");
    table_id = $(this).attr('table');
    Swal.fire({
        title: 'Are you sure?',
        text: "Do yo want to delete " + text + "!",
        type: 'warning',
        showCancelButton: true,
        customClass: {
            confirmButton: 'btn btn-raised btn-raised-danger m-1 ladda-button basic-ladda-button',
            cancelButton: 'btn btn-raised btn-raised-primary m-1 ladda-button basic-ladda-button'
        },
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: route,
                method: "DELETE",
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                },
                beforeSend: function() {
                    Swal.fire({
                        title: 'Deleting..',
                        html: "Please wait...",
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        onOpen: () => {
                            Swal.showLoading();
                        }
                    });
                },
                success: function(data) {
                    if (data.status) {
                        Swal.hideLoading();
                        if (data.status == 'success') {
                            Swal.fire(data.title, data.text, 'success');
                        }
                        if (data.status == 'error') {
                            Swal.fire(data.title, data.text, 'error');
                        }
                        if (data.redirect != 'undefined' && data.redirect != '') {
                           location.reload();
                        }
                        $('#' + table_id).DataTable().draw(true)
                        //$('#'+table_id+'_table').DataTable().ajax.reload();
                    }
                }
            })
        }
    });
});
</script>
@endsection