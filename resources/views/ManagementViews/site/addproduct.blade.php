@extends('ManagementViews.layout.main')

@section('content')

<div class="content-wrapper">
    <div class="content-header row mb-1">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h4 class="content-header-title">افزودن محصول </h4>
        </div>
    </div>
    <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content collapse show pad-box">
                    <form class="form">
							<div class="form-body">
							{{csrf_field()}}
								<div class="row">
									<div class="form-group col-md-6 mb-2">
										<label for="projectinput1">اسم محصول</label>
										<input type="text" id="projectinput1" class="form-control" name="name">
                                    </div>
                                    <div class="form-group col-md-6 mb-2">
										<label for="projectinput4">کد محصول</label>
										<input type="text" id="projectinput4" class="form-control" name="code">
									</div>
									
								</div>
								<div class="row">
									<div class="form-group col-md-6 mb-2">
										<label for="projectinput3">قیمت جدید</label>
										<input type="text" id="projectinput3" class="form-control" name="lastcost">
									</div>
									<div class="form-group col-md-6 mb-2">
										<label for="projectinput2">قیمت قبلی</label>
										<input type="text" id="projectinput2" class="form-control" name="pastcost">
									</div>
								</div>

								<div class="row">
									<div class="form-group col-12 mb-2">
										<label>تصویر محصول</label>
										<label id="projectinput8" class="file center-block">
											<input type="file" id="file" name="image">
											<span class="file-custom"></span>
										</label>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-12 mb-2">
										<label for="projectinput9">توضیحات</label>
										<textarea id="projectinput9" rows="5" class="form-control" name="comment"></textarea>
									</div>
                                </div>
                                <div class="form-actions top btn-form-update">
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