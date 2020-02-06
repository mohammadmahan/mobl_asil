@extends('ManagementViews.layout.main')
@section('title')
    فیلتر قیمت محصولات
@stop
@section('content')

<div class="content-wrapper">
    <div class="content-header row mb-1">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h4 class="content-header-title">فیلتر قیمت محصولات </h4>
        </div>
    </div>
    <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
        <div class="col-md-6 col-12 mt-2 mb-2">
                <div class="btn-group">
                    <a href="{{route('ManagementAddFilter')}}">
                        <button class="btn btn-info round box-shadow-2 px-2" type="button"> افزودن فیلتر</button>
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
                                        <th scope="col">رده بندی</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($priceproducts && count($priceproducts)>0)
                                    @foreach($priceproducts as $priceproduct)
                                    <tr>
                                        <th scope="row">{{$priceproduct->id}}</th>
                                        <td>{{$priceproduct->price}}</td>
                                        <td>
                                            <a href="{{route('ManagementFilteringEdit',$priceproduct->id)}}" class="link-edit-product">
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
                        </form>
                        <div class="">
                            {{$priceproducts->links()}}
                        </div>
                    </div>
                    <!-- Table head options end -->
                </div>
            </div>
        </div>
    </div>
</div>
            @stop
