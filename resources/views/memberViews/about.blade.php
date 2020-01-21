
@extends('layout.main')
@section("title")
مبلمان اصیل|درباره ما
@stop
@section("content")

    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-06.jpg);">
        <h2 class="l-text2 t-center">
            درباره ما
        </h2>
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
                            {{$About->details}}
                        </p>
                        <div class="bo13 p-l-29 m-l-9 p-b-10">
                            <span class="s-text7">
                                {{$About->management}}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
    </section>

@stop
