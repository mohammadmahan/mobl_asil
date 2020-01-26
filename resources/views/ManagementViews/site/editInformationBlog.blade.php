@extends('ManagementViews.layout.main')
@section('title')
ویرایش وبلاگ
@stop
@section('content')

<div class="content-wrapper">
    <div class="content-header row mb-1 mt-3">
        <div class="content-header-left col-md-6 col-12">
            <h4 class="content-header-title">ویرایش اطلاعات صفحه بلاگ</h4>
        </div>

    </div>
    <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-content collapse show pad-box">
                                        <form class="form" action="" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 mt-2">
                                                        <div class="row">
                                                            <div class="form-group col-md-6 mb-2">
                                                                <label>عنوان </label>
                                                                <input type="text" class="form-control" name="title"
                                                                    value="{{old('name',isset($informationblogItem) ? $informationblogItem -> title: '')}}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-8 mb-2">
                                                                <label>توضیحات</label>
                                                                <textarea class="form-control" row="5"
                                                                    name="Description"
                                                                    >{{old('name',isset($informationblogItem) ? $informationblogItem -> Description: '')}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 mb-2">
                                                                <label>تصویر</label>
                                                                <label id="projectinput8" class="file center-block">
                                                                    <input type="file" id="file" name="imageU">
                                                                    <span class="file-custom"></span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6 tahlil-img">
                                                        <img src="{{old('name',isset($informationblogItem) ? $informationblogItem -> image: '')}}"
                                                            alt="مبل اصیل" name="image" />
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
                    </div>
                </div>
            </div>
        </div>
        <!-- Table head options end -->
    </div>
</div>

@stop
