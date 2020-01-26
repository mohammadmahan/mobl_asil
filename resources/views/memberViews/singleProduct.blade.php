@extends('layout.main')
@section("title")
مبلمان اصیل | جزئیات محصول
@stop
@section("content")

    <div class="container bgwhite p-t-35 p-b-80">


        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-slick3-dots"></div>
                    <div class="slick3">
                        <div class="item-slick3" data-thumb="images/thumb-item-01.jpg" style="position: sticky !important;">
                            <div class="wrap-pic-w bb">
                                <img src="{{old('name',isset($productItem) ? $productItem->image : '')}}" alt="IMG-PRODUCT">
                            </div>
                        </div>

                        <div class="item-slick3" data-thumb="images/thumb-item-03.jpg" style="position: sticky !important;">
                            <div class="wrap-pic-w bb">
                                <img src="{{old('name',isset($productItem) ? $productItem->image : '')}}" alt="IMG-PRODUCT">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13 mt-4">
                    {{old('name',isset($productItem) ? $productItem->name : '')}}
                </h4>
                <p class="mb-5">
                    {{old('name',isset($productItem) ? $productItem->Description : '')}}
                </p>


         <h6>مشخصات محصول</h6>

            <ul class="mb-5 mt-3 list-details">
                   <li>
                    <span>
                        <i class="fa fa-check"></i>
                   </span>
                       <span> مبلمان کلاسیک</span>
                   </li>
                    <li>
                    <span>
                        <i class="fa fa-check"></i>
                   </span>
                        <span>در رنگ بندی های: طوسی سبز سفید قهوه ای</span>
                    </li>
                    <li>
                    <span>
                        <i class="fa fa-check"></i>
                    </span>
                        <span>در تعداد 7 و 13 نفره</span>
                    </li>
                    <li>
                    <span>
                        <i class="fa fa-check"></i>
                    </span>
                        <span>دارای ست ناهار خوری</span>
                    </li>
                </ul>

                <span> قیمت : </span><span>{{old('name',isset($productItem) ? $productItem->lastcost : '')}} تومان  </span>
            </div>
        </div>



    </div>

    <section class="newproduct bgwhite p-t-45 p-b-105 ltr-dir">
        <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    محصولات جدید
                </h3>
            </div>

            <div class="wrap-slick2">
				<div class="slick2">
                    @if($newproducts && count($newproducts)>0)

                        @foreach($newproducts as $newproduct)
                            <div class="item-slick2 p-l-15 p-r-15">

                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                        <img src="{{$newproduct->image}}" alt="تصویر محصول جدید" height="150px">
                                        <div class="block2-overlay trans-0-4">

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                 <a href="{{route('singleProduct',$newproduct->id)}}">
												 <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    مشاهده محصول
                                                </button>
												 </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block2-txt direction-rtl p-t-20">
                                        <a href="" class="block2-name dis-block s-text3 p-b-5">
                                            {{$newproduct->title}}
                                        </a>
                                        <span class="block2-newprice m-text8 p-r-5">
                                            {{$newproduct->cost}}
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

@stop
