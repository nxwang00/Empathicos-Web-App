<div class="header">
    <!-- Logo -->
    <div class="header-left">
        <a href="{{ route('admin.app.dashboard') }}" class="logo">
            <img src="{{ asset('/storage/settings/'.get_setting_field('logo')) }}" width="40" height="40" alt="">
        </a>
    </div>
    
    <!-- /Logo -->
    <a id="toggle_btn" href="javascript:void(0);">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>
    <!-- Header Title -->
    <div class="page-title-box">
        <h3>{{ get_setting_field('company') }}</h3>
    </div>
    <!-- /Header Title -->
    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
    <!-- Header Menu -->
    <ul class="nav user-menu">
        <!-- Search -->
        {{--
        <li class="nav-item">
            <div class="top-nav-search">
                <a href="javascript:void(0);" class="responsive-search">
                    <i class="fa fa-search"></i>
                </a>
                <form method="get" id="search" action="{{ url('search')}}">
                    <input type="text" name="key" required="true" class="form-control" value="{{ (!empty(request()->query('key'))) ? request()->query('key') : '' }}" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </li> 
        --}}
        <!-- /Search -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}"><i class="fa fa-globe"></i> Visit Site</a>
       </li> 
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img">
                    <img src="{{ asset('/storage/profiles/' . Auth::user()->image) }}" alt="">
                    <span class="status online"></span>
                </span>
                <span>{{Auth::user()->name}}</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('admin.user.profile.show')}}">My Profile</a>
                <a class="dropdown-item" href="{{route('admin.settings.index')}}">Settings</a>
                <a class="dropdown-item" href="{{ route('admin.logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Sign out
                </a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>
    </ul>
    <!-- /Header Menu -->
    <!-- Mobile Menu -->
    <div class="dropdown mobile-user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{route('admin.user.profile.show')}}">My Profile</a>
            <a class="dropdown-item" href="{{ route('admin.logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Sign out
            </a>
            <form id="logout-form-mobile" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    <!-- /Mobile Menu -->
</div>