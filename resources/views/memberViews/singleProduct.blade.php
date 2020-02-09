@extends('layout.main')
@section("title")
مبلمان اصیل | جزئیات محصول
@stop
@section("content")

    <div class="container bgwhite p-t-35 p-b-80">


        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">
{{--                    <div class="wrap-slick3-dots"></div>--}}
                    <div class="slick3">
                        <div class="item-slick3">
                            <div class="wrap-pic-w bb">
                                <img src="{{old('name',isset($productItems) ? $productItems->image : '')}}" alt="تصویر محصول">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13 mt-4">
                    {{old('name',isset($productItems) ? $productItems->name : '')}}
                </h4>
                <span>
                    {{old('name',isset($productItems) ? $productItems->pastcost : '')}}
                </span>
                <p class="mb-5">
                    {{old('name',isset($productItems) ? $productItems->number_product : '')}}
                </p>
                <p class="mb-5">
                    {{old('name',isset($productItems) ? $productItems->Description : '')}}
                </p>


                <span> قیمت : </span><span>{{old('name',isset($productItems) ? $productItems->lastcost : '')}} تومان  </span>
            </div>
        </div>



    </div>

@stop
