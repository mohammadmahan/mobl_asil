@extends('layout.main')
@section("title")
مبلمان اصیل|همه محصولات
@stop
@section("content")

<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
    <h2 class="l-text2 t-center">
        محصولات
    </h2>
    <p class="m-text13 t-center">
        محصولات جدید فروشگاه در سایت مبلمان اصیل قرار گرفت
    </p>
</section>

<section class="bgwhite p-t-55 p-b-65">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                <div class="leftbar p-r-20 p-r-0-sm">

                    <h4 class="m-text14 p-b-7">
                        دسته بندی
                    </h4>
                    <ul class="p-b-54">
                        <li class="p-t-4">
                            <a href="#" class="s-text13 active1">
                                همه محصولات
                            </a>
                        </li>
                        <li class="p-t-4">
                            <a href="#" class="s-text13">
                                مبلمان راحتی
                            </a>
                        </li>
                        <li class="p-t-4">
                            <a href="#" class="s-text13">
                                مبلمان سلطنتی
                            </a>
                        </li>
                        <li class="p-t-4">
                            <a href="#" class="s-text13">
                                مبلمان کلاسیک
                            </a>
                        </li>
                        <li class="p-t-4">
                            <a href="#" class="s-text13">
                                کاناپه
                            </a>
                        </li>
                    </ul>

                    <h4 class="m-text14 p-b-32">
                        فیلتر
                    </h4>

                    <div class="filter-color p-t-22 p-b-50 bo3">
                        <div class="m-text15 p-b-12">
                            رنگ بندی
                        </div>
                        <ul class="flex-w">
                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter1" type="checkbox"
                                    name="color-filter1">
                                <label class="color-filter color-filter1" for="color-filter1"></label>
                            </li>
                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter2" type="checkbox"
                                    name="color-filter2">
                                <label class="color-filter color-filter2" for="color-filter2"></label>
                            </li>
                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter3" type="checkbox"
                                    name="color-filter3">
                                <label class="color-filter color-filter3" for="color-filter3"></label>
                            </li>
                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter4" type="checkbox"
                                    name="color-filter4">
                                <label class="color-filter color-filter4" for="color-filter4"></label>
                            </li>
                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter5" type="checkbox"
                                    name="color-filter5">
                                <label class="color-filter color-filter5" for="color-filter5"></label>
                            </li>
                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter6" type="checkbox"
                                    name="color-filter6">
                                <label class="color-filter color-filter6" for="color-filter6"></label>
                            </li>
                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter7" type="checkbox"
                                    name="color-filter7">
                                <label class="color-filter color-filter7" for="color-filter7"></label>
                            </li>
                        </ul>
                    </div>
                    <div class="search-product pos-relative bo4 of-hidden">
                        <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product"
                            placeholder="Search Products...">
                        <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                            <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">

                <div class="flex-sb-m flex-w p-b-35">
                    <div class="flex-w">
                        <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                            <select class="selection-2" name="sorting">
                                <option>محصولات پیش فرض</option>
                                <option>محصولات محبوب</option>
                                <option>قیمت: کم به زیاد</option>
                                <option>قیمت: زیاد به کم</option>
                            </select>
                        </div>
                        <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                            <select class="selection-2" name="sorting">
                                <option>قیمت</option>
                                <option>3000000 - 5000000</option>
                                <option>5000000 - 8000000</option>
                                <option>8000000 - 11000000</option>
                                <option>11000000 - 14000000</option>
                                <option>بیشتر از 14000000</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                <img src="images/item-02.jpg" alt="IMG-PRODUCT">
                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                    <div class="block2-btn-addcart w-size1 trans-0-4">

                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            مشاهده محصول
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block2-txt p-t-20">
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    مبلمان لوکس برای ایجاد دیزاینی زیبا
                                </a>
                                <span class="block2-price m-text6 p-r-5">
                                    5000000تومان
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img src="images/item-03.jpg" alt="IMG-PRODUCT">
                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                    <div class="block2-btn-addcart w-size1 trans-0-4">

                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            مشاهده محصول
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block2-txt p-t-20">
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    مبلمان لوکس برای ایجاد دیزاینی زیبا
                                </a>
                                <span class="block2-price m-text6 p-r-5">
                                    تومان92.50
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img src="images/item-05.jpg" alt="IMG-PRODUCT">
                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                    <div class="block2-btn-addcart w-size1 trans-0-4">

                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            مشاهده محصول
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block2-txt p-t-20">
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    مبلمان لوکس برای ایجاد دیزاینی زیبا
                                </a>
                                <span class="block2-price m-text6 p-r-5">
                                    تومان165.90
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                <img src="images/item-07.jpg" alt="IMG-PRODUCT">
                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                    <div class="block2-btn-addcart w-size1 trans-0-4">

                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            مشاهده محصول
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block2-txt p-t-20">
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    مبلمان لوکس برای ایجاد دیزاینی زیبا
                                </a>
                                <span class="block2-oldprice m-text7 p-r-5">
                                    تومان29.50
                                </span>
                                <span class="block2-newprice m-text8 p-r-5">
                                    تومان15.90
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                <img src="images/item-01.jpg" alt="IMG-PRODUCT">
                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                    <div class="block2-btn-addcart w-size1 trans-0-4">

                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            مشاهده محصول
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block2-txt p-t-20">
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    مبلمان لوکس برای ایجاد دیزاینی زیبا
                                </a>
                                <span class="block2-price m-text6 p-r-5">
                                    تومان75.00
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img src="images/item-14.jpg" alt="IMG-PRODUCT">
                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                    <div class="block2-btn-addcart w-size1 trans-0-4">

                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            مشاهده محصول
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block2-txt p-t-20">
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    مبلمان لوکس برای ایجاد دیزاینی زیبا
                                </a>
                                <span class="block2-price m-text6 p-r-5">
                                    تومان92.50
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                <img src="images/item-06.jpg" alt="IMG-PRODUCT">
                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                    <div class="block2-btn-addcart w-size1 trans-0-4">

                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            مشاهده محصول
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block2-txt p-t-20">
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    مبلمان لوکس برای ایجاد دیزاینی زیبا
                                </a>
                                <span class="block2-price m-text6 p-r-5">
                                    تومان75.00
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img src="images/item-08.jpg" alt="IMG-PRODUCT">
                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                    <div class="block2-btn-addcart w-size1 trans-0-4">

                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            مشاهده محصول
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block2-txt p-t-20">
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    مبلمان لوکس برای ایجاد دیزاینی زیبا
                                </a>
                                <span class="block2-price m-text6 p-r-5">
                                    تومان92.50
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img src="images/item-10.jpg" alt="IMG-PRODUCT">
                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                    <div class="block2-btn-addcart w-size1 trans-0-4">

                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            مشاهده محصول
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block2-txt p-t-20">
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    مبلمان لوکس برای ایجاد دیزاینی زیبا
                                </a>
                                <span class="block2-price m-text6 p-r-5">
                                    تومان165.90
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                <img src="images/item-11.jpg" alt="IMG-PRODUCT">
                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                    <div class="block2-btn-addcart w-size1 trans-0-4">

                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            مشاهده محصول
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block2-txt p-t-20">
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    مبلمان لوکس برای ایجاد دیزاینی زیبا
                                </a>
                                <span class="block2-oldprice m-text7 p-r-5">
                                    تومان29.50
                                </span>
                                <span class="block2-newprice m-text8 p-r-5">
                                    تومان15.90
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                <img src="images/item-12.jpg" alt="IMG-PRODUCT">
                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                    <div class="block2-btn-addcart w-size1 trans-0-4">

                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            مشاهده محصول
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block2-txt p-t-20">
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    مبلمان لوکس برای ایجاد دیزاینی زیبا
                                </a>
                                <span class="block2-price m-text6 p-r-5">
                                    تومان75.00
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img src="images/item-15.jpg" alt="IMG-PRODUCT">
                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                    <div class="block2-btn-addcart w-size1 trans-0-4">

                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            مشاهده محصول
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block2-txt p-t-20">
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    مبلمان لوکس برای ایجاد دیزاینی زیبا
                                </a>
                                <span class="block2-price m-text6 p-r-5">
                                    تومان92.50
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagination flex-m flex-w p-t-26">
                    <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
                    <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
