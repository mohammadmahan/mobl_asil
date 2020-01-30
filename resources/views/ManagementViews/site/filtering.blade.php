@extends('ManagementViews.layout.main')

@section('content')

<div class="content-wrapper">
    <div class="content-header row mb-1">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h4 class="content-header-title">ویرایش فیلتر محصولات </h4>
        </div>
    </div>
    <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content collapse show pad-box">
                        <h5>ویرایش فیلتر قیمت</h5>
                        <form class="form" action="" method="post">
                        {{csrf_field()}}
                            <div class="form-body">
                                <div class="row">
                                    @if($priceproducts && count($priceproducts)>0)
                                    @foreach($priceproducts as $priceproduct)
                                    <div class="col-md-12 mt-1">
                                        <div class="row">
                                            <div class="form-group col-md-5 mb-1">
                                                <input type="text" id="projectinput1" class="form-control" name="price"
                                                 value="{{old('name',isset($priceproduct) ? $priceproduct->price : '')}}">
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                        <div class="row">
                                        <div class="col-md-12 text-right mr-2">
                                            <div class="">
                                                <button type="submit" class="btn btn-primary">
                                                    ذخیره
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </form>
                    </div>
                    <!-- Table head options end -->
                </div>
            </div>
        </div>
    </div>
</div>
            @stop
