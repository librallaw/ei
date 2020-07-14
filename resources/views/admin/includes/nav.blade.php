<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part">
                <a class="logo" href="index.php">
                    <b>
                        <!--This is dark logo icon--><img src="../plugins/images/pixeladmin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="../plugins/images/pixeladmin-logo-dark.png" alt="home" class="light-logo" />
                    </b>
                    <span class="hidden-xs">
                        <!--This is dark logo text--><img src="../plugins/images/pixeladmin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="../plugins/images/pixeladmin-text-dark.png" alt="home" class="light-logo" />
                     </span>
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                <!-- /.dropdown -->
                <li class="hidden-xs"><a href="javascript:void(0)">New</a></li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <form role="search" class="app-search hidden-xs m-r-10">
                        <input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fa fa-search"></i></a>
                    </form>
                </li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <!-- input-group -->
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li><a href="{{url('/dashboard')}}" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Dashboard</span></a></li>

                <li>
                    <a href="#" class="waves-effect"><i data-icon="a" class="linea-icon linea-ecommerce fa-fw"></i> <span class="hide-menu">Product<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url('/list_product') }}">All Products</a></li>
                        <li><a href="{{ url('/product') }}">Add Product</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Category<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url('/list_category') }}">All Category</a></li>
                        <li><a href="{{ url('/category') }}">Add Category</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i data-icon="]" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Banner<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url('/list_banner') }}">All Banners</a></li>
                        <li><a href="{{ url('/upload_banner') }}">Add Banner</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i data-icon="]" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Index Banner<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url('/list_index') }}">All Index Banners</a></li>
                        <li><a href="{{ url('/upload_index_banner') }}">Add IndexBanner</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i data-icon="." class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Testimonial<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url('/list_testimonial') }}">All Testimonials</a></li>
                        <li><a href="{{ url('/testimonial') }}">Add Testimonial</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i data-icon="]" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Section Image<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url('/list_section') }}">All Ad Banners</a></li>
                        <li><a href="{{ url('/section_image') }}">Add Ad_Banner Image</a></li>
                    </ul>
                </li>

                <li><a href="{{url('/list_order')}}" class="waves-effect"><i data-icon="x" class="linea-icon linea-ecommerce fa-fw" data-icon="v"></i> <span class="hide-menu">Orders</span></a></li>
                {{--<li><a href="{{ route('logout') }}" class="waves-effect"--}}
                       {{--onclick="event.preventDefault();--}}
                       {{--document.getElementById('logout-form').submit();">--}}
                        {{--<i class="icon-logout fa-fw"></i>--}}
                        {{--<span class="hide-menu">Log out</span></a>--}}

                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                        {{--@csrf--}}
                    {{--</form>--}}
                {{--</li>--}}


                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                        {{--{{ __('Logout') }}--}}
                    {{--</a>--}}
                @include('layouts.app')

            </ul>
        </div>
    </div>
</div>
    <!-- Left navbar-header end -->
    <!-- Page Content -->