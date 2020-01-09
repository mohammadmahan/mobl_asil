@extends('ManagementViews.layout.main')

@section('content')

<div class="content-wrapper">
    <div class="content-header row mb-1">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">محصولات ثبت شده</h3>
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
                                        <th scope="col">نام محصول</th>
                                        <th scope="col">قیمت</th>
                                        <th scope="col">توضیحات</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>مبل آبی</td>
                                        <td>1299000 تومان</td>
                                        <td>توضیحات محصول این جا قرار بگیره</td>
                                        <td><a href="{{route('ManagementEditProduct')}}" class="link-edit-product"><i class="fa fa-edit"></a></i>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>مبل راحتی</td>
                                        <td>5999300 تومان</td>
                                        <td>توضیحات محصول این جا قرار بگیره</td>
                                        <td><a href=""><i class="fa fa-edit"></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>مبل غیر راحتی</td>
                                        <td>مجانی</td>
                                        <td>توضیحات محصول این جا قرار بگیره</td>
                                        <td><a href=""><i class="fa fa-edit"></a></td>
                                    </tr>
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
