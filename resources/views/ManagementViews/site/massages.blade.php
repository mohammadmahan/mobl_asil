@extends('ManagementViews.layout.main')
@section('title')
پیام های دریافتی
@stop
@section('content')
<script src="/js/myjq.js"></script>
    <script>
        $(document).ready(function () {
            $(".details").click(function () {
                var userId = $(this).attr("id");
                var count = $(this).attr("count");
                $.get('/details/massage', {
                    userId: userId
                }, function (data) {

                    //Getting informations from server
                    var fullname = data["fullname"];
                    var massage = data["massage"];

                    //set values in modal
                    $("#fullname").text(fullname);
                    $("#massage").text(massage);
                });
            });
        });
    </script>
<div class="content-wrapper">
    <div class="content-header row mb-1">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h4 class="content-header-title">پیام های دریافتی</h4>
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
                                        <th scope="col">شناسه</th>
                                        <th scope="col">نام و نام خانوادگی</th>
                                        <th scope="col">شماره تماس</th>
                                        <th scope="col">ایمیل</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($massages && count($massages)>0)
                                    @foreach($massages as $massage)
                                    <tr>
                                        <th scope="row">{{$massage->id}}</th>
                                        <td>{{$massage->fullname}}</td>
                                        <td>{{$massage->number}}</td>
                                        <td>{{$massage->email}}</td>
                                        <td>
                                            <a class="link-edit-product" data-toggle="tooltip" data-original-title="حذف پیام">
                                                <i data-toggle="modal" data-target="#exampleModal" class="fa fa-minus-square" aria-hidden="true" style="color: red;"></i>
                                            </a>
                                            <a id="{{$massage->id}}" class="details" data-toggle="tooltip" data-original-title="جزئیات محصول">
                                                <i class="fa fa-database" data-toggle="modal" data-target="#modaldetails" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!------------------start modal delete----------------------------->
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
                                                    <a href="{{route('delete.massage',$massage->id)}}" type="submit" class="btn btn-primary delete-button">حذف</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!------------------end modal delete----------------------------->
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="">
                    {{$massages->links()}}
                </div>
            </div>
        </div>
        <!-- Table head options end -->

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
                                <th>نام و نام خانوادگی</th>
                                <td id="fullname"></td>
                            </tr>
                            <tr>
                                <th>متن پبام</th>
                                <td id="massage"></td>
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
