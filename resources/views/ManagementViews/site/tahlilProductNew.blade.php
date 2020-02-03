@extends('ManagementViews.layout.main')
@section('title')
مبل اصیل|محصولات جدید
@stop
@section('content')
<script src="/js/myjq.js"></script>
    <script>
        $(document).ready(function () {
            $(".details").click(function () {
                var userId = $(this).attr("id");
                var count = $(this).attr("count");
                $.get('details/productNew', {
                    userId: userId
                }, function (data) {

                    //Getting informations from server
                    var title = data["title"];
                    var number_product = data["number_product"];
                    var Description = data["Description"];

                    //set values in modal
                    $("#title").text(title);
                    $("#number_product").text(number_product);
                    $("#Description").text(Description);
                });
            });
        });
    </script>
<div class="content-wrapper">
    <div class="content-header row mb-1">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h4 class="content-header-title">ویرایش محصولات جدید</h4>
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
                                        <th scope="col">کد محصول</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($newproducts && count($newproducts )>0)
                                @foreach($newproducts as $newproduct)
                                    <tr>
                                        <td scope="row">{{$newproduct->id}}</td>
                                        <td><img src="{{$newproduct->image}}" width="200px" height="100px" /></td>
                                        <td>{{$newproduct->title}}</td>
                                        <td>{{$newproduct->cost}}</td>
                                        <td>{{$newproduct->number_product}}</td>
                                        <td>
                                            <a href="{{route('ManagementProductNewEdit',$newproduct->id)}}" class="link-edit-product">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a id="{{$newproduct->id}}" class="details" data-toggle="tooltip" data-original-title="جزئیات محصول">
                                                <i class="fa fa-arrows-v" data-toggle="modal" data-target="#modaldetails" aria-hidden="true"></i>
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
                                <td id="title"></td>
                            </tr>
                            <tr>
                                <th>کد محصول</th>
                                <td id="number_product"></td>
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
