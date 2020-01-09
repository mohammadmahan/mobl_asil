@extends('ManagementViews.layout.main')
@section('title')
محصولات ثبت شده
@stop
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-6 col-12 mt-3">
            <div class="btn-group">
                <a href="{{route('ManagementAddProduct')}}">
                    <button class="btn btn-info round box-shadow-2 px-2" type="button"> افزودن محصول</button>
                </a>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="search-box-div">
                <div class="cell"><input class="input-search" type="search" placeholder="جستجو کنید"></div>
                <div class="cell">
                    <div type="submit" class="button">جستجو</div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header row mb-1 mt-3">
        <div class="content-header-left col-md-6 col-12">
            <h4 class="content-header-title">محصولات ثبت شده</h4>
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
                                        <th scope="col">نام محصول</th>
                                        <th scope="col">قیمت</th>
                                        <th scope="col">کد محصول</th>
                                        <th scope="col">توضیحات</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
<<<<<<< HEAD
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>مبل آبی</td>
                                        <td>1299000 تومان</td>
                                        <td>توضیحات محصول این جا قرار بگیره</td>
                                        <td>
                                            <a href="{{route('ManagementEditProduct')}}" class="link-edit-product"><i
                                                    class="fa fa-edit"></i>
                                            </a>
                                            <a data-toggle="modal" data-target="#modaldetails">
                                                <i class="fa fa-file-text" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
=======
                                @if($allProductMembers && count($allProductMembers)>0)
                                    @foreach($allProductMembers as $allProductMember)
                                        <tr>
                                            <th scope="row">{{$allProductMember->id}}</th>
                                            <td>{{$allProductMember->name}}</td>
                                            <td>{{$allProductMember->lastcost}}</td>
                                            <td>{{$allProductMember->number_product}}</td>
                                            <td>{{$allProductMember->Description}}</td>
                                            <td>
                                                <a href="{{route('ManagementEditProduct',$allProductMember->id)}}" class="link-edit-product">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
>>>>>>> b698ac9888ec686cefa00e4aa194d868687c1266
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table head options end -->
    </div>

    <!------------------------start modal details-------------------------------->
    <div class="modal fade" id="modaldetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">جزئیات محصول</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="table-responsive responsive">
                    <table class="table-striped">
                        <tr> 
                            <th>نام محصول</th>
                            <td>لبزی</td>
                        </tr>
                        <tr>
                            <th>کد محصول</th>
                            <td>32234</td>
                        </tr>
                        <tr>
                            <th>تصویر محصول</th>
                            <td>البیسظ</td>
                        </tr>
                        <tr>
                            <th>مشخصات محصول</th>
                            <td>بزیطسظ</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------end modal details-------------------------------->

</div>

@stop
