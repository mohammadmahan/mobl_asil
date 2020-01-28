@extends('layout.main')
    @section("title")
مبلمان اصیل|همه محصولات
@stop
@section("style")
    <style>
        li.sale-noti > a {
            color: #e65540;
        }
    </style>
@stop
@section("content")

<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(/images/heading-pages-02.jpg);">
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
                <div class="search-product pos-relative bo4 of-hidden">
                        <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product"
                            placeholder="جستجو محصولات ..">
                        <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                            <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                    <h4 class="m-text14 p-b-7 mt-5">
                        دسته بندی
                    </h4>
                    <ul class="p-b-54">
                    <li class="p-t-6 p-b-8 bo6">
                            <a href="{{route('allProductMember')}}" class="s-text13 active1">
                            همه
                            </a>
                        </li>
                    @if($dastebandis && count($dastebandis)>0)
                        @foreach($dastebandis as $dastebandi)
                        
                        <li class="p-t-6 p-b-8 bo6">
                            <a href="{{route('category-products',$dastebandi->id)}}" class="s-text13 active1">
                            {{$dastebandi->dastebandi}}
                            </a>
                        </li>
                        @endforeach
                       @endif
                    </ul>


                    <h4 class="m-text14 p-b-7 mt-2">
                       فیلترها
                    </h4>
                    <ul class="p-b-54">
                    @if($priceproducts && count($priceproducts)>0)
                        @foreach($priceproducts as $priceproduct)
                        <li class="p-t-6 p-b-8 bo6">
                            <a href="{{route('price-products',$priceproduct->id)}}" class="s-text13 active1">
                            {{$priceproduct->price}}
                            </a>
                        </li>
                        @endforeach
                       @endif
                    </ul>
                    
                </div>
            </div>
            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                <div class="row">
                    @if($allProductMembers && count($allProductMembers)>0)
                        @foreach($allProductMembers as $allProductMember)
                            <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="/{{$allProductMember->image}}" alt="IMG-PRODUCT">
                                        <div class="block2-overlay trans-0-4">
                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <a href="">
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        مشاهده محصول
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block2-txt p-t-20 text-center">
                                        <a href="{{route('singleProduct',$allProductMember->id)}}" class="block2-name dis-block s-text3 p-b-5">
                                           {{$allProductMember->name}}
                                        </a>
                                        <span class="block2-price m-text6 p-r-5">
                                  <span class="custom-style-cost"><s>{{$allProductMember->pastcost}}</s></span> <br>{{$allProductMember->lastcost}}<span>تومان</span>
                                </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@stop
