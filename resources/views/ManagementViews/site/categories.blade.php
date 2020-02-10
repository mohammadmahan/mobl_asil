@extends('ManagementViews.layout.main')
@section('title')
    فیلتر دسته بندی محصولات
@stop
@section('content')

    <div class="content-wrapper">
        <div class="content-header row mb-1">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h4 class="content-header-title">فیلتر دسته بندی محصولات </h4>
            </div>
        </div>
        <div class="content-body">
            <!-- Table head options start -->
            <div class="row">
            <div class="col-md-6 col-12 mt-2 mb-2">
                <div class="btn-group">
                    <a href="{{route('ManagementAddCategories')}}">
                        <button class="btn btn-info round box-shadow-2 px-2" type="button"> افزودن دسته بندی</button>
                    </a>
                </div>
            </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-content collapse show pad-box">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">شناسه</th>
                                        <th scope="col">دسته بندی</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($dastebandis && count($dastebandis)>0)
                                        @foreach($dastebandis as $dastebandi)
                                            <tr>
                                                <th scope="row">{{$dastebandi->id}}</th>
                                                <td>{{$dastebandi->dastebandi}}</td>
                                                <td>
                                                    <a href="{{route('filtering.categories.edit',$dastebandi->id)}}" class="link-edit-product">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    <a class="link-edit-product" data-toggle="modal" data-target="#deleteCategoriesModal" data-original-title="حذف پیام" data-categorieid={{$dastebandi->id}}>
                                                      <i class="fa fa-minus-square" aria-hidden="true" style="color: red;"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <!------------------start modal delete----------------------------->
                                            <div class="modal fade" id="deleteCategoriesModal" tabindex="-1" role="dialog" aria-labelledby="deleteCategoriesLabel"
                                                 aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">حذف پیام</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{route('delete.categories','test')}}" method="post">
                                                            {{csrf_field()}}
                                                            <div class="modal_bodyfooter">
                                                                <div class="modal-body">
                                                                    ایا میخواهید حذف کنید؟
                                                                </div>
                                                                <input type="hidden" name="categories_id" id="categorie_id" value="">
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                                                                    <button type="submit" class="btn btn-primary delete-button">حذف</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <!------------------end modal delete----------------------------->
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="">
                        {{$dastebandis->links()}}
                    </div>
                </div>
                <!-- Table head options end -->
            </div>
        </div>
    </div>
    </div>
    </div>
@stop

@section('script')
    {{--    <script src="/js/myJq.js"></script>--}}
    <script>
        $('#deleteCategoriesModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);

            var categorie_id = button.data('categorieid');
            var modal = $(this);

            modal.find('.modal_bodyfooter #categorie_id').val(categorie_id);
        });

    </script>
@stop
