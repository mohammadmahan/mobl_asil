@extends('ManagementViews.layout.main')

@section('content')
<script src="/js/myjq.js"></script>
    <script>
        $(document).ready(function () {
            $(".details").click(function () {
                var userId = $(this).attr("id");
                var count = $(this).attr("count");
                $.get('/details/blog', {
                    userId: userId
                }, function (data) {

                    //Getting informations from server
                    var title = data["title"];
                    var Description = data["Description"];

                    //set values in modal
                    $("#title").text(title);
                    $("#Description").text(Description);
                });
            });
        });
    </script>
<div class="content-wrapper">
    <div class="content-header row mb-1">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h4 class="content-header-title">اطلاعات صفحه وبلاگ</h4>
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
                                        <th scope="col">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($informationblogs && count($informationblogs)>0)
                                    @foreach($informationblogs as $informationblog)
                                        <tr>
                                            <td scope="row">{{$informationblog->id}}</td>
                                            <td><img src="{{$informationblog->image}}" width="200px" height="100px" /></td>
                                            <td>{{$informationblog->title}}</td>
                                            <td>
                                                <a href="{{route('ManagementBlogEdit',$informationblog->id)}}" class="link-edit-product">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a id="{{$informationblog->id}}" class="details" data-toggle="tooltip" data-original-title="جزئیات محصول">
                                                    <i class="fa fa-database" data-toggle="modal" data-target="#modaldetails" aria-hidden="true"></i>
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
            <div class="">
                {{$informationblogs->links()}}
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
                                <th> عنوان</th>
                                <td id="title" class=" p-2"></td>
                            </tr>
                            <tr>
                                <th>مشخصات محصول</th>
                                <td id="Description" class="text-justify p-2"></td>
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
