<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav sn-bg-4 fixed">
    <ul class="custom-scrollbar">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
            <div class="text-center">
                <a href="#" class="pl-0"><img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"></a>
            </div>
        </li>

        <!-- Search Form -->
        <li>
            <form class="search-form" role="search">
                <div class="md-form mt-0 waves-light">
                    <input type="text" class="form-control py-2" placeholder="Search">
                </div>
            </form>
        </li>

        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">

                <li>
{{--                    <a class="collapsible-header waves-effect arrow-r">--}}
{{--                        <i class="w-fa fas fa-tachometer-alt"></i>Loan Application<i class="fas fa-angle-down rotate-icon"></i>--}}
{{--                    </a>--}}
{{--                    <div class="collapsible-body">--}}
                        <ul>
                            <li>
                                <a href="{{ route("loan.index") }}" class="waves-effect">Loan Application</a>
                            </li>
                            @if (Auth::user()->role != 0)
                            <li>
                                <a href="{{route("loan.review.index")}}" class="waves-effect">Review Loan Request</a>
                            </li>
                            @endif
                        </ul>
{{--                    </div>--}}
                </li>
            </ul>
        </li>
        <!-- Side navigation links -->

{{--        <li>--}}
{{--            <ul class="collapsible collapsible-accordion">--}}
{{--                <li>--}}
{{--                    <a class="collapsible-header waves-effect arrow-r">--}}
{{--                        <i class="w-fa fas fa-tachometer-alt"></i>Loan Application<i class="fas fa-angle-down rotate-icon"></i>--}}
{{--                    </a>--}}
{{--                    <div class="collapsible-body">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a href="#" class="waves-effect">Loan List</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" class="waves-effect">Approve Loan List</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

    </ul>
    <div class="sidenav-bg mask-strong"></div>
</div>
<!-- Sidebar navigation -->
