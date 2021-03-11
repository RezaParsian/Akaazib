<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light">
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#mymenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mymenu">
        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <div class="col-xl2 col-lg-2 col-md-4  fixed-top" id="sidebar">
                    <a href="#"
                        class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 border-bottom">Akaazib</a>
                    <div class="text-center text-warning border-bottom pb-3" id="username">
                        {{Auth::user()->name}}
                    </div>
                    <ul class="navbar-nav flex-column p-0 mt-2">
                        <li class="nav-item my-1 @yield('dashboard')">
                            <a href="{{route("dashboard")}}" class="nav-link">
                                <i class="fa fa-tachometer"></i>
                                داشبورد
                            </a>
                        </li>

                        <li class="nav-item my-1 @yield('note')">
                            <a href="{{route("notes")}}" class="nav-link">
                                <i class="fa fa-sticky-note"></i>
                                یادداشت
                            </a>
                        </li>

                        <li class="nav-item my-1">
                            <a href="#" class="nav-link">
                                <i class="fa fa-cogs"></i>
                                تنظیمات
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- end of sidebar -->
                <!-- topnav -->
                <div class="col-lg-10 col-md-8 bg-dust mr-auto fixed-top" id="topbar">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <h4 class="text-dark font-weight-bolder mt-2">Akaazib</h4>
                        </div>
                        <div class="col-md-5">

                        </div>
                        <div class="col-md-3">
                            <ul class="navbar-nav">
                                <li class="nav-item ml-auto">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-comments fa-lg"></i>
                                    </a>
                                </li>
                                <li class="nav-item ml-auto">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-bell fa-lg"></i>
                                    </a>
                                </li>
                                <li class="nav-item mr-auto">
                                    <a href="#" class="nav-link" data-toggle="modal" data-target="#singout">
                                        <i class="fa fa-sign-out fa-lg text-danger"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end oftopnav -->
            </div>
        </div>
    </div>
</nav>
<!-- end of navbar -->
