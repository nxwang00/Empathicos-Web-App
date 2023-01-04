<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li {!! is_active('admin.app.dashboard') !!}>
                    <a href="{{route('admin.app.dashboard')}}"><i class="la la-dashboard"></i> <span> Dashboard</span></a>
                </li>
                <li class="menu-title">
                    <span>Home Categories</span>
                </li>
                <li class="submenu" >
                    <a href="#" {!!(request()->is('admin/badge-categories/*') || request()->routeIs('admin.badge-categories.index') || request()->routeIs('admin.badge-categories.create') || request()->routeIs('admin.main-categories.create') || request()->routeIs('admin.main-categories.index') || request()->routeIs('admin.main-subcategories.create') || request()->routeIs('admin.main-subcategories.index') ) ? 'class="subdrop"' : ''!!} ><i class="la la-bars"></i> <span> Categories </span> <span class="menu-arrow"></span></a>
                    <ul  {!!(request()->is('admin/badge-categories/*') || request()->routeIs('admin.badge-categories.index') || request()->routeIs('admin.badge-categories.create') || request()->routeIs('admin.main-categories.create') || request()->routeIs('admin.main-categories.index') || request()->routeIs('admin.main-subcategories.create') || request()->routeIs('admin.main-subcategories.index'))  ? 'style="display: block;"' : ''!!} >
                       
                        <li {!! is_active('admin.badge-categories.index') !!}>
                            <a href="{{route('admin.badge-categories.index')}}"> All Categories </a>
                        </li>
                        <li {!! is_active('admin.badge-categories.create') !!}>
                            <a href="{{route('admin.badge-categories.create')}}">  Add New </a>
                        </li>
                    </ul>
                </li>
                <li {!! is_active('admin.main-categories.index') !!}>
                        <a href="{{route('admin.main-categories.index')}}"><i class="la la-mobile"></i> <span>Categories<small>(App Dashboard)</small></a>
                </li>
                 <li {!! is_active('admin.main-subcategories.index') !!}>
                        <a href="{{route('admin.main-subcategories.index')}}"><i class="la la-cubes"></i> <span>Sub Categories<small>(App)</small></a>
                </li>
                <li class="submenu" >
                    <a href="#" {!!( request()->is('admin/templates/*') || request()->routeIs('admin.templates.index') || request()->routeIs('admin.templates.create')) ? 'class="subdrop"' : ''!!} ><i class="la la-th-list"></i> <span> Templates </span> <span class="menu-arrow"></span></a>
                    <ul  {!!(request()->is('admin/templates/*') || is_route('admin.templates.index') || is_route('admin.templates.create')) ? 'style="display: block;"' : ''!!} >
                        <li {!! is_active('admin.templates.index') !!}>
                            <a href="{{route('admin.templates.index')}}"> All Templates </a>
                        </li>
                        <li {!! is_active('admin.templates.create') !!}>
                            <a href="{{route('admin.templates.create')}}"> Add New </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Products</span>
                </li>
                <li  {!! is_active('admin.payments.index') !!}>
                    <a href="{{route('admin.payments.index')}}"><i class="la la-dashboard"></i> <span> Orders</span></a>
                </li>
                <li class="submenu" >
                    <a href="#" {!!( request()->is('admin/products/*') || request()->routeIs('admin.products.index') || request()->routeIs('admin.products.create')) ? 'class="subdrop"' : ''!!} ><i class="la la-shopping-cart"></i> <span> Products </span> <span class="menu-arrow"></span></a>
                    <ul  {!!(request()->is('admin/products/*') || is_route('admin.products.index') || is_route('admin.products.create')) ? 'style="display: block;"' : ''!!} >
                        <li {!! is_active('admin.products.index') !!}>
                            <a href="{{route('admin.products.index')}}"> All Products </a>
                        </li>
                        <li {!! is_active('admin.products.create') !!}>
                            <a href="{{route('admin.products.create')}}"> Add New </a>
                        </li>
                    </ul>
                </li>
                <li  {!! is_active('admin.categories.index') !!}>
                    <a href="{{route('admin.categories.index')}}"><i class="la la-cube"></i> <span> Categories</span></a>
                </li>
                <li  {!! is_active('admin.reviews.index') !!}>
                    <a href="{{route('admin.reviews.index')}}"><i class="la la-crosshairs"></i> <span> Reviews</span></a>
                </li>
                <!--Audio Course--->
                
                <li class="menu-title">
                    <span>Audio Courses</span>
                </li>
                <li  {!! is_active('admin.audio-course.index') !!}>
                    <a href="{{route('admin.audio-course.index')}}"><i class="la la-headphones"></i> <span>Audio Courses</span></a>
                </li>
                <li  {!! is_active('admin.audio-course-category.index') !!}>
                    <a href="{{route('admin.audio-course-category.index')}}"><i class="la la-sitemap"></i> <span> Audio Course Categories</span></a>
                </li>
                
                <!--Audio Course--->
                
                
                <li class="menu-title" sr-only="Badges">
                    <span sr-only="Badges">Characters</span>
                </li>
                <li class="submenu" sr-only="Badges">
                    <a href="#" {!!( request()->is('admin/badges/*') || request()->routeIs('admin.badges.index') || request()->routeIs('admin.badges.create')) ? 'class="subdrop"' : ''!!} ><i class="la la-certificate"></i> <span> Characters </span> <span class="menu-arrow"></span></a>
                    <ul  {!!(request()->is('admin/badges/*') || is_route('admin.badges.index') || is_route('admin.badges.create')) ? 'style="display: block;"' : ''!!} >
                        <li {!! is_active('admin.badges.index') !!}>
                            <a href="{{route('admin.badges.index')}}" sr-only="Badges"> All Characters </a>
                        </li>
                        <li {!! is_active('admin.badges.create') !!}>
                            <a href="{{route('admin.badges.create')}}"> Add New </a>
                        </li>
                    </ul>
                </li>
                 <li class="submenu" >
                    <a href="#" {!!( request()->is('admin/badge-templates/*') || request()->routeIs('admin.badge-templates.index') || request()->routeIs('admin.badge-templates.create')) ? 'class="subdrop"' : ''!!} ><i class="la la-th-list"></i> <span> Templates </span> <span class="menu-arrow"></span></a>
                    <ul  {!!(request()->is('admin/badge-templates/*') || is_route('admin.badge-templates.index') || is_route('admin.badge-templates.create')) ? 'style="display: block;"' : ''!!} >
                        <li {!! is_active('admin.badge-templates.index') !!}>
                            <a href="{{route('admin.badge-templates.index')}}"> All Templates </a>
                        </li>
                        <li {!! is_active('admin.badge-templates.create') !!}>
                            <a href="{{route('admin.badge-templates.create')}}"> Add New </a>
                        </li>
                    </ul>
                </li>
                {{--
                <li class="submenu" >
                    <a href="#" {!!( request()->is('admin/badge-spirits/*') || request()->routeIs('admin.badge-spirits.index') || request()->routeIs('admin.badge-spirits.create')) ? 'class="subdrop"' : ''!!} ><i class="la la-th-list"></i> <span> Badge Spirits </span> <span class="menu-arrow"></span></a>
                    <ul  {!!(request()->is('admin/badge-spirits/*') || is_route('admin.badge-spirits.index') || is_route('admin.badge-spirits.create')) ? 'style="display: block;"' : ''!!} >
                        <li {!! is_active('admin.badge-spirits.index') !!}>
                            <a href="{{route('admin.badge-spirits.index')}}"> All Spirits </a>
                        </li>
                        <li {!! is_active('admin.badge-spirits.create') !!}>
                            <a href="{{route('admin.badge-spirits.create')}}"> Add New </a>
                        </li>
                    </ul>
                </li>
                --}}
                
                <li class="menu-title">
                    <span>Site</span>
                </li>
                <li  {!!( request()->is('admin/articles/*') || request()->routeIs('admin.articles.index') || request()->routeIs('admin.articles.create')) ? 'class="active"' : ''!!} >
                    <a href="{{route('admin.articles.index')}}"><i class="la la-recycle"></i> <span> Articles</span></a>
                </li>
                <li  {!!( request()->is('admin/abouts/*') || request()->routeIs('admin.abouts.index') || request()->routeIs('admin.abouts.create')) ? 'class="active"' : ''!!} >
                    <a href="{{route('admin.abouts.index')}}"><i class="la la-users"></i> <span> Abouts</span></a>
                </li>
                <li  {!!( request()->is('admin/faqs/*') || request()->routeIs('admin.faqs.index') || request()->routeIs('admin.faqs.create')) ? 'class="active"' : ''!!} >
                    <a href="{{route('admin.faqs.index')}}"><i class="la la-list-ul"></i> <span> Faqs</span></a>
                </li>
                <li {!! is_active('admin.feedbacks.index') !!}>
                    <a href="{{route('admin.feedbacks.index')}}"><i class="la la-search"></i> <span> Feedbacks</span></a>
                </li>
                
                <li class="menu-title">
                    <span>Administration</span>
                </li>
                <li  {!!( request()->is('admin/users') || request()->routeIs('admin.users.index') || request()->routeIs('admin.users.create')) ? 'class="active"' : ''!!} >
                    <a href="{{route('admin.users.index')}}"><i class="la la-crosshairs"></i> <span> Users</span></a>
                </li>
                
                <li  {!!( request()->is('admin/users/notification') || request()->routeIs('admin.users.notificationcreate') || request()->routeIs('admin.users.notificationcreate')) ? 'class="active"' : ''!!} >
                    <a href="{{route('admin.users.notificationcreate')}}"><i class="la la-bell"></i> <span> App Notification</span></a>
                </li>
                
                <li {!! is_active('admin.settings.index') !!}>
                    <a href="{{route('admin.settings.index')}}"><i class="la la-cog"></i> <span> Settings</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>