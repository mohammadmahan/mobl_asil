@extends('ManagementViews.layout.main')

@section('content')

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
                                        <th scope="col">توضیحات</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($informationblogs ?? '' && count($informationblogs ?? '')>0)
                                @foreach($informationblogs ?? '' as $informationblog)
                                    <tr>
                                        <td scope="row">{{$informationblog->id}}</td>
                                        <td><img src="{{$informationblog->image}}" width="200px" height="100px" /></td>
                                        <td>{{$informationblog->title}}</td>
                                        <td>{{$informationblog->Description}}</td>
                                        <td>
                                            <a href="{{route('ManagementBlogEdit',$informationblog->id)}}" class="link-edit-product">
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
        </div>
        <!-- Table head options end -->
    </div>
</div>

@stop
