
    <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="/Management/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="/image/x-icon" href="">
    <link href="/Management/css/css.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/Management/css/fonts-googleapis.css" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/Management/css/vendors-rtl.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/Management/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Management/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="/Management/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="/Management/css/components.css">
    <link rel="stylesheet" type="text/css" href="/Management/css/custom-rtl.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/Management/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="/Management/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="/Management/css/cryptocoins/cryptocoins.css">
    <!-- END: Page CSS-->

    <link rel="stylesheet" href="/Management/css/font-awesome.min.css">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/Management/css/style-rtl.css">
    <!-- END: Custom CSS-->

    @yield('stylesheet')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-customize-header">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                class="fa fa-bars"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="#"><img class="brand-logo"
                                alt="modern admin logo" src="/images/logo.png">
                            <h3 class="brand-text">مبل اصیل</h3>
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                            data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                href="#"><i class="fas fa-bars"></i></a></li>

                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="avatar avatar-online">
                                    <img src="/Management/images/admin.png" alt="avatar">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" style="width: 230px;">

                                    <span class="dropdown-item center" style="display: flex;">
                                        مدیریت : شما وارد شدید
                                    </span>

                                <div class="dropdown-divider"></div><a class="dropdown-item"
                                    href="{{route('logout')}}"><i class="fa fa-check-square mr-1"></i> خروج</a>
                                       <a class="dropdown-item" target="_blank" href="{{route('homeMember')}}">
                                    <i class="fa fa-reply-all mr-1"></i>مشاهده سایت
                                </a>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main mt-1" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item">
                    <a href="{{route('ProductManagement')}}">
                        <i class="fab fa-product-hunt"></i>
                        <span class="menu-title ml-1" data-i18n="">محصولات</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('massagesManagement')}}">
                        <i class="far fa-address-book"></i>
                        <span class="menu-title ml-1" data-i18n="">پیام ها</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('ManagementTahlilSystem')}}">
                        <i class="fas fa-chart-bar"></i>
                        <span class="menu-title ml-1" data-i18n="">تحلیل سیستم</span>
                    </a>
                </li>
            
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        @yield('content')
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->

    <!-- End: Customizer-->

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
                class="float-md-left d-block d-md-inline-block"> کپی رایت &copy; 1398 <a
                    class="text-bold-800 grey darken-2" href="#" target="_blank">CodeAdvance</a></span><span
                class="float-md-right d-none d-lg-block">طراحی شده توسط سانیار <span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="/Management/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Font-->
    <script src="/Management/Fonts/js/all.js"></script>
    <!-- END: Font-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/Management/js/charts/chart.min.js"></script>
    <script src="/Management/js/charts/echarts/echarts.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/Management/js/app-menu.min.js"></script>
    <script src="/Management/js/app.min.js"></script>
    <script src="/Management/js/scripts/customizer.min.js"></script>
    <script src="/Management/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    @yield('script')

</body>
<!-- END: Body-->

</html>
