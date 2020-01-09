@extends('ManagementViews.layout.main')
@section('title')
محصولات ثبت شده
@stop
@section('content')

<div class="content-wrapper">
    <div class="content-header row mb-1">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h4 class="content-header-title">محصولات ثبت شده</h4>
        </div>
        <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right">   
              <button class="btn btn-info round box-shadow-2 px-2" type="button"> افزودن محصول</button>
            </div>
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
