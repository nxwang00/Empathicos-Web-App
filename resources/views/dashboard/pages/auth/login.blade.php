<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="DET - Bootstrap Admin Template">
        <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="DET - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>{{get_setting_field('company')}} | Login </title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('/storage/settings/'.get_setting_field('logo')) }}">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('/storage/settings/'.get_setting_field('favicon'))}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('/assets/dashboard/css/bootstrap.min.css')}}">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('/assets/dashboard/css/font-awesome.min.css')}}">
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('/assets/dashboard/css/style.css')}}">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="{{asset('/assets/dashboard/js/html5shiv.min.js')}}"></script>
        <script src="{{asset('/assets/dashboard/js/respond.min.js')}}"></script>
        <![endif]-->
    </head>
    <body class="account-page">
        <!-- Main Wrapper -->
        <div class="main-wrapper">
            <div class="account-content">
                <div class="container">
                    <!-- Account Logo -->
                    <div class="account-logo">
                        <a href="{{ route('admin.login') }}"><img src="{{ asset('/storage/settings/'.get_setting_field('logo')) }}" alt="{{get_setting_field('company')}}"></a>
                    </div>
                    <!-- /Account Logo -->
                    <div class="account-box">
                        <div class="account-wrapper">
                            <h3 class="account-title">Login</h3>
                            <p class="account-subtitle">Access to our dashboard </p>
                            <!-- Account Form -->
                            <form method="POST" action="{{ route('admin.login') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    {{ Form::label('email', 'Email Address') }}<i class="text-danger">*</i>
                                    {{ Form::text('email', old('email') , array('class' => error_field($errors,'email'),'placeholder'=>'Enter email here...')) }}
                                    {!!error_msg($errors,'email')!!}
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            {{ Form::label('password', 'Password') }}<i class="text-danger">*</i>
                                        </div>
                                        <!--
                                        <div class="col-auto">
                                            <a class="text-muted" href="#">
                                                Forgot password?
                                            </a>
                                        </div>
                                        -->
                                    </div>
                                    {{ Form::password('password', array('class' => error_field($errors,'password'),'placeholder'=>'Enter password here...')) }}
                                    {!!error_msg($errors,'password')!!}
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-primary account-btn" type="submit">Login</button>
                                </div>
                                <!--
                                <div class="account-footer">
                                    <p>Don't have an account yet? <a href="#">Register</a></p>
                                </div>
                                -->
                            </form>
                            <!-- /Account Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Wrapper -->
        <!-- jQuery -->
        <script src="{{asset('/assets/dashboard/js/jquery-3.2.1.min.js')}}"></script>
        <!-- Bootstrap Core JS -->
        <script src="{{asset('/assets/dashboard/js/popper.min.js')}}"></script>
        <script src="{{asset('/assets/dashboard/js/bootstrap.min.js')}}"></script>
        <!-- Custom JS -->
        <script src="{{asset('/assets/dashboard/js/app.js')}}"></script>
    </body>
</html>