<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.png" />

    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="/fonts/themify/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

    <link rel="stylesheet" type="text/css" href="/fonts/elegant-font/html-css/style.css">

    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="/vendor/slick/slick.css">

    <link rel="stylesheet" type="text/css" href="/vendor/lightbox2/css/lightbox.min.css">


    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/all.min.css">

    @yield('style')
</head>

<body class="animsition">

<header class="header1">

    <div class="container-menu-header">
        <div class="topbar">
            <div class="topbar-social">
                <!-- <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a> -->
            </div>
            <div class="topbar-child2">
					<span class="topbar-email">
                    @if($Abouts && count($Abouts)>0)
                       @foreach($Abouts as $About) 
						<a href="#" class="__cf_email__ font-13">
                       {{$About->email}}
                       </a>
                       @endforeach
                       @endif
					</span>
            </div>
        </div>
        <div class="wrap_header">
            <a href="#" class="logo">
                <img src="/images/icons/logo.png" alt="IMG-LOGO">
            </a>
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li class="home-asli-menu">
                            <a href="{{route('homeMember')}}">صفحه اصلی</a>
                        </li>
                        <li class="sale-noti">
                            <a href="{{route('allProductMember')}}">محصولات ما</a>
                        </li>
                        <li class="about-us-menu">
                            <a href="{{route('aboutMember')}}">درباره ما</a>
                        </li>
                        <li class="contact-us-menu">
                            <a href="{{route('contactMember')}}">تماس با ما</a>
                        </li>
                    </ul>
                </nav>
            </div>

            
        </div>
    </div>

    <div class="wrap_header_mobile">

        <a href="index-2.html" class="logo-mobile">
            <img src="/images/icons/logo.png" alt="IMG-LOGO">
        </a>

        <div class="btn-show-menu">

            <div class="header-icons-mobile">
                <a href="#" class="header-wrapicon1 dis-block">
                    <img src="/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>
                <span class="linedivide2"></span>
                <div class="header-wrapicon2">
                    <img src="/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown"
                         alt="ICON">
                    <span class="header-icons-noti">0</span>

                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="/images/item-cart-01.jpg" alt="IMG">
                                </div>
                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        White Shirt With Pleat Detail Back
                                    </a>
                                    <span class="header-cart-item-info">
											1 x $19.00
										</span>
                                </div>
                            </li>
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="/images/item-cart-02.jpg" alt="IMG">
                                </div>
                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Converse All Star Hi Black Canvas
                                    </a>
                                    <span class="header-cart-item-info">
											1 x $39.00
										</span>
                                </div>
                            </li>
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="/images/item-cart-03.jpg" alt="IMG">
                                </div>
                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Nixon Porter Leather Watch In Tan
                                    </a>
                                    <span class="header-cart-item-info">
											1 x $17.00
										</span>
                                </div>
                            </li>
                        </ul>
                        <div class="header-cart-total">
                            Total: $75.00
                        </div>
                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">

                                <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    View Cart
                                </a>
                            </div>
                            <div class="header-cart-wrapbtn">

                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Check Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
    </div>

    <div class="wrap-side-menu">
        <nav class="side-menu">
                <ul class="main_menu">
                        <li>
                            <a href="{{route('homeMember')}}">صفحه اصلی</a>
                        </li>
                        <li class="sale-noti">
                            <a href="{{route('allProductMember')}}">محصولات ما</a>
                        </li>
                        <li>
                            <a href="{{route('aboutMember')}}">درباره ما</a>
                        </li>
                        <li>
                            <a href="{{route('contactMember')}}">تماس با ما</a>
                        </li>
                    </ul>
           
        </nav>
    </div>
</header>

<!--START :: content-->

@yield('content')

<!--END :: content-->

