@extends('dashboard.layouts.master')
@section('title', '| Create Template')
@section('page-css-link') @endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title"> Create Template </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.templates.index')}}">Templates</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Create Template
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                @if(request()->query('redirect') && request()->query('category') )
                <a href="{{ route('admin.templates.create',['redirect'=> request()->query('redirect'),'category'=>request()->query('category')]) }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ request()->query('redirect') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
                @else
                <a href="{{ route('admin.templates.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                <a href="{{ route('admin.templates.index') }}" class="btn btn-mb btn-danger "><i class="fa fa-close"></i> Cancel</a>
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
                <form method="post"  class="form-horizontal create-card" id="create-card" enctype="multipart/form-data" action="{{ route('admin.templates.store')}}" data-table='cards_table'>
                    @csrf
                    <div class="card-header">Create Template </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{ Form::label('category', 'Category') }}<i class="text-danger">*</i>
                                                {!!Form::select('category', $categories,old('category',request()->query('category')), ['class' => error_field($errors,'category'),'placeholder' => '-- Select Category --','required' => 'true'])!!}
                                                {!!error_msg($errors,'category')!!}
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
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
        url: '{{route("admin.templates.get")}}',
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


// $(function() {
//     $('select[name="template"]').change(function(){
//         if($(this).val() == 'first') {
//             $('div#template-first').removeClass('d-none'); 
//             $('div#template-second,div#template-third,div#template-fourth,div#template-fifth,div#template-sixth').addClass('d-none'); 
//         } else if($(this).val() == 'second') {
//             $('div#template-second').removeClass('d-none'); 
//             $('div#template-first,div#template-third,div#template-fourth,div#template-fifth,div#template-sixth').addClass('d-none');
//         } else if($(this).val() == 'third') {
//             $('div#template-third').removeClass('d-none'); 
//             $('div#template-first,div#template-second,div#template-fourth,div#template-fifth,div#template-sixth').addClass('d-none');       
//         } else if($(this).val() == 'fourth') {
//             $('div#template-fourth').removeClass('d-none'); 
//             $('div#template-first,div#template-second,div#template-third,div#template-fifth,div#template-sixth').addClass('d-none');
//         } else if($(this).val() == 'fifth') {
//             $('div#template-fifth').removeClass('d-none'); 
//             $('div#template-first,div#template-second,div#template-third,div#template-fourth,div#template-sixth').addClass('d-none');
//         } else if($(this).val() == 'sixth') {
//             $('div#template-sixth').removeClass('d-none'); 
//             $('div#template-first,div#template-second,div#template-third,div#template-fourth,div#template-fifth').addClass('d-none');
//         } else {
//             $('div#template-first,div#template-second,div#template-third,div#template-fourth,div#template-fifth,div#template-sixth').addClass('d-none');
//         }
//     });
// });

// 'first'  => 'First Templates',
// 'second' => 'Second Templates',
// 'third'  => 'Third Templates',
// 'fourth' => 'Fourth Templates',
// 'fifth'  => 'Fifth Templates',
// 'sixth'  => 'Sixth Templates',
</script>
@endsection