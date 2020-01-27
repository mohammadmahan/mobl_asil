@extends('ManagementViews.layout.main')
@section('title')
پیام های دریافتی
@stop
@section('content')

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
                                        <th scope="col">پیام</th>
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
                                        <td>{{$massage->massage}}</td>
                                        <td>
                                            <a  class="link-edit-product" data-toggle="tooltip" data-original-title="حذف پیام">
                                                <i data-toggle="modal" data-target="#exampleModal" class="fa fa-minus-square" aria-hidden="true" style="color: red;"></i>
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
                                                    <a href="{{route('delete.massage',$massage->id)}}" type="submit" class="btn btn-primary">حذف</a>
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
            </div>
        </div>
        <!-- Table head options end -->


    </div>
</div>

@stop