<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            @if($Abouts && count($Abouts)>0)
                @foreach($Abouts as $About)
            <h4 class="s-text12 p-b-30">
               <span> در تماس باشید:</span><br>
               <span class="s-text7 w-size27 mr-3">{{$About->phone}}</span>
            </h4>
            <div>
                <p class="s-text7 w-size27">
                  <span>ادرس فروشگاه:</span> <br>
                    <span class="s-text7 w-size27 mr-3">{{$About->address}}</span>
                </p>

            @endforeach
            @endif
                <div class="flex-m p-t-30">
                    <!-- <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a> -->
                </div>
            </div>
        </div>
        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                دسته بندی
            </h4>
            <ul>
                @if($dastebandis && count($dastebandis)>0)
                    @foreach($dastebandis as $dastebandi)
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        {{$dastebandi->dastebandi}}
                    </a>
                </li>
                    @endforeach
                @endif

            </ul>
        </div>
        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                لینک ها
            </h4>
            <ul>
                <li class="p-b-9">
                    <a href="{{route('homeMember')}}" class="s-text7">
                        صفحه اصلی
                    </a>
                </li>
                <li class="p-b-9">
                    <a href="{{route('aboutMember')}}" class="s-text7">
                        درباره ما
                    </a>
                </li>
                <li class="p-b-9">
                    <a href="{{route('contactMember')}}" class="s-text7">
                        تماس با ما
                    </a>
                </li>
                <li class="p-b-9">
                    <a href="{{route('allProductMember')}}" class="s-text7">
                        محصولات
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                لینکهای کمکی
            </h4>
            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        رهگیری سفارش
                    </a>
                </li>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        بازده
                    </a>
                </li>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        فروشگاه
                    </a>
                </li>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        پرسش و پاسخ
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                خبرنامه
            </h4>
            <form action="" method="post">
                {{csrf_field()}}
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="email" name="email"
                           placeholder="ایمیل خود را وارد کنید">
                    <span class="effect1-line"></span>
                </div>
                <div class="w-size2 p-t-20">

                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        ثبت
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="t-center p-l-15 p-r-15">
        <a href="#">
            <img class="h-size2" src="/images/icons/iconfinder_instagram_1107220 (1).png" title="اینستاگرام" alt="ایکن اینستاگرام">
        </a>
        <a href="#">
            <img class="h-size2" src="/images/icons/iconfinder_social-07_3146784.png" title="تلگرام" alt="ایکن تلگرام">
        </a>
        <a href="#">
            <img class="h-size2" src="/images/icons/iconfinder_whatsapp_287520.png" title="واتساپ" alt="ایکن واتساپ">
        </a>
        <a href="#">
            <img class="h-size2" src="/images/icons/iconfinder_facebook_circle_color_107175.png" title="فیس بوک" alt="ایکن فیس بوک">
        </a>
        <a href="#">
            <img class="h-size2" src="/images/icons/iconfinder_twitter_circle_color_107170.png" title="توئیتر" alt="ایکن توئیتر">
        </a>
        <div class="t-center s-text8 p-t-20">
            حق کپی و رایت محفوظ مبلمان اصیل است ©
        </div>
    </div>
</footer>

<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<div id="dropDownSelect1"></div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="" src="/vendor/jquery/jquery-3.2.1.min.js"></script>

<script type="" src="/vendor/animsition/js/animsition.min.js"></script>

<script type="" src="/vendor/bootstrap/js/popper.js"></script>
<script type="" src="/vendor/bootstrap/js/bootstrap.min.js"></script>

<script type="" src="/vendor/select2/select2.min.js"></script>
    <script type="">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

<script type="" src="/vendor/slick/slick.min.js"></script>
<script type="" src="/js/slick-custom.js"></script>

<script type="" src="/vendor/countdowntime/countdowntime.js"></script>

<script type="" src="/vendor/lightbox2/js/lightbox.min.js"></script>

<script type="" src="/vendor/sweetalert/sweetalert.min.js"></script>

<script src="/js/main.js" type=""></script>

<script src="/ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
            data-cf-settings="888a2198ced61eb2d090dfdc-|49" defer=""></script>
<script src="/js/all.min.js"></script>

@yield('script')

</body>
</html>
