@extends('layout.main')
@section("title")
ارتباط | مبلمان اصیل
@stop

@section("content")

<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-06.jpg);">
    <h2 class="l-text2 t-center">
        تماس با ما
    </h2>
</section>

<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-b-30">
                <div class="row">
                    <div class="map-responsive"style="width: 100%;height:500px;">
                        <iframe style="width: 100%;height:480px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d559.6955068054152!2d57.32163884763644!3d37.48159112114854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f709660aba44931%3A0x4d402cad3369a66c!2z2b7Yp9ix2qkg2LnZhNmFINmIINmB2YbYp9mI2LHbjCDYrtix2KfYs9in2YYg2LTZhdin2YTbjA!5e0!3m2!1sen!2s!4v1573582255277!5m2!1sen!2s"
							frameborder="0" allowfullscreen="">
						</iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-b-30">
                <form action="" method="post" class="leave-comment">
                    {{csrf_field()}}
                    <h4 class="m-text26 p-b-36 p-t-15">
                        پیامتان را ارسال کنید
                    </h4>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="fullname"
                            placeholder="نام و نام خانوادگی">
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="number"
                            placeholder="شماره تماس">
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="ادرس ایمیل">
                    </div>
                    <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="massage"
                        placeholder="پیام"></textarea>
                    <div class="w-size25">

                        <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                            ارسال
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@stop
