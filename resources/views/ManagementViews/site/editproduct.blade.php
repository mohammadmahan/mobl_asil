@extends('ManagementViews.layout.main')
@section('title')
    مبل اصیل|ویرایش محصولات
@stop
@section('content')

<div class="content-wrapper">
    <div class="content-header row mb-1">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h4 class="content-header-title">ویرایش محصول </h4>
        </div>
    </div>
    <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content collapse show pad-box">
                    <form class="form" action="" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
							<div class="form-body">
								<div class="row">
									<div class="form-group col-md-6 mb-2">
										<label for="projectinput1">اسم محصول</label>
										<input type="text" id="projectinput1" class="form-control" value="{{old('name',isset($ProductItem) ? $ProductItem->name : '')}}" name="name">
                                    </div>
                                    <div class="form-group col-md-6 mb-2">
										<label for="projectinput4">کد محصول</label>
										<input type="text" id="projectinput4" class="form-control" value="{{old('name',isset($ProductItem) ? $ProductItem->number_product : '')}}" name="number_product">
									</div>
									
								</div>
								<div class="row">
									<div class="form-group col-md-6 mb-2">
										<label for="projectinput3">قیمت جدید</label>
										<input type="text" id="projectinput3" class="form-control" value="{{old('name',isset($ProductItem) ? $ProductItem->lastcost : '')}}" name="lastcost">
									</div>
									<div class="form-group col-md-6 mb-2">
										<label for="projectinput2">قیمت قبلی</label>
										<input type="text" id="projectinput2" class="form-control" value="{{old('name',isset($ProductItem) ? $ProductItem->pastcost : '')}}" name="pastcost">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6 mb-2">
										<label for="projectinput3">دسته بندی</label>
										<select class="form-control" name="categories">
									@if($dastebandis && count($dastebandis)>0)
                                    @foreach($dastebandis as $dastebandi)
											<option>{{$dastebandi->dastebandi}}</option>
									@endforeach
                                    @endif
										</select>
									</div>
									<div class="form-group col-md-6 mb-2">
										<label for="projectinput2">فیلتر</label>
										<select class="form-control" name="price">
									@if($priceproducts && count($priceproducts)>0)
                                    @foreach($priceproducts as $priceproducts)
											<option>{{$priceproducts->price}}</option>
									@endforeach
                                    @endif
										</select>
									</div>
								</div>

								<div class="row">
									<div class="form-group col-12 mb-2">
										<label>تصویر محصول</label>
										<label id="projectinput8" class="file center-block">
											<input type="file" name="imageUZ" id="file">
											<span class="file-custom"></span>
										</label>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-12 mb-2">
										<label for="projectinput9">توضیحات</label>
										<textarea id="projectinput9" rows="5" class="form-control" name="Description">{{old('name',isset($ProductItem) ? $ProductItem->Description : '')}}</textarea>
									</div>
                                </div>
                                <div class="">
										<button type="submit" class="btn btn-primary">
											ذخیره
										</button>
										<button type="button" class="btn btn-warning mr-1">
											لغو
										</button>
								
							   </div>
							</div>
						</form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table head options end -->
    </div>
</div>

@stop
