@extends('ManagementViews.layout.main')
@section("title")
    افزودن اسلایدر
@stop

@section('content')

    <div class="content-wrapper">
        <div class="content-header row mb-1">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h4 class="content-header-title">افزودن اسلایدر</h4>
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
                                            <label for="projectinput1">عنوان</label>
                                            <input type="text" id="projectinput1" class="form-control" name="title">
                                        </div>
                                        <div class="form-group col-md-6 mb-2"></div>

                                    </div>

                                    <div class="row">
                                        <div class="form-group col-12 mb-2">
                                            <label>تصویر محصول</label>
                                            <label id="projectinput8" class="file center-block">
                                                <input type="file" id="file" name="imageSlider">
                                                <span class="file-custom"></span>
                                            </label>
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
