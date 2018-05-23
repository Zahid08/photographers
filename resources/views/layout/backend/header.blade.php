<header class="main-header">

    <a href="{{url('/portal/uploadphotos')}}" class="logo">
        <span class="logo-mini"><b>P</b>GRP</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Photo</b> Graphers</span>
    </a>

    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('/backend')}}/images/user.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs"><span>{{\Illuminate\Support\Facades\Session::get('name')}}    <i class="far fa-smile"></i></span></span>
                    </a>
                </li>
                <li class="user user-menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-ellipsis-v occArrow icon-padding" aria-hidden="true"></i>
                    </a>
                </li>

                </li>
            </ul>
        </div>

    </nav>
</header>


