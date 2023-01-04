@if(request()->routeIs('promo'))
<div class="container">
    <div class="navbar-header">
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a href="{{route('home')}}" class="navbar-brand">
            <img src="{{asset('assets/store/images/site-logo.png')}}" alt="logo" />
        </a>
    </div>
    <nav id="bs-navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li>
                <a href="{{route('home')}}">Home </a>
            </li>
            <li>
                <a href="javascript:void(0);">Journeys</a>
            </li>
            <li>
                <a href="javascript:void(0);">Articles </a>
            </li>
            <li>
                <a href="javascript:void(0);">Store </a>
            </li>
            <li>
                <a href="javascript:void(0);">Courses  </a>
            </li>
            <li class=" dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    About
                </a>
                <ul class="dropdown-menu">
                    @foreach($abouts as $key => $about)
                    <li><a href="javascript:void(0);">About {{$about->page}}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="cart">
                <div class="cart-in">
                    <a href="javascript:void(0);">
                        <img src="{{asset('assets/store/images/cart-icon.svg')}}" alt="cart" />
                        <span> {{ Cart::getTotalQuantity() }}</span>
                    </a>
                </div>
            </li>
            <li class="hprofile dropdown">
                <div class="hprofile-in">
                    <div class="hprofile-icon dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('assets/store/images/profile-icon.svg')}}" alt="profile" />
                    </div>
                    <ul class="dropdown-menu">
                      <li><a href="javascript:void(0);">FAQ <img src="{{asset('assets/store/images/send-icon.svg')}}" alt="" /></a></li>
                        <li><a href="javascript:void(0);">Contact<img src="{{asset('assets/store/images/send-icon.svg')}}" alt="" /></a></li>
                        @if (Route::has('signin'))
                        <li><a href="{{ route('signin') }}">Sign In <img src="{{asset('assets/store/images/user-icon.svg')}}" alt="" /></a></li>
                        @if (Route::has('signup'))
                        <li><a href="{{ route('signup') }}">Sign Up <img src="{{asset('assets/store/images/user-icon.svg')}}" alt="" /></a></li>
                        @endif
                        @endif
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</div>
@else
<div class="container">
    <div class="navbar-header">
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a href="{{route('home')}}" class="navbar-brand">
            <img src="{{asset('assets/store/images/site-logo.png')}}" alt="logo" />
        </a>
    </div>
    <nav id="bs-navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a href="{{route('badges')}}">Journeys</a>
            </li>
            <li>
                <a href="{{route('article')}}">Articles</a>
            </li>
            <li>
                <a href="{{route('product')}}">Store</a>
            </li>
            <li>
                <a href="{{route('course')}}">Courses</a>
            </li>
            <li class=" dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    About
                </a>
                <ul class="dropdown-menu">
                    @foreach($abouts as $key => $about)
                    <li><a href="{{ route('about.show',['id' => base64url_encode($about->id)]) }}">About {{$about->page}}</a></li>
                    @endforeach
                </ul>
            </li>
           
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="cart">
                <div class="cart-in">
                    <a href="{{route('items.index')}}">
                        <img src="{{asset('assets/store/images/cart-icon.svg')}}" alt="cart" />
                        <span> {{ Cart::getTotalQuantity() }}</span>
                    </a>
                </div>
            </li>
            <li class="hprofile dropdown">
                <div class="hprofile-in">
                    <div class="hprofile-icon dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('assets/store/images/profile-icon.svg')}}" alt="profile" />
                    </div>
                    <ul class="dropdown-menu">
                        @if (Route::has('signin'))
                        @auth
                        <li><a href="{{route('profile')}}">My Profile <img src="{{asset('assets/store/images/user-icon.svg')}}" alt="" /></a></li>
                       <li><a href="{{route('faqs')}}">FAQ <img src="{{asset('assets/store/images/send-icon.svg')}}" alt="" /></a></li>
                        <li><a href="{{route('contact')}}">Contact<img src="{{asset('assets/store/images/send-icon.svg')}}" alt="" /></a></li>
                        <li><a href="{{route('invitation')}}">Invite Friends <img src="{{asset('assets/store/images/multiple-user-icon.svg')}}" alt="" /></a></li>
                        <li><a href="{{route('favorites')}}">Favorites <img src="{{asset('assets/store/images/heart-icon.svg')}}" alt="" /></a></li>
                        <li><a href="{{route('feedback')}}">Send Feedback <img src="{{asset('assets/store/images/send-icon.svg')}}" alt="" /></a></li>
                       
                       
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Sign Out <img src="{{asset('assets/store/images/send-icon.svg')}}" alt="" />
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        @else
                         <li><a href="{{route('faqs')}}">FAQ <img src="{{asset('assets/store/images/send-icon.svg')}}" alt="" /></a></li>
                        <li><a href="{{route('contact')}}">Contact<img src="{{asset('assets/store/images/send-icon.svg')}}" alt="" /></a></li>
                        <li><a href="{{ route('signin') }}">Sign In <img src="{{asset('assets/store/images/user-icon.svg')}}" alt="" /></a></li>
                        @if (Route::has('signup'))
                        <li><a href="{{ route('signup') }}">Sign Up <img src="{{asset('assets/store/images/user-icon.svg')}}" alt="" /></a></li>
                        @endif
                        @endauth
                        @endif
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</div>
@endif