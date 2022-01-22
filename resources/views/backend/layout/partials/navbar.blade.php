<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

    <!-- SideNav slide-out button -->
    <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
    </div>

    <!-- Breadcrumb -->
    <div class="breadcrumb-dn mr-auto">
        <p>{{Auth::user()->name}} - {{Auth::user()->role == 0 ? "Officer (CCO)" : "Branch Manager (BM)"}}</p>
    </div>

    <div class="d-flex change-mode">

{{--        <div class="ml-auto mb-0 mr-3 change-mode-wrapper">--}}
{{--            <button class="btn btn-outline-black btn-sm" id="dark-mode">Change Mode</button>--}}
{{--        </div>--}}

        <!-- Navbar links -->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">{{Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
{{--                    <form action="{{ route("logout") }}" method="POST">--}}
{{--                        <button type="submit" class="dropdown-item">Log Out</button>--}}

                    <form action="{{ route("logout") }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </div>
            </li>

        </ul>
        <!-- Navbar links -->

    </div>

</nav>
<!-- Navbar -->
