@extends('ManagementViews.layout.main')

@section('content')
<script src="/js/myjq.js"></script>
    <script>
        $(document).ready(function () {
            $(".details").click(function () {
                var userId = $(this).attr("id");
                var count = $(this).attr("count");
                $.get('details/productindex', {
                    userId: userId
                }, function (data) {

                    //Getting informations from server
                    var name = data["name"];
                    var number_product = data["number_product"];
                    var Description = data["Description"];

                    //set values in modal
                    $("#name").text(name);
                    $("#number_product").text(number_product);
                    $("#Description").text(Description);
                });
            });
        });
    </script>
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
                                            <td>
                                                <a href="{{route('ManagementProductIndexEdit',$productindex->id)}}" class="link-edit-product">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a id="{{$productindex->id}}" class="details" data-toggle="tooltip" data-original-title="جزئیات محصول">
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
                                <td id="name"></td>
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
