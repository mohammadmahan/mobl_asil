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
                                        <th scope="col">ردیف</th>
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

                                                </td>
                                            </tr>
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
