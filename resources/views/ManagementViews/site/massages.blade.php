@extends('ManagementViews.layout.main')

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
                                        <th scope="col">ردیف</th>
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
                                                <a href="" class="link-edit-product"><i class="fa fa-minus-square" aria-hidden="true" style="color: red;"></i></a>
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
