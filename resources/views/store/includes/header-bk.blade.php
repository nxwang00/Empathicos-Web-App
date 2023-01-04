<div class="container">
    <div class="navbar-header">
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">
            <img src="{{asset('assets/store/images/site-logo.png')}}" alt="logo" />
        </a>
    </div>
    <nav id="bs-navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Blog</a>
            </li>
            <li>
                <a href="#">Product</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">FAQ</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item dropdown has-arrow main-drop">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img">
                        <img src="" alt="">
                        <span class="status online"></span>
                    </span>
                    <span>asaf</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{url('user.profile.show')}}">My Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Sign out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
            @if (Route::has('signin'))
            <li class="active">
                @auth
                <a href="{{ route('home') }}">Home</a>
                @else
                <a href="{{ route('signin') }}">Sign In</a>
                @if (Route::has('signup'))
                <a href="{{ route('signup') }}">Sign Up</a>
                @endif
                @endauth
            </li>
            @endif
        </ul>
    </nav>
</div>