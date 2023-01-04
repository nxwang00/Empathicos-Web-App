<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li>
                    <a href="{{url('/')}}"><i class="la la-dashboard"></i> <span> Dashboard</span></a>
                </li>
                <li class="menu-title">
                    <span>Administration</span>
                </li>
                <li class="submenu" >
                    <a href="#" {!!( request()->is('users/*') || request()->routeIs('users.index') || request()->routeIs('users.create')) ? 'class="subdrop"' : ''!!} ><i class="la la-user-plus"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                    <ul  {!!(request()->is('users/*') || is_route('users.index') || is_route('users.create')) ? 'style="display: block;"' : ''!!} >
                        <li {!! is_active('users.index') !!}>
                            <a href="{{route('users.index')}}"> All Users </a>
                        </li>
                        <li {!! is_active('users.create') !!}>
                            <a href="{{route('users.create')}}"> Add New </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu" >
                    <a href="#" {!!( request()->is('blogs/*') || request()->routeIs('blogs.index') || request()->routeIs('blogs.create')) ? 'class="subdrop"' : ''!!} ><i class="la la-user-plus"></i> <span> Blogs </span> <span class="menu-arrow"></span></a>
                    <ul  {!!(request()->is('blogs/*') || is_route('blogs.index') || is_route('blogs.create')) ? 'style="display: block;"' : ''!!} >
                        <li {!! is_active('blogs.index') !!}>
                            <a href="{{route('blogs.index')}}"> All Blogs </a>
                        </li>
                        <li {!! is_active('blogs.create') !!}>
                            <a href="{{route('blogs.create')}}"> Add New </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu" >
                    <a href="#" {!!( request()->is('cards/*') || request()->routeIs('cards.index') || request()->routeIs('cards.create') || request()->is('badge-categories/*') || request()->routeIs('badge-categories.index') || request()->routeIs('badge-categories.create')) ? 'class="subdrop"' : ''!!} ><i class="la la-user-plus"></i> <span> Cards </span> <span class="menu-arrow"></span></a>
                    <ul  {!!(request()->is('cards/*') || is_route('cards.index') || is_route('cards.create') || request()->is('badge-categories/*') || request()->routeIs('badge-categories.index') || request()->routeIs('badge-categories.create') || request()->is('reviews/*') || request()->routeIs('reviews.index')) ? 'style="display: block;"' : ''!!} >
                        <li {!! is_active('cards.index') !!}>
                            <a href="{{route('cards.index')}}"> All Cards </a>
                        </li>
                        <li {!! is_active('cards.create') !!}>
                            <a href="{{route('cards.create')}}"> Add New </a>
                        </li>
                        <li {!! is_active('badge-categories.index') !!}>
                            <a href="{{route('badge-categories.index')}}"> All Categories </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu" >
                    <a href="#" {!!( request()->is('products/*') || request()->routeIs('products.index') || request()->routeIs('products.create') || request()->is('categories/*') || request()->routeIs('categories.index') || request()->routeIs('categories.create') || request()->is('reviews/*') || request()->routeIs('reviews.index')) ? 'class="subdrop"' : ''!!} ><i class="la la-user-plus"></i> <span> Products </span> <span class="menu-arrow"></span></a>
                    <ul  {!!(request()->is('products/*') || is_route('products.index') || is_route('products.create') || request()->is('categories/*') || request()->routeIs('categories.index') || request()->routeIs('categories.create') || request()->is('reviews/*') || request()->routeIs('reviews.index')) ? 'style="display: block;"' : ''!!} >
                        <li {!! is_active('products.index') !!}>
                            <a href="{{route('products.index')}}"> All Products </a>
                        </li>
                        <li {!! is_active('products.create') !!}>
                            <a href="{{route('products.create')}}"> Add New </a>
                        </li>
                        <li {!! is_active('categories.index') !!}>
                            <a href="{{route('categories.index')}}"> All Categories </a>
                        </li>
                        <li {!! is_active('reviews.index') !!}>
                            <a href="{{route('reviews.index')}}"> All Reviews </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu" >
                    <a href="#" {!!( request()->is('faqs/*') || request()->routeIs('faqs.index') || request()->routeIs('faqs.create')) ? 'class="subdrop"' : ''!!} ><i class="la la-user-plus"></i> <span> Faqs </span> <span class="menu-arrow"></span></a>
                    <ul  {!!(request()->is('faqs/*') || is_route('faqs.index') || is_route('faqs.create')) ? 'style="display: block;"' : ''!!} >
                        <li {!! is_active('faqs.index') !!}>
                            <a href="{{route('faqs.index')}}"> All Faqs </a>
                        </li>
                        <li {!! is_active('faqs.create') !!}>
                            <a href="{{route('faqs.create')}}"> Add New </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu" >
                    <a href="#" {!!( request()->is('abouts/*') || request()->routeIs('abouts.index') || request()->routeIs('abouts.create')) ? 'class="subdrop"' : ''!!} ><i class="la la-user-plus"></i> <span> Abouts </span> <span class="menu-arrow"></span></a>
                    <ul  {!!(request()->is('abouts/*') || is_route('abouts.index') || is_route('abouts.create')) ? 'style="display: block;"' : ''!!} >
                        <li {!! is_active('abouts.index') !!}>
                            <a href="{{route('abouts.index')}}"> All Abouts </a>
                        </li>
                        <li {!! is_active('abouts.create') !!}>
                            <a href="{{route('abouts.create')}}"> Add New </a>
                        </li>
                    </ul>
                </li>
                 <li>
                    <a href="{{route('feedbacks.index')}}"><i class="la la-dashboard"></i> <span> Feedback</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>