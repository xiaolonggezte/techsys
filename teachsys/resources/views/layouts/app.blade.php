<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('css/nifty.min.css') }}" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{ asset('css/demo/nifty-demo-icons.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/demo/nifty-demo.min.css') }}" rel="stylesheet">

    <link href="{{ asset('plugins/magic-check/css/magic-check.min.css') }}" rel="stylesheet">




    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{ asset('plugins/pace/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('plugins/pace/pace.min.js') }}"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{ asset('js/nifty.min.js') }}"></script>






    <!--=================================================-->







</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
<div id="container" class="effect  aside-bright mainnav-sm aside-in">

    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
        <div id="navbar-container" class="boxed">

            <!--Brand logo & name-->
            <!--================================-->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand">
                    <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                    <div class="brand-title">
                        <span class="brand-text">Nifty</span>
                    </div>
                </a>
            </div>
            <!--================================-->
            <!--End brand logo & name-->


            <!--Navbar Dropdown-->
            <!--================================-->
            <div class="navbar-content clearfix">
                <ul class="nav navbar-top-links pull-left">

                    <!--Navigation toogle button-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="tgl-menu-btn">
                        <a class="mainnav-toggle" href="#">
                            <i class="demo-pli-view-list"></i>
                        </a>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Navigation toogle button-->



                    <!--Notification dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <i class="demo-pli-bell"></i>
                            <span class="badge badge-header badge-danger"></span>
                        </a>

                        <!--Notification dropdown menu-->
                        <div class="dropdown-menu dropdown-menu-md">
                            <div class="pad-all bord-btm">
                                <p class="text-semibold text-main mar-no">You have 9 notifications.</p>
                            </div>
                            <div class="nano scrollable">
                                <div class="nano-content">
                                    <ul class="head-list">

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <h5 class="pull-left text-main">Database Repair</h5>
                                                    <p class="pull-right">70%</p>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div style="width: 70%;" class="progress-bar">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <h5 class="pull-left text-main">Upgrade Progress</h5>
                                                    <p class="pull-right">10%</p>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div style="width: 10%;" class="progress-bar progress-bar-warning">
                                                        <span class="sr-only">10% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a class="media" href="#">
                                                <span class="badge badge-success pull-right">90%</span>
                                                <div class="media-left">
                                                    <i class="demo-pli-data-settings icon-2x text-main"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mar-no text-nowrap text-main text-semibold">HDD is full</h5>
                                                    <small>50 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a class="media" href="#">
                                                <div class="media-left">
                                                    <i class="demo-pli-file-edit icon-2x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mar-no text-nowrap">Write a news article</h5>
                                                    <small>Last Update 8 hours ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a class="media" href="#">
                                                <span class="label label-danger pull-right">New</span>
                                                <div class="media-left">
                                                    <i class="demo-pli-speech-bubble-7 icon-2x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mar-no text-nowrap">Comment Sorting</h5>
                                                    <small>Last Update 8 hours ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a class="media" href="#">
                                                <div class="media-left">
                                                    <i class="demo-pli-add-user-plus-star icon-2x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mar-no text-nowrap">New User Registered</h5>
                                                    <small>4 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li class="bg-gray">
                                            <a class="media" href="#">
                                                <div class="media-left">
                                                    <img class="img-circle img-sm" alt="Profile Picture" src="img/profile-photos/9.png">
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mar-no text-nowrap">Lucy sent you a message</h5>
                                                    <small>30 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li class="bg-gray">
                                            <a class="media" href="#">
                                                <div class="media-left">
                                                    <img class="img-circle img-sm" alt="Profile Picture" src="img/profile-photos/3.png">
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mar-no text-nowrap">Jackson sent you a message</h5>
                                                    <small>40 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!--Dropdown footer-->
                            <div class="pad-all bord-top">
                                <a href="#" class="btn-link text-dark box-block">
                                    <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications
                                </a>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End notifications dropdown-->



                    <!--Mega dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="mega-dropdown">
                        <a href="#" class="mega-dropdown-toggle">
                            <i class="demo-pli-layout-grid"></i>
                        </a>
                        <div class="dropdown-menu mega-dropdown-menu">
                            <div class="row">
                                <div class="col-sm-4 col-md-3">

                                    <!--Mega menu list-->
                                    <ul class="list-unstyled">
                                        <li class="dropdown-header"><i class="demo-pli-file icon-fw"></i> Pages</li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Search Result</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Sreen Lock</a></li>
                                        <li><a href="#" class="disabled">Disabled</a></li>                                        </ul>

                                </div>
                                <div class="col-sm-4 col-md-3">

                                    <!--Mega menu list-->
                                    <ul class="list-unstyled">
                                        <li class="dropdown-header"><i class="demo-pli-mail icon-fw"></i> Mailbox</li>
                                        <li><a href="#"><span class="pull-right label label-danger">Hot</span>Indox</a></li>
                                        <li><a href="#">Read Message</a></li>
                                        <li><a href="#">Compose</a></li>
                                    </ul>
                                    <p class="pad-top mar-top bord-top text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <!--Mega menu list-->
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#" class="media mar-btm">
                                                <span class="badge badge-success pull-right">90%</span>
                                                <div class="media-left">
                                                    <i class="demo-pli-data-settings icon-2x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text-semibold text-main mar-no">Data Backup</p>
                                                    <small class="text-muted">This is the item description</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="media mar-btm">
                                                <div class="media-left">
                                                    <i class="demo-pli-support icon-2x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text-semibold text-main mar-no">Support</p>
                                                    <small class="text-muted">This is the item description</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="media mar-btm">
                                                <div class="media-left">
                                                    <i class="demo-pli-computer-secure icon-2x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text-semibold text-main mar-no">Security</p>
                                                    <small class="text-muted">This is the item description</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="media mar-btm">
                                                <div class="media-left">
                                                    <i class="demo-pli-map-2 icon-2x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text-semibold text-main mar-no">Location</p>
                                                    <small class="text-muted">This is the item description</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End mega dropdown-->

                </ul>
                <ul class="nav navbar-top-links pull-right">

                    <!--Language selector-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a id="demo-lang-switch" class="lang-selector dropdown-toggle" href="#" data-toggle="dropdown">
                                <span class="lang-selected">
                                    <img class="lang-flag" src="img/flags/united-kingdom.png" alt="English">
                                </span>
                        </a>

                        <!--Language selector menu-->
                        <ul class="head-list dropdown-menu">
                            <li>
                                <!--English-->
                                <a href="#" class="active">
                                    <img class="lang-flag" src="img/flags/united-kingdom.png" alt="English">
                                    <span class="lang-id">EN</span>
                                    <span class="lang-name">English</span>
                                </a>
                            </li>
                            <li>
                                <!--France-->
                                <a href="#">
                                    <img class="lang-flag" src="img/flags/france.png" alt="France">
                                    <span class="lang-id">FR</span>
                                    <span class="lang-name">Fran&ccedil;ais</span>
                                </a>
                            </li>
                            <li>
                                <!--Germany-->
                                <a href="#">
                                    <img class="lang-flag" src="img/flags/germany.png" alt="Germany">
                                    <span class="lang-id">DE</span>
                                    <span class="lang-name">Deutsch</span>
                                </a>
                            </li>
                            <li>
                                <!--Italy-->
                                <a href="#">
                                    <img class="lang-flag" src="img/flags/italy.png" alt="Italy">
                                    <span class="lang-id">IT</span>
                                    <span class="lang-name">Italiano</span>
                                </a>
                            </li>
                            <li>
                                <!--Spain-->
                                <a href="#">
                                    <img class="lang-flag" src="img/flags/spain.png" alt="Spain">
                                    <span class="lang-id">ES</span>
                                    <span class="lang-name">Espa&ntilde;ol</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End language selector-->



                    @if(isset($_SESSION['user']) and null !== $_SESSION['user']))
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                    <span class="ic-user pull-right">
                                        <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                                        <i class="demo-pli-male"></i>
                                    </span>
                                <div class="username hidden-xs">Aaron Chavez</div>
                            </a>


                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">


                                <!-- User dropdown menu -->
                                <ul class="head-list">
                                    <li>
                                        <a href="/register?type=student">
                                            <i class="demo-pli-male icon-lg icon-fw"></i> 学生注册
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/register?type=teacher">
                                            <span class="badge badge-danger pull-right">9</span>
                                            <i class="demo-pli-mail icon-lg icon-fw"></i> 教师注册
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    @else
                        <li id="dropdown-user" class="dropdown">
                            <span>
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                    <div class="username hidden-xs">注册</div>
                                </a>

                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">


                                    <!-- User dropdown menu -->
                                    <ul class="head-list">
                                        <li>
                                            <a href="/register?type=student">
                                                {{--<i class="demo-pli-male icon-lg icon-fw"></i> --}}
                                                学生注册
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/register?type=teacher">
                                                {{--<span class="badge badge-danger pull-right">9</span>--}}
                                                {{--<i class="demo-pli-mail icon-lg icon-fw"></i> Messages--}}
                                                教师注册
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </span>
                            <span>
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                    <div class="username hidden-xs">
                                        <a href="/login">
                                            登录
                                        </a>
                                    </div>
                                </a>

                            </span>
                        </li>

                    @endif
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End user dropdown-->

                    <li>
                        <a href="#" class="aside-toggle navbar-aside-icon">
                            <i class="pci-ver-dots"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!--===================================================-->
    <!--END NAVBAR-->
    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container" align="center">
        {{--<div id="page-head">--}}

            {{--<!--Page Title-->--}}
            {{--<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->--}}
            {{--<div id="page-title">--}}
                {{--<h1 class="page-header text-overflow">Blank page</h1>--}}

                {{--<!--Searchbox-->--}}
                {{--<div class="searchbox">--}}
                    {{--<div class="input-group custom-search-form">--}}
                        {{--<input type="text" class="form-control" placeholder="Search..">--}}
                        {{--<span class="input-group-btn">--}}
                                    {{--<button class="text-muted" type="button"><i class="demo-pli-magnifi-glass"></i></button>--}}
                                {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->--}}
            {{--<!--End page title-->--}}


            {{--<!--Breadcrumb-->--}}
            {{--<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->--}}
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="#">Home</a></li>--}}
                {{--<li><a href="#">Pages</a></li>--}}
                {{--<li class="active">Blank page</li>--}}
            {{--</ol>--}}
            {{--<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->--}}
            {{--<!--End breadcrumb-->--}}

        {{--</div>--}}
        @yield('content')

        <!--Page content-->
        <!--===================================================-->
        {{--<div id="page-content">--}}

            {{--<hr class="new-section-sm bord-no">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-6 col-lg-offset-3">--}}
                    {{--<div class="panel panel-trans text-center">--}}
                        {{--<div class="panel-heading">--}}
                            {{--@yield('content')--}}
                        {{--</div>--}}
                        {{--<div class="panel-body">--}}
                            {{--@yield('content')--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}



        {{--</div>--}}
        <!--===================================================-->
        <!--End page content-->


    </div>

    <!-- FOOTER -->
    <!--===================================================-->
    <footer id="footer">

        <!-- Visible when footer positions are fixed -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="show-fixed pull-right">
            You have <a href="#" class="text-bold text-main"><span class="label label-danger">3</span> pending action.</a>
        </div>



        <!-- Visible when footer positions are static -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="hide-fixed pull-right pad-rgt">
            teach system <strong>developing</strong> .
        </div>



        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <p class="pad-lft">&#0169; 2018 version 1.0 </p>



    </footer>
    <!--===================================================-->
    <!-- END FOOTER -->


    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>
    <!--===================================================-->



</div>
<!--===================================================-->
<!-- END OF CONTAINER -->





</body>
</html>