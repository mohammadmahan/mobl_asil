@extends('ManagementViews.layout.main')
@section('title')
    مبل اصیل | خبرنامه
@stop
@section('content')

    <div class="content-wrapper">
        <div class="content-header row mb-1">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <h4 class="content-header-title">ایمیل های ثبت شده</h4>
            </div>
            <div class="content-header-left col-md-12 col-12 mb-1">
                <a href="{{route('Export.Newsletters')}}">
                    <button class="btn btn-info round box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button">دانلود</button>
                </a>
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
                                        <th scope="col">ایمیل</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($Newsletters && count($Newsletters )>0)
                                        @foreach($Newsletters as $Newsletter)
                                            <tr>
                                                <td scope="row">{{$Newsletter->id}}</td>
                                                <td>{{$Newsletter->email}}</td>
                                                <td>
                                                    <a class="link-edit-product" href="{{route('delete.NewslettersShow',$Newsletter->id)}}" data-original-title="حذف پیام">
                                                        <i class="fa fa-minus-square" aria-hidden="true" style="color: red;"></i>
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

@stop
