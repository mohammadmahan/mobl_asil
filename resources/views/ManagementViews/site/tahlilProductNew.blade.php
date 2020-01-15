@extends('ManagementViews.layout.main')

@section('content')

<div class="content-wrapper">
    <div class="content-header row mb-1">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h4 class="content-header-title">ویرایش اسلایدر محصولات جدید</h4>
        </div>
    </div>
    <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content collapse show pad-box">
                    <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ردیف</th>
                                        <th scope="col">تصویر</th>
                                        <th scope="col">عنوان</th>
                                        <th scope="col">قیمت</th>
                                        <th scope="col">توضیحات</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($newproducts ?? '' && count($newproducts ?? '')>0)
                                @foreach($newproducts ?? '' as $newproduct)
                                    <tr>
                                        <td scope="row">{{$newproduct->id}}</td>
                                        <td><img src="{{$newproduct->image}}" width="200px" height="100px" /></td>
                                        <td>{{$newproduct->title}}</td>
                                        <td>{{$newproduct->cost}}</td>
                                        <td>{{$newproduct->Description}}</td>
                                        <td>
                                            <a href="" class="link-edit-product">
                                                <i class="fa fa-edit"></i>
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
                </div>
            </div>
        </div>
        <!-- Table head options end -->
    </div>
</div>

@stop
