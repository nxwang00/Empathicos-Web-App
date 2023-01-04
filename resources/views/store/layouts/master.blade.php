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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ get_setting_field('company') }} @yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/storage/settings/'.get_setting_field('logo'))}}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/storage/settings/'.get_setting_field('favicon'))}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/store/bootstrap/css/bootstrap.min.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('assets/store/style.css')}}" media="all" />
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('page-css-link')
    @yield('page-css')
  </head>
  
  @if(request()->routeIs('product.show') || request()->routeIs('home.category') || request()->routeIs('badges.show') || request()->routeIs('badge.templates.show'))
  <body class="site-body single-product" style="min-height: 797px;">
    @else
    <body class="site-body">
      @endif
      <!-- ============================================================== -->
      <!-- Main wrapper - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Start Header -->
        <!-- ============================================================== -->
        <header class="navbar navbar-static-top bs-docs-nav" id="top">
          @include('store.includes.header')
        </header>
        <!-- ============================================================== -->
        <!-- End Header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-content">
          @yield('main-content')
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Footer -->
        <!-- ============================================================== -->
        @if(!empty($template->field) && $template->field== '3')
        <footer class="site-footer sf-imgname sf-imgname3">
        @elseif(!empty($template->field) && $template->field== '4')
              <footer class="site-footer sf-imgname sf-imgname4">
        @elseif(!empty($template->field) && $template->field== '5')
    <footer class="site-footer sf-imgname sf-imgname5">
        @elseif(!empty($template->field) && $template->field== '6')
   		<footer class="site-footer sf-imgname sf-imgname6">
            @elseif(request()->routeIs('home'))
            <footer class="site-footer home-sitefooter">
  @else
          <footer class="site-footer">
            @endif
            @include('store.includes.footer')
          </footer>
          <!-- ============================================================== -->
          <!-- End  Footer -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- jQuery -->
        <script src="{{asset('/assets/store/js/jquery-3.2.1.min.js')}}"></script>
        <!-- Bootstrap Core JS -->
        <script src="{{asset('/assets/store/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{asset('/assets/store/bootstrap/js/bootstrap.min.js')}}"></script>
        @yield('page-js-link')
        @yield('page-js')
        <script type="text/javascript">
        jQuery(document).ready(function() {
        jQuery(".site-body").css({ minHeight: jQuery(window).innerHeight() + 'px' });
        });
        </script>
      </body>
    </html>