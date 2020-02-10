@extends('layout.main')
@section("title")
مبلمان اصیل | صفحه اصلی
@stop
@section("content")

<section class="bgwhite mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 p-b-75">
                <div class="p-r-50 p-r-0-lg">

                    <div class="item-blog p-b-80">
                        <a class="item-blog-img pos-relative dis-block hov-img-zoom">
                            <img src="/{{old('name',isset($InformationBlogs) ? $InformationBlogs->image : '')}}" alt="IMG-BLOG">
                        </a>
                        <div class="item-blog-txt p-t-33">
                            <h4 class="p-b-11">
                                <a href="blog-detail.html" class="m-text24">
                                {{old('name',isset($InformationBlogs) ? $InformationBlogs->title : '')}}
                                </a>
                            </h4>
                            <p class="p-b-12">
                            {{old('name',isset($InformationBlogs) ? $InformationBlogs->Description : '')}}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-lg-3 p-b-75">
                <div class="rightbar">

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


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
