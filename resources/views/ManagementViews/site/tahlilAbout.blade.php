@extends('ManagementViews.layout.main')

@section('content')

<div class="content-wrapper">
    <div class="content-header row mb-1">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h4 class="content-header-title">ویرایش صفحه درباره ما </h4>
        </div>
    </div>
    <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content collapse show pad-box">
                        <form class="form" action="#" method="post">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <div class="row">
                                            <div class="form-group col-md-6 mb-2">
                                                <input type="text" id="projectinput1" class="form-control" name=""
                                                    placeholder="عنوان" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 mb-2">
                                                <input type="text" id="projectinput1" class="form-control" name=""
                                                    placeholder="تلفن" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8 mb-2">
                                                <input type="text" id="projectinput1" class="form-control" name=""
                                                    placeholder="ادرس" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8 mb-2">
                                                <textarea class="form-control" name=""
                                                    placeholder="جزئیات"></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="form-group col-md-6 mb-2">
                                                <label>تصویر صفحه درباره ما</label>
                                                <label id="projectinput8" class="file center-block">
                                                    <input type="file" id="file">
                                                    <span class="file-custom"></span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6 tahlil-img">
                                        <img src="images/sofa/supporting.jpg" alt="مبل اصیل" />
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-right mr-2">
                                            <div class="form-actions top btn-form-update">
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
                </div>
            </div>
        </div>
        <!-- Table head options end -->
    </div>
</div>

@stop
