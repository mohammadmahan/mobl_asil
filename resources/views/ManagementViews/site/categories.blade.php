@extends('ManagementViews.layout.main')
@section('title')
    فیلتر دسته بندی محصولات
@stop
@section('content')

    <div class="content-wrapper">
        <div class="content-header row mb-1">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h4 class="content-header-title">فیلتر دسته بندی محصولات </h4>
            </div>
        </div>
        <div class="content-body">
            <!-- Table head options start -->
            <div class="row">
            <div class="col-md-6 col-12 mt-2 mb-2">
                <div class="btn-group">
                    <a href="{{route('ManagementAddCategories')}}">
                        <button class="btn btn-info round box-shadow-2 px-2" type="button"> افزودن دسته بندی</button>
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
                                        <th scope="col">دسته بندی</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($dastebandis && count($dastebandis)>0)
                                        @foreach($dastebandis as $dastebandi)
                                            <tr>
                                                <th scope="row">{{$dastebandi->id}}</th>
                                                <td>{{$dastebandi->dastebandi}}</td>
                                                <td>
                                                    <a href="{{route('filtering.categories.edit',$dastebandi->id)}}" class="link-edit-product">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a class="link-edit-product" href="{{route('delete.Categories',$dastebandi->id)}}" data-toggle="tooltip" data-original-title="حذف پیام">
                                                        <i  class="fa fa-minus-square" aria-hidden="true"></i>
                                                    </a>

                                                    <a class="link-edit-product" data-toggle="tooltip" data-original-title="حذف پیام">
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
                                                        <a href="{{route('delete.categories',$dastebandi->id)}}" type="submit" class="btn btn-primary delete-button">حذف</a>
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
                    </form>
                    <div class="">
                        {{$dastebandis->links()}}
                    </div>
                </div>
                <!-- Table head options end -->
            </div>
        </div>
    </div>
    </div>
    </div>
@stop
