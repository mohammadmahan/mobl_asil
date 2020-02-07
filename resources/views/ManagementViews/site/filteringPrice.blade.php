@extends('ManagementViews.layout.main')
@section('title')
    فیلتر قیمت محصولات
@stop
@section('content')

<div class="content-wrapper">
    <div class="content-header row mb-1">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h4 class="content-header-title">فیلتر قیمت محصولات </h4>
        </div>
    </div>
    <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
        <div class="col-md-6 col-12 mt-2 mb-2">
                <div class="btn-group">
                    <a href="{{route('ManagementAddFilter')}}">
                        <button class="btn btn-info round box-shadow-2 px-2" type="button"> افزودن فیلتر</button>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-content collapse show pad-box">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">شناسه</th>
                                        <th scope="col">رده بندی</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($priceproducts && count($priceproducts)>0)
                                    @foreach($priceproducts as $priceproduct)
                                    <tr>
                                        <th scope="row">{{$priceproduct->id}}</th>
                                        <td>{{$priceproduct->price}}</td>
                                        <td>
                                            <a href="{{route('ManagementFilteringEdit',$priceproduct->id)}}" class="link-edit-product">
                                                <i class="fa fa-edit"></i>
                                            </a>
<<<<<<< HEAD
                                            <a class="link-edit-product" data-toggle="tooltip" data-original-title="حذف پیام">
                                                    <i data-toggle="modal" data-target="#exampleModal" class="fa fa-minus-square" aria-hidden="true" style="color: red;"></i>
=======
                                            <a class="link-edit-product" href="{{route('delete.massage',$priceproduct->id)}}" data-toggle="tooltip" data-original-title="حذف پیام">
                                                <i  class="fa fa-minus-square" aria-hidden="true"></i>
>>>>>>> 9bacb78384c4261be8872c329cc2c73670e135a3
                                            </a>

                                        </td>
                                    </tr>


                                     <!------------------start modal delete----------------------------->
<<<<<<< HEAD
                                     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">حذف پیام</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ایا میخواهید حذف کنید؟
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                                                        <a href="{{route('delete.Filter',$priceproduct->id)}}" type="submit" class="btn btn-primary delete-button">حذف</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
=======
{{--                                     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"--}}
{{--                                             aria-hidden="true">--}}
{{--                                            <div class="modal-dialog" role="document">--}}
{{--                                                <div class="modal-content">--}}
{{--                                                    <div class="modal-header">--}}
{{--                                                        <h5 class="modal-title" id="exampleModalLabel">حذف پیام</h5>--}}
{{--                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                            <span aria-hidden="true">&times;</span>--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="modal-body">--}}
{{--                                                        ایا میخواهید حذف کنید؟--}}
{{--                                                    </div>--}}
{{--                                                    <div class="modal-footer">--}}
{{--                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>--}}
{{--                                                        <a href="" type="submit" class="btn btn-primary delete-button">حذف</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
>>>>>>> 9bacb78384c4261be8872c329cc2c73670e135a3
                                        <!------------------end modal delete----------------------------->
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                                    </div>
                            </div>
                        </form>
                        <div class="">
                            {{$priceproducts->links()}}
                        </div>
                    </div>
                    <!-- Table head options end -->
                </div>
            </div>
        </div>
    </div>
</div>
            @stop
