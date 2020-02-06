@extends('ManagementViews.layout.main')
@section("title")
    افزودن محصول
@stop

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
                    <form class="form" action="" method="post">
                        {{csrf_field()}}
                        <div class="form-body">
								<div class="row">
									<div class="form-group col-md-6 mb-2">
										<label for="projectinput3">فیلتر</label>
										<input type="text" id="projectinput3" class="form-control" name="price" placeholder="1000000-3000000">
									</div>
									<div class="form-group col-md-6 mb-2">
										<label for="projectinput2">دسته بندی</label>
										<select class="form-control" name="category_id">
                                    @if($dastebandis && count($dastebandis)>0)
                                    @foreach($dastebandis as $dastebandi)
                                            <option>{{$dastebandi->dastebandi}}</option>
                                    @endforeach
                                    @endif
                                        </select>
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
