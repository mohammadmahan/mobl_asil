@extends('layout.main')
@section("title")
مبلمان اصیل | صفحه اصلی
@stop
@section("content")

<section class="bgwhite mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 p-b-75">
                <div class="p-r-50 p-r-0-lg">

                    <div class="item-blog p-b-80">
                        <a class="item-blog-img pos-relative dis-block hov-img-zoom">
                            <img src="{{old('name',isset($InformationBlogs) ? $InformationBlogs->image : '')}}" alt="IMG-BLOG">
                        </a>
                        <div class="item-blog-txt p-t-33">
                            <h4 class="p-b-11">
                                <a href="blog-detail.html" class="m-text24">
                                {{old('name',isset($InformationBlogs) ? $InformationBlogs->title : '')}}
                                </a>
                            </h4>
                            <p class="p-b-12">
                            {{old('name',isset($InformationBlogs) ? $InformationBlogs->Description : '')}}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-lg-3 p-b-75">
                <div class="rightbar">

                    <div class="pos-relative bo11 of-hidden">
                        <input class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-product"
                            placeholder="جستجو">
                        <button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
                            <i class="fs-13 fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>

                    <h4 class="m-text23 p-t-56 p-b-34">
                        دسته بندی ها
                    </h4>
                    <ul>
                        <li class="p-t-6 p-b-8 bo6">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                مبلمان راحتی
                            </a>
                        </li>
                        <li class="p-t-6 p-b-8 bo7">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                مبلمان کلاسیک
                            </a>
                        </li>
                        <li class="p-t-6 p-b-8 bo7">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                مبلمان سلطنتی
                            </a>
                        </li>
                        <li class="p-t-6 p-b-8 bo7">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                مبلمان تک نفره
                            </a>
                        </li>
                        <li class="p-t-6 p-b-8 bo7">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                کاناپه
                            </a>
                        </li>
                    </ul>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
