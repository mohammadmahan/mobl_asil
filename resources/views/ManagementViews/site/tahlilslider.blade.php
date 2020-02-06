@extends('ManagementViews.layout.main')
@section("title")
    اسلایدر
@stop


@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-6 col-12 mt-3">
            <div class="btn-group">
                <a href="{{route('ManagementAddSlider')}}">
                    <button class="btn btn-info round box-shadow-2 px-2" type="button"> افزودن محصول</button>
                </a>
            </div>
        </div>

    </div>
    <div class="content-header row mb-1 mt-3">
        <div class="content-header-left col-md-6 col-12">
            <h4 class="content-header-title">اسلایدر</h4>
        </div>

    </div>
    <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ردیف</th>
                                        <th scope="col">تصویر</th>
                                        <th scope="col">عنوان</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($topsliders && count($topsliders)>0)
                                    @foreach($topsliders as $topslider)
                                    <tr>
                                        <th scope="row">{{$topslider->id}}</th>
                                        <td><img src="{{$topslider->image}}" width="200px" height="100px" /></td>
                                        <td>{{$topslider->title}}</td>
                                        <td>
                                            <a href="{{route('editSlider', $topslider->id)}}" data-original-title="ویرایش محصول" class="link-edit-product">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="link-edit-product" href="{{route('delete.slider.management',$topslider->id)}}" data-original-title="حذف پیام">
                                                <i class="fa fa-minus-square" aria-hidden="true" style="color: red;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="">
                    {{$topsliders->links()}}
                </div>
            </div>
        </div>
        <!-- Table head options end -->
    </div>
</div>
@stop
