@extends('ManagementViews.layout.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header row mb-1 mt-3">
        <div class="content-header-left col-md-6 col-12">
            <h4 class="content-header-title">محصولات صفحه اصلی</h4>
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
                                        <th scope="col">قیمت</th>
                                        <th scope="col">کدمحصول</th>
                                        <th scope="col">توضیحات</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($productindexs && count($productindexs)>0)
                                    
                                    @foreach($productindexs as $productindex)   
                                        <tr>
                                            <th scope="row">{{$productindex->id}}</th>
                                            <td><img src="{{$productindex->image}}" width="200px" height="100px" /></td>
                                            <td>{{$productindex->title}}</td>
                                            <td>{{$productindex->price}}</td>
                                            <td>{{$productindex->number_product}}</td>
                                            <td>{{$productindex->Description}}</td>
                                            <td>
                                                <a href="{{route('ManagementProductIndexEdit',$productindex->id)}}" class="link-edit-product">
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
        <!-- Table head options end -->
    </div>
</div>
@stop
