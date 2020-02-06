@extends('ManagementViews.layout.main')
@section('title')
    ویرایش دسته بندی محصولات
@stop
@section('content')

    <div class="content-wrapper">
        <div class="content-header row mb-1">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h4 class="content-header-title">ویرایش دسته بندی محصولات</h4>
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
                                        <div class="col-md-6 mt-2">
                                            <div class="row">
                                                <div class="form-group col-md-6 mb-2">
                                                    <label>دسته بندی</label>
                                                    <input type="text" class="form-control" name="dastebandi"
                                                           value="{{old('name',isset($dastebandi) ? $dastebandi -> dastebandi: '')}}">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 text-left mr-2">
                                                    <div class="mt-5">
                                                        <button type="submit" class="btn btn-primary">
                                                            ذخیره
                                                        </button>
                                                        <a href="{{route('filtering.categories')}}">
                                                            <button type="button" class="btn btn-danger">
                                                                لغو
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
