@extends('dashboard.layouts.master')
@section('name', '| All Categories')
@section('page-css-link')
<!-- Datatable CSS -->
<link rel="stylesheet" href="{{asset('/assets/dashboard/css/dataTables.bootstrap4.min.css')}}">
<!-- Datetimepicker CSS -->
<link rel="stylesheet" href="{{asset('/assets/dashboard/css/bootstrap-datetimepicker.min.css')}}">
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-name"> All Categories </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.badge-categories.index')}}">Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        All Categories
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.badge-categories.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
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
    <!-- Search Filter -->
    <div class="row filter-row">
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating" id="searchByKeyword">
                <label class="focus-label"> Name...</label>
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
    </div>
    <!-- /Search Filter -->
    <!-- Page Content -->
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table table-bordered-r table-hover mb-0 datatable" id="admin_card_categories_table">
                    <thead>
                        <tr>
                            <th>
                                Image
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Description
                            </th>
                            <th width="12%">Template</th>
                            <th>Status</th>
                            <th width="12%">Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <div>
        <div class="row row-xs mt-2" id="filter-toggle">
            <div class="col">
                <span class="mr-2 pt-2 NewDataShowEntryContainerBottom" id="NewDataShowEntryContainerBottom" style="line-height: 35px;;">
                    Showing: 0
                </span>
            </div>
            <div class="col-md-6">
                <span class="float-right NewPaginationContainer" id="NewPaginationContainer" >
                </span>
            </div>
        </div>
    </div>
    <!-- Page Content -->
</div>
<!-- Page Container -->
@endsection
@section('page-js-link')
<!-- Datetimepicker JS -->
<script src="{{asset('/assets/dashboard/js/pages/status.js')}}"></script>
<script src="{{asset('/assets/dashboard/js/pages/trash.js')}}"></script>
<script src="{{asset('/assets/dashboard/js/moment.min.js')}}"></script>
<script src="{{asset('/assets/dashboard/js/bootstrap-datetimepicker.min.js')}}"></script>
<!-- Datatable JS -->
<script src="{{asset('/assets/dashboard/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/assets/dashboard/js/dataTables.bootstrap4.min.js')}}"></script>
@endsection
@section('page-js')
<script type="text/javascript">
    $(document).ready(function(){
        $('#admin_card_categories_table').DataTable({
            processing: true,
            serverSide: true,
            bPaginate     : true,
            pagingType : "first_last_numbers",
            lengthChange: false,
            searching   : false,
            ordering    : false,
            info        : false,
            autoWidth   : false,
            pageLength: "{{config()->get('constants.PER_PAGE_RECORD')}}",
            lengthMenu: [[30, 60, 120, -1], [30, 60, 120, "All"]],
            order: [[ 0, 'desc' ]],
            ajax:{
                url: "{{ route('admin.badge-categories.index') }}",
                serverMethod: 'post',
                data: function(data){
                    data.status = $('#searchByStatus').val();
                    data.keywords = $('#searchByKeyword').val();
                }
            },
            columns:[
             {
                data: 'image',
                name: 'image',
                orderable: false,
                render: function(data, type, full, meta){
                    return `<h2 class="table-avatar-r">
                        <a href="/admin/badge-categories/`+full.id+`" class="avatar-r">
                            <img src="{{ asset('/storage/badge-categories/images/') }}/`+ data + `" class="img-thumbnail" alt="No image Found" width="100">
                        </a>
                    </h2>`;
                },
            },
            {
                data: 'name',
                name: 'name',
                orderable: false,
                render: function(data, type, full, meta){
                    return `<h2 class="table-avatar">
                        <a href="/admin/badge-categories/`+full.id+`"  >`
                            +full.name+` <span>`+full.created_at+`</span>
                        </a>
                    </h2>`;
                },
            },
            {
                data: 'description',
                name: 'description'
            },
            {
                data: 'template',
                name: 'template',
                orderable: false
            },
            {
                data: 'status',
                name: 'status'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false
            }
            ],
            drawCallback: function(settings) {
                var info = this.api().page.info();
                $(".NewPaginationContainer").append($(".dataTables_paginate"));
                $('.NewDataShowEntryContainerBottom').text("Showing "+(info.start+1)+" to "+(info.end)+" of "+info.recordsDisplay+" entries");
                $('[data-toggle="tooltip"]').tooltip();
            },
        });
        $('#searchByStatus').change(function(){
            $('#admin_card_categories_table').DataTable().draw(true);
        });
        $('#searchByKeyword').keyup(function(){
            $('#admin_card_categories_table').DataTable().draw(true);
        });
    });
</script>
@endsection