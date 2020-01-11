@extends('layout.main')
@section("title")
مبلمان اصیل | صفحه اصلی
@stop
@section("content")

<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1 ltr-dir">
		@if($sliders && count($sliders)>0)

        @foreach($sliders as $slider)

            <div class="item-slick1 item1-slick1" style="background-image: url({{$slider->image}});">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15"
                              data-appear="fadeInDown">

						</span>
                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37"
                        data-appear="fadeInUp">
                      {{$slider->title}}
                    </h2>
                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">

                    </div>
                </div>
            </div>
           
			@endforeach
            @endif
        </div>
    </div>
</section>

<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">

					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner-02.jpg" alt="IMG-BENNER">
						<div class="block1-wrapbtn w-size2">

							<a href="" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							مشاهده محصول
							</a>
						</div>
					</div>

					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner-05.jpg" alt="IMG-BENNER">
						<div class="block1-wrapbtn w-size2">

							<a href="" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							مشاهده محصول
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">

					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner-03.jpg" alt="IMG-BENNER">
						<div class="block1-wrapbtn w-size2">

							<a href="" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								مشاهده محصول
							</a>
						</div>
					</div>

					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner-07.jpg" alt="IMG-BENNER">
						<div class="block1-wrapbtn w-size2">

							<a href="" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							مشاهده محصول
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">

					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner-04.jpg" alt="IMG-BENNER">
						<div class="block1-wrapbtn w-size2">

							<a href="" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							مشاهده محصول
							</a>
						</div>
					</div>

					<div class="block2 wrap-pic-w pos-relative m-b-30">
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner-05.jpg" alt="IMG-BENNER">
						<div class="block1-wrapbtn w-size2">

							<a href="" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							مشاهده محصول
							</a>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="newproduct bgwhite p-t-45 p-b-105 ltr-dir">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					محصولات جدید
				</h3>
			</div>

			<div class="wrap-slick2">
				<div class="slick2">

                    @if($newProducts && count($newProducts)>0)

                        @foreach($newProducts as $newProduct)
                            <div class="item-slick2 p-l-15 p-r-15">

                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                        <img src="{{$newProduct->image}}" alt="IMG-PRODUCT">
                                        <div class="block2-overlay trans-0-4">

                                            <div class="block2-btn-addcart w-size1 trans-0-4">

                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    مشاهده محصول
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block2-txt direction-rtl p-t-20">
                                        <a href="" class="block2-name dis-block s-text3 p-b-5">
                                            {{$newProduct->title}}
                                        </a>
                                        <span class="block2-newprice m-text8 p-r-5">
                                            {{$newProduct->cost}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
				</div>
			</div>
		</div>
	</section>


	<section class="blog bgwhite bg5 p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					وبلاگ ما
				</h3>
			</div>
			<div class="row">
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">

					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="images/blog-01.jpg" alt="IMG-BLOG">
						</a>
						<div class="block3-txt background-blog p-t-14">
						<h4 class="card-title">مبل سلطنتی</h4>
							<p class="s-text8 p-t-16">
							لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
							</p>
							<a href="" class="more-details">
							<span>بیشتر بدانید<i class="fa fa-chevron-lef"></i></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">

					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="images/blog-02.jpg" alt="IMG-BLOG">
						</a>
						<div class="block3-txt background-blog p-t-14">
						<h4 class="card-title">مبل کلاسیک</h4>
							<p class="s-text8 p-t-16">
							لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
							</p>
							<a href="" class="more-details">
							<span>بیشتر بدانید<i class="fa fa-chevron-lef"></i></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">

					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="images/blog-03.jpg" alt="IMG-BLOG">
						</a>
						<div class="block3-txt background-blog p-t-14">
						<h4 class="card-title">مبل راحتی</h4>
							<p class="s-text8 p-t-16">
							لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
							</p>
							<a href="" class="more-details">
								<span>بیشتر بدانید<i class="fa fa-chevron-lef"></i></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					کیفیت کالا
				</h4>
				<span class="s-text11 t-center">
					بهترین کیفیت را از ما بخواهید
				</span>
			</div>
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					تضمین قیمت
				</h4>
				<span class="s-text11 t-center">
					مناسب ترین قیمت ها را از ما بخواهید
				</span>
			</div>
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					مدل های مختلف
				</h4>
				<span class="s-text11 t-center">
					تنوع رنگ ها و طرح ها را از ما بخواهید
				</span>
			</div>
		</div>
	</section>

@stop
