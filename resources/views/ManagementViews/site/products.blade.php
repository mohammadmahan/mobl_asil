@extends('ManagementViews.layout.main')
@section('title')
    محصولات ثبت شده
@stop
@section('content')
    <script src="/js/myjq.js"></script>
    <script>
        $(document).ready(function () {
            $(".details").click(function () {
                var userId = $(this).attr("id");
                var count = $(this).attr("count");
                $.get('/details/product', {
                    userId: userId
                }, function (data) {

                    //Getting informations from server
                    var name = data["name"];
                    var number_product = data["number_product"];
                    var Description = data["Description"];
                    var price_id = data["price_id"];
                    var categories_id = data["categories_id"];

                    //set values in modal
                    $("#name").text(name);
                    $("#number_product").text(number_product);
                    $("#Description").text(Description);
                    $("#price_id").text(price_id);
                    $("#categories_id").text(categories_id);
                });
            });
        });
    </script>
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
                                        <th scope="col">تصویر محصول</th>
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
                                        <td><img src="{{$allProductMember->image}}" width="200px" height="150px"/></td>
                                        
                                        <td>
                                            <a href="{{route('ManagementEditProduct',$allProductMember->id)}}" class="link-edit-product" data-original-title="ویرایش محصول">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a id="{{$allProductMember->id}}" class="details" data-toggle="tooltip" data-original-title="جزئیات محصول">
                                                <i class="fa fa-arrows-v" data-toggle="modal" data-target="#modaldetails" aria-hidden="true"></i>
                                            </a>
                                            <a data-original-title="حذف محصول">
                                                <i class="fa fa-close" aria-hidden="true"></i>
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
            <!-- Table head options end -->
        </div>
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
                        <table class="table-striped tbl-modal">
                            <tr>
                                <th>نام محصول</th>
                                <td id="name"></td>
                            </tr>
                            <tr>
                                <th>کد محصول</th>
                                <td id="number_product"></td>
                            </tr>
                            <tr>
                                <th>دسته بندی</th>
                                <td id="categories_id"></td>
                            </tr>
                            <tr>
                                <th>فیلترینگ</th>
                                <td id="price_id"></td>
                            </tr>
                            <tr>
                                <th>مشخصات محصول</th>
                                <td id="Description"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                    </div>
                </div>
            </div>
        </div>
        <!------------------------end modal details-------------------------------->

    </div>
    </div>
@stop
