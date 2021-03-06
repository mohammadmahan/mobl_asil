@extends('ManagementViews.layout.main')
@section("title")
    تحلیل سیستم
@stop
@section('content')

<div class="content-wrapper">
    <div class="content-header row mb-1">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h4 class="content-header-title">تحلیل بخش های سیستم </h4>
        </div>
    </div>
    <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <section id="minimal-statistics">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card">
                                <a href="{{route('ManagementTahlilSlider')}}">
                                    <div class="card-content single-card">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-center">
                                                    <h5> اسلایدر</h5>
                                                    <span>عکسهای اسلایدر صفحه اصلی</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card">
                                <a href="{{route('ManagementTahlilAbout')}}">
                                    <div class="card-content single-card">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-center">
                                                    <h5> اطلاعات درباره ما</h5>
                                                    <span>اطلاعات ثبت شده صفحه درباره ما</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card">
                                <a href="{{route('ManagementTahlilBlog')}}">
                                    <div class="card-content single-card">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-center">
                                                    <h5> بخش وبلاگ</h5>
                                                    <span>تصاویر و اطلاعات  بخش وبلاگ </span>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="icon-rocket danger font-large-2 float-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card">
                                <a href="{{route('filtering.categories')}}">
                                    <div class="card-content single-card">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-center">
                                                    <h5>دسته بندی محصولات</h5>
                                                    <span> دسته بندی محصولات</span>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="icon-user success font-large-2 float-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        
                        

                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card">
                                <a href="{{route('filtering.price')}}">
                                    <div class="card-content single-card">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-center">
                                                <h5>فیلتر قیمت محصولات</h5>
                                                <span> فیلتر محصولات</span>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="icon-pie-chart warning font-large-2 float-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card">
                                <a href="{{route('NewslettersShow')}}">
                                    <div class="card-content single-card">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-center">
                                                    <h5>خبرنامه</h5>
                                                    <span>ایمیل های وارد شده</span>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="icon-support info font-large-2 float-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- Table head options end -->
    </div>
</div>

@stop
