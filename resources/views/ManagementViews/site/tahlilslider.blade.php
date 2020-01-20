@extends('ManagementViews.layout.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header row mb-1 mt-3">
        <div class="content-header-left col-md-6 col-12">
            <h4 class="content-header-title">اسلایدر</h4>
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
                                        <th scope="col">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($topsliders && count($topsliders)>0)
                                    @foreach($topsliders as $topslider)
                                    <tr>
                                        <th scope="row">{{$topslider->id}}</th>
                                        <td><img src="{{$topslider->image}}" width="200px" height="100px" /></td>
                                        <td>{{$topslider->title}}</td>
                                        <td>
                                            <a href="{{route('editSlider', $topslider->id)}}" class="link-edit-product">
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
        <!-- Table head options end -->
    </div>
</div>
@stop
