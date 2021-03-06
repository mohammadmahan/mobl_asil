
@extends('layout.main')
@section("title")
مبلمان اصیل|درباره ما
@stop
@section("style")
    <style>
        li.about-us-menu > a {
            color: #e65540;
        }
    </style>
@stop
@section("content")

<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/sofa/bbb.jpg); height:280px; background-repeat: no-repeat;
    background-size: cover;position:relative;">
    <div class="color-overlay">
    
    </div>
    <h4 class="l-text2 t-center">
درباره ما
</h4>
    </section>

    <section class="bgwhite p-t-66 p-b-38">
        <div class="container">
            @if($Abouts && count($Abouts)>0)
            @foreach($Abouts as $About)
                <div class="row">
                    <div class="col-md-4 p-b-30">
                        <div class="hov-img-zoom">
                            <img src="{{$About->profile}}" alt="IMG-ABOUT">
                        </div>
                    </div>
                    <div class="col-md-8 p-b-30" style="direction: rtl;">
                        <h3 class="m-text26 p-t-15 p-b-16">
                            {{$About->title}}
                        </h3>
                        <p class="p-b-28">
                            {{$About->Description}}
                        </p>
                        <div class="bo13 p-l-29 m-l-9 p-b-10">
                            <span>شماره تماس فروشگاه:</span>
                            <span class="s-text7">
                                {{$About->phone}}
                            </span>
                        </div>
                        <div class="bo13 p-l-29 m-l-9 p-b-10">
                            <span> ادرس فروشگاه:</span>
                            <span class="s-text7">
                                {{$About->address}}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
    </section>

@stop
