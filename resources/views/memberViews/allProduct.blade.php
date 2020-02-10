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

    <script src="/js/myJq.js"></script>

    <script>
        $(document).ready(function () {

            $(".search-product-btn").click(function () {

                var searchInput = $(".search-product-input").val();
                var count;
                $.get('/search/allProducts', {
                    searchInput: searchInput
                }, function (data) {
                    console.log(data);


                    var id = data[0]["id"];
                    var image = data[0]["image"];
                    var name = data[0]["name"];
                    var pastcost = data[0]["pastcost"];
                    var lastcost = data[0]["lastcost"];



                    let myinformaion='<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">\n' +
                        '                                <div class="block2">\n' +
                        '                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">\n' +
                        '                                        <img src="'+image+'" alt="IMG-PRODUCT">\n' +
                        '                                        <div class="block2-overlay trans-0-4">\n' +
                        '                                            <div class="block2-btn-addcart w-size1 trans-0-4">\n' +
                        '                                                <a href="">\n' +
                        '                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">\n' +
                        '                                                        مشاهده محصول\n' +
                        '                                                    </button>\n' +
                        '                                                </a>\n' +
                        '                                            </div>\n' +
                        '                                        </div>\n' +
                        '                                    </div>\n' +
                        '                                    <div class="block2-txt p-t-20 text-center">\n' +
                        '                                        <a href="/singleProduct-member/'+id+'" class="block2-name dis-block s-text3 p-b-5">\n' +
                        '                                           '+name+'\n' +
                        '                                        </a>\n' +
                        '                                        <span class="block2-price m-text6 p-r-5">\n' +
                        '                                  <span class="custom-style-cost"><s>'+pastcost+'</s></span> <br>'+lastcost+'<span>تومان</span>\n' +
                        '                                </span>\n' +
                        '                                    </div>\n' +
                        '                                </div>\n' +
                        '                            </div>';


                        $("#products_object").html(myinformaion);





                    //set values in modal
                    // $("#table").text(" ");
                    // $("#radifCount").text(count);
                    // $("#namvafamily").text(name + " " + family);
                    // $("#daneshjoo_code").text(student_code);
                    // $("#code_melli").text(National_Code);
                    // $("#mobile").text("09921558293");
                    // $("#reshte").text("مهندسی کامپیوتر");
                    // $("#student_term").text(term);


                });

            });
        })
    </script>
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/sofa/bbb.jpg); height:280px; background-repeat: no-repeat;
    background-size: cover;">
   <div class="color-overlay">
    </div>
</section>

<section class="bgwhite p-t-55 p-b-65">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                <div class="leftbar p-r-20 p-r-0-sm">
                <div class="search-product pos-relative bo4 of-hidden">
                        <input class="s-text7 size6 p-l-23 p-r-50 search-product-input" type="text" name="search-product"
                            placeholder="جستجو محصولات ..">
                        <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4 search-product-btn">
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
                <div class="row" id="products_object">
                    @if($allProductMembers && count($allProductMembers)>0)
                        @foreach($allProductMembers as $allProductMember)
                            <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="{{$allProductMember->image}}" height="180px" alt="IMG-PRODUCT">
                                        <div class="block2-overlay trans-0-4">
                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <a href="{{route('singleProduct',$allProductMember->id)}}">
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
                <div class="pagination_number">

                        {{$allProductMembers->links()}}

                </div>
            </div>
        </div>
    </div>
</section>
@stop
