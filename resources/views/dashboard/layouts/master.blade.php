<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="DET - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="DET - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ get_setting_field('company') }} @yield('title')</title>
     <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('/storage/settings/'.get_setting_field('logo')) }}">
        <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('/storage/settings/'.get_setting_field('favicon'))}}">
         <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/assets/dashboard/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('/assets/dashboard/css/font-awesome.min.css')}}">
    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{asset('/assets/dashboard/css/line-awesome.min.css')}}">
    <!-- Chart CSS -->
    {{-- <link rel="stylesheet" href="{{asset('/assets/dashboard/plugins/morris/morris.css')}}"> --}}
     <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{asset('/assets/dashboard/css/select2.min.css')}}">

     <!-- Sweetalert2 CSS -->
    <link rel="stylesheet" href="{{asset('/assets/dashboard/plugins/sweetalert/css/sweetalert2.min.css')}}">

     <!-- Toastr CSS -->
    <link rel="stylesheet" href="{{asset('/assets/dashboard/plugins/toastr/css/toastr.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('/assets/dashboard/css/style.css')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('/assets/dashboard/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('/assets/dashboard/js/respond.min.js')}}"></script>
    <![endif]-->
    @yield('page-css-link')
    @yield('page-css')
  </head>
  <body>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div class="main-wrapper">
      <!-- ============================================================== -->
      <!-- Start Header sidebar -->
      <!-- ============================================================== -->
      @include('dashboard.includes.header')
      <!-- ============================================================== -->
      <!-- Start  Header sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!--Start Left sidebar -->
      <!-- ============================================================== -->
      @include('dashboard.includes.sidebar')
      <!-- ============================================================== -->
      <!-- End Left sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Start Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        @yield('main-content')
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right sidebar -->
      <!-- ============================================================== -->
      <!-- .right-sidebar -->
      <!-- ============================================================== -->
      <!-- End Right sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Start Footer sidebar -->
      <!-- ============================================================== -->
      @include('dashboard.includes.footer')
      <!-- ============================================================== -->
      <!-- Start  Footer sidebar -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- jQuery -->
    <script src="{{asset('/assets/dashboard/js/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap Core JS -->
    <script src="{{asset('/assets/dashboard/js/popper.min.js')}}"></script>
    <script src="{{asset('/assets/dashboard/js/bootstrap.min.js')}}"></script>
    <!-- Slimscroll JS -->
    <script src="{{asset('/assets/dashboard/js/jquery.slimscroll.min.js')}}"></script>
    <!-- Select2 JS -->
    <script src="{{asset('/assets/dashboard/js/select2.min.js')}}"></script>
    <!-- Chart JS -->
    {{-- <script src="{{asset('/assets/dashboard/plugins/morris/morris.min.js')}}"></script> --}}
    {{-- <script src="{{asset('/assets/dashboard/plugins/raphael/raphael.min.js')}}"></script> --}}
    {{-- <script src="{{asset('/assets/dashboard/js/chart.js')}}"></script> --}}

    <!-- Sweet Alert JS -->
    <script src="{{asset('/assets/dashboard/plugins/sweetalert/js/sweetalert.script.js')}}"></script>
    <script src="{{asset('/assets/dashboard/plugins/sweetalert/js/sweetalert2.min.js')}}"></script>

    <!-- Toastr JS -->
    <script src="{{asset('/assets/dashboard/plugins/toastr/js/toastr.min.js')}}" type="text/javascript"></script>
    <!-- Custom JS -->
    <script src="{{asset('/assets/dashboard/js/app.js')}}"></script>
    @yield('page-js-link')
    @yield('page-js')
    {{--
    @if (Session::has('status') && (Session::get('status') == 'info'))
      <script type="text/javascript">
        Toast.fire({
            type: 'info',
            title: 'Info! ',
            html: '<span class="text-info">{{Session::get('text')}}</span>'
        });
      </script>
    @endif
    @if (Session::has('status') && (Session::get('status') == 'message'))
      <script type="text/javascript">
        Toast.fire({
            type: 'info',
            title: 'Warning! ',
            html: '<span class="text-info">{{Session::get('text')}}</span>'
        });
      </script>
    @endif
    @if (Session::has('status') && (Session::get('status') == 'success'))
      <script type="text/javascript">
        Toast.fire({
            type: 'success',
            title: 'Success! ',
            html: '<span class="text-success">{{Session::get('text')}}</span>'
        });
      </script>
    @endif
    @if (Session::has('status') && (Session::get('status') == 'error'))
      <script type="text/javascript">
        Toast.fire({
            type: 'error',
            title: 'Error! ',
            html: '<span class="text-danger">{{Session::get('text')}}</span>'
        });
      </script>
    @endif 
    --}}
  </body>
</html>
