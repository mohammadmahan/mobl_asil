<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <title>ورود به سایت</title>
    <link rel="apple-touch-icon" href="/Management/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="/image/x-icon" href="">
    <link href="/css/css.css" rel="stylesheet">

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

    <!-- BEGIN: Font-->
    <link rel="stylesheet" href=" /css/all.min.css">
    <!-- END: Font-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/Management/css/style-rtl.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu 1-column   blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row mb-1">
        </div>
        <div class="content-body"><section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <div class="p-1"><img src="/Management/images/logo/logo.png" alt="branding logo"></div>
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>ورود به بخش مدیریت</span></h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    @if(session('loginError'))
                                        <div class="alert alert-danger">
                                            <p>
                                                {{session('loginError')}}
                                            </p>
                                        </div>
                                    @endif()
                                    <form class="form-horizontal form-simple" method="post" action="{{route('post.login')}}">
                                        {{csrf_field()}}
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <input type="text" class="form-control" id="user-name" name="user-name" placeholder="نام کاربری" required>
                                            <div class="form-control-position">
                                                <i class="fa fa-user-circle"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left mt-2">
                                            <input type="password" class="form-control" id="user-password" name="user-password" placeholder="پسورد" required>
                                            <div class="form-control-position">
                                                <i class="fa fa-unlock-alt"></i>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-sm-6 col-12 text-center text-sm-left">
                                                <fieldset>
                                                    <input type="checkbox" id="remember-me" name="remember-me" class="chk-remember">
                                                    <label for="remember-me">بخاطر بسپار</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12 text-center text-sm-right"><a href="recover-password.html" class="card-link">فراموش کرده اید؟</a></div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-block">ورود</button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->






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

<!-- BEGIN: Page JS-->
<script src="/Management/js/scripts/pages/dashboard-crypto.min.js"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body-->

<!-- Mirrored from pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/rtl/vertical-menu-template/login-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Nov 2019 06:37:13 GMT -->
</html>
