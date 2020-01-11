@extends('ManagementViews.layout.main')

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
                                <a href="{{route('ManagementTahlilProduct')}}">
                                    <div class="card-content single-card">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-center">
                                                    <h5> محصولات صفحه اصلی</h5>
                                                    <span>تصاویر موجود در صفحه اصلی</span>
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
                                <a href="{{route('ManagementTahlilProductNew')}}">
                                    <div class="card-content single-card">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-center">
                                                    <h5> محصولات جدید</h5>
                                                    <span>اطلاعات اسلایدر  محصولات جدید</span>
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
                                <a href="">
                                    <div class="card-content single-card">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                    <h3 class="success">156</h3>
                                                    <span>New Clients</span>
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

                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card">
                                <a href="">
                                    <div class="card-content single-card">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                    <h3 class="warning">64.89 %</h3>
                                                    <span>Conversion Rate</span>
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
                                <a href="">
                                    <div class="card-content single-card">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                    <h3 class="info">423</h3>
                                                    <span>Support Tickets</span>
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
