@extends('dashboard.layouts.master')
@section('title', '| All Mini Courses')
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
                <h3 class="page-title"> All Mini Courses </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.app.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.mini-courses.index')}}">All Mini Courses</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        All Mini Courses
                    </li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('admin.mini-courses.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
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
                <label class="focus-label">Title...</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus select-focus">
                <select class="select floating" id="searchByCategory">
                    <option value="all"> -- Select Category -- </option>
                    @foreach ($categories as $index => $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
                <label class="focus-label">Category</label>
            </div>
        </div>
    </div>
    <!-- /Search Filter -->
    <!-- Page Content -->
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table table-bordered-r table-hover mb-0 datatable" id="admin_cards_table">
                    <thead>
                        <tr>
                            <th>
                                Image
                            </th>
                            <th>
                                Title
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Category
                            </th>
                            <th width="15%">Action</th>
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
        $('#admin_cards_table').DataTable({
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
                url: "{{ route('admin.mini-courses.index') }}",
                serverMethod: 'post',
                data: function(data){
                    data.category = $('#searchByCategory').val();
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
                        <a href="/admin/mini-courses/`+full.id+`" class="avatar-r">
                            <img src="{{ asset('/storage/mini-course') }}/`+ data + `" class="img-thumbnail" alt="No image Found" width="100" >
                        </a>
                    </h2>`;
                },
            },
            {
                data: 'title',
                name: 'title',
                orderable: false,
                render: function(data, type, full, meta){
                    return `<h2 class="table-avatar-r">
                        <a href="/admin/mini-courses/`+full.id+`" class="avatar-r">
                            ${data}
                        </a>
                    </h2>`;
                },
            },
            {
                data: 'description',
                name: 'description'
            },
            {
                data: 'category',
                name: 'category',
                orderable: false,
                render: function(data, type, full, meta){
                    return `<h2 class="table-avatar">
                        <a href="/admin/mini-courses/`+full.id+`"  >`
                            +full.category+`
                        </a>
                    </h2>`;
                },
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
        $('#searchByCategory').change(function(){
            $('#admin_cards_table').DataTable().draw(true);
        });
        $('#searchByKeyword').keyup(function(){
            $('#admin_cards_table').DataTable().draw(true);
        });
    });
</script>
@endsection